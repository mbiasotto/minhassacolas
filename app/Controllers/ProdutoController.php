<?php

namespace App\Controllers;
use App\Models\Produto;
use App\Models\ProdutoImagem;
use Respect\Validation\Validator as v;
use App\Helpers\Helpers as Helper;
use App\Helpers\ResizeImg as Resize;

class ProdutoController extends Controller
{    
    const currentPage = 'produtos';    
    const currentTitle = 'Produtos';    

    public function index($request, $response)
    {
        $getParams = $request->getQueryParams();

        $filtro = $getParams['filtro'] ?? null;
        $filtro_campos = array('nome');
        $getFilters = Helper::getFilters(array('filtro'=>$filtro));

        $pageCurrent = @(int)$getParams['page'];
        $itens = Produto::orderBy('ordem','ASC');

        if($filtro)
        {
            $itens = $itens->Filter($filtro, $filtro_campos);
        }

        $itens = $itens->Paginates(array('limite'=>$this->configs['pagesLimit'],'page'=>$pageCurrent));
        $pagesLink = Helper::getPaginate(array('current'=>$pageCurrent,'pages'=>$itens->lastPage(),'links'=>$getFilters));       

        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'data' =>  $itens,
            'pagesLink' =>  $pagesLink,
            'pageCurrent' =>  $pageCurrent,
            'getFilters' => $getFilters,
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/index.twig',$data);
    }

    public function create($request, $response)
    {
        if ($request->getMethod() === 'GET')
        {
            $data = [
                'page' => self::currentPage,
                'title' => self::currentTitle,
                'configs' => $this->configs
            ];

            return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/create.twig',$data);
        }

        $post = $request->getParsedBody();
        
        $item = Produto::create([
            'nome' => $post['nome'],
            'titulo' => $post['titulo'],
            'slug' => Helper::url($post['titulo']),
            'subtitulo' => $post['subtitulo'] ?? null,
            'descricao' => $post['descricao'],
            'detalhes' => $post['detalhes'] ?? null,
            'caracteristicas' => $post['caracteristicas'] ?? null,
            'aplicacao' => $post['aplicacao'] ?? null,
            'ordem' => $post['ordem'] ?? '0',
            'status' => $post['status'] ?? 'A'
        ]);


        //ADD FOTOS`
        $imagens = $request->getUploadedFiles()['imagens'];

        $ordem_array = json_decode($post['fileuploader-list-imagens'], true);
        $sort = [];
        foreach ($ordem_array as $ordem_item) {
            $arquivo = basename($ordem_item['file']);
            $sort[$arquivo] = $ordem_item['index'];
        }

        $imagem_thumb = '';
        $directory_uploads = $this->container->get('upload_directory') . '/'. self::currentPage .'/';

         foreach ($imagens as $key => $uploadedFile) {
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {       
 
                $imagem = $this->moveUploadFile($directory_uploads, $uploadedFile);
                Resize::TamanhoAutoFotoMax($directory_uploads . $imagem, '1000', '1000');
        
                $originalFilename = $uploadedFile->getClientFilename();
                
                $ordem = isset($sort[$originalFilename]['ordem']) ? $sort[$originalFilename]['ordem'] : ($key + 1);
                
                $dataImagem = [
                    'imagem' => $imagem,
                    'ordem' => $ordem,
                ];
        
                $item->imagens()->create($dataImagem);
            }
        }
         //END - ADD FOTOS

        $this->container->get('flash')->addMessage('success','Cadastro realizado com sucesso');
        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function edit($request, $response, $params)
    {
        $item = Produto::where('id',$params['id'])->first();

        if(!$item)
        {
            $this->container->get('flash')->addMessage('error','Registro não encontrado');
            return $this->redirect($request, $response, 'app.'.self::currentPage);
        }

        //Fotos
        $imagens = array();
        foreach ($item->imagens->sortby('ordem') as $key => $v) {
            $imagens[] = array(
                'name' => $v->imagem,
                'type' => 'image/jpeg',
                'file' => '../../../assets/uploads/produtos/' . $v->imagem,
                'local' => '../../../assets/uploads/produtos/' . $v->imagem,
            );
        }

        $lista_imagens = json_encode($imagens);
    
        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'd' => $item,
            'imagens' => $lista_imagens,
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/edit.twig', $data);
    }

    public function update($request, $response, $params)
    {
        $post = $request->getParsedBody();
        
        $item = Produto::find($params['id']);

        $item->nome = $post['nome'];
        $item->titulo = $post['titulo'];
        $item->slug = Helper::url($post['titulo']);
        $item->subtitulo = $post['subtitulo'] ?? $item->subtitulo;
        $item->descricao = $post['descricao'];
        $item->detalhes = $post['detalhes'] ?? $item->detalhes;
        $item->caracteristicas = $post['caracteristicas'] ?? $item->caracteristicas;
        $item->aplicacao = $post['aplicacao'] ?? $item->aplicacao;
        $item->ordem = $post['ordem'] ?? $item->ordem;
        $item->status = $post['status'] ?? $item->status;

        $item->save();

        //ORDEM DAS FOTOS
        $imagens = $request->getUploadedFiles()['imagens'];

        $ordem_array = json_decode($post['fileuploader-list-imagens'], true);
        if (!is_array($ordem_array)) {
            $ordem_array = []; // Inicializa como um array vazio se for nulo ou inválido
        }

        $sort = null;
        foreach ($ordem_array as $ordem_item) {
            $arquivo = basename($ordem_item['file']);
            $ordem = $ordem_item['index'] + 1;
            $sort[$arquivo] = ['arquivo' => $arquivo, 'ordem' => $ordem];
        }

        //UPLOAD NOVAS IMAGENS
        $i = 0;
        $directory_uploads = $this->container->get('upload_directory') . '/'. self::currentPage .'/';
        
        foreach ($imagens as $key => $uploadedFile) {
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                // Move e processa o arquivo
                $imagem = $this->moveUploadFile($directory_uploads, $uploadedFile);
                Resize::TamanhoAutoFotoMax($directory_uploads . $imagem, '1000', '1000');
        
                // Obtém o nome original do arquivo
                $originalFilename = $uploadedFile->getClientFilename();
        
                // Define a ordem
                $ordem = isset($sort[$originalFilename]['ordem']) ? $sort[$originalFilename]['ordem'] : ($key + 1);
        
                // Prepara os dados da imagem
                $dataImagem = [
                    'imagem' => $imagem,
                    'ordem' => $ordem,
                ];
                
                // Cria o registro no banco
                $item->imagens()->create($dataImagem);
        
                // Atualiza o array de ordenação
                if (isset($sort[$originalFilename])) {
                    $sort[$originalFilename]['arquivo'] = $imagem;
                }
            }
        } //UPLOAD NOVAS IMAGENS - FIM

        //ORDER ATUALIZAR
        foreach ($sort as $v => $r) {
            $arquivo = $r['arquivo'];
            $ordem = $r['ordem'];

            $ImagemOrdem = ProdutoImagem::where('produto_id', $item->id)->where('imagem', $arquivo)->first();
            if ($ImagemOrdem) {
                $ImagemOrdem->ordem = $ordem;
                $ImagemOrdem->save();
            }

        }

        //DELETA IMAGENS
        $except = array();;
        foreach ($sort as $v => $r) {
            $except[] = $r['arquivo'];
        }

        //LISTA DADOS
        $itemImagens = ProdutoImagem::where('produto_id', $item->id);
        $itemImagens = $itemImagens->whereNotIn('imagem', $except)->get();

        //DELETE
        $ids_del = array();
        foreach ($itemImagens as $key => $v) {
            $ids_del[] = $v->id;
            @unlink($directory_uploads . '/'. self::currentPage .'/' . $v->imagem);
        }

        //EXCLUI DO BANCO
        if ($ids_del != null) {
            $item->imagens()->whereIn('id', $ids_del)->delete();
        }
        //DELETA IMAGENS - FIM

        $this->container->get('flash')->addMessage('success','Atualização realizada com sucesso');
        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function delete($request, $response, $params)
    {
        $item = Produto::find($params['id']);

        if($item)
        {   
            //Exluir fotos
            $directory = $this->container->get('upload_directory') . '/'. self::currentPage .'/';

            //Deletar fotos
            foreach ($item->imagens as $key => $v) {
                unlink($directory . $v->imagem);
            }

            $item->imagens()->delete();
            $item->delete();
            $this->container->get('flash')->addMessage('success','Exclusão realizada com sucesso!');
        }
        else
        {
            $this->container->get('flash')->addMessage('error','Erro ao excluir!');
        }

        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    public function ajaxOrder($request, $response, $params)
    {
        $post = $request->getParsedBody();

        if (isset($post['order']) && is_array($post['order'])) {
            foreach ($post['order'] as $item) {
                $registro = Produto::find($item['id']);
                if ($registro) {
                    $registro->ordem = $item['ordem'];
                    $registro->save();
                }
            }

            $this->container->get('flash')->addMessage('success', 'Ordem atualizada com sucesso!');
            return $response->withJson(['status' => 'success', 'message' => 'Ordem atualizada com sucesso!']);
        }

        $this->container->get('flash')->addMessage('error', 'Dados inválidos');
        return $response->withJson(['status' => 'error', 'message' => 'Dados inválidos'], 400);
    }

}
