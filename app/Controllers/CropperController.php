<?php

namespace App\Controllers;
use App\Models\Arquivo;
use Respect\Validation\Validator as v;
use App\Helpers\Helpers as Helper;

class CropperController extends Controller
{    
    
    const currentPage = 'cropper';	
    const currentTitle = 'Cropper';	

    public function cropper($request, $response, $params)
    {

        $item = Arquivo::where('id', $params['id'])->first();
     
        if(!$item)
        {
            $this->container->get('flash')->addMessage('error','Registro não encontrado');
            return $this->redirect($request, $response, 'app.home');
        }

        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'configs' => $this->configs,
            'd' => $item
        ];

        return $this->container->get('view')->render($response, 'admin/cropper.twig', $data);

    }

    public function cropperUpdate($request, $response, $params)
{
    $item = Arquivo::where('id', $params['id'])->first();

    if (!$item) {
        $this->container->get('flash')->addMessage('error', 'Registro não encontrado');
        return $response->withRedirect($this->container->router->pathFor('app.home'));
    }

    $directory = $this->container->get('upload_directory') . '/imagens/';
    $src = $directory . $item->imagem;

    // Verifique o tipo de imagem
    $imageInfo = getimagesize($src);
    if (!$imageInfo) {
        $this->container->get('flash')->addMessage('error', 'Arquivo inválido ou não é uma imagem');
        return $response->withRedirect($this->container->router->pathFor('app.home'));
    }

    $mimeType = $imageInfo['mime'];
    $img = null;

    // Escolha a função de criação de imagem com base no tipo
    switch ($mimeType) {
        case 'image/jpeg':
            $img = imagecreatefromjpeg($src);
            break;
        case 'image/png':
            $img = imagecreatefrompng($src);
            break;
        case 'image/gif':
            $img = imagecreatefromgif($src);
            break;
        default:
            $this->container->get('flash')->addMessage('error', 'Formato de imagem não suportado');
            return $response->withRedirect($this->container->router->pathFor('app.home'));
    }

    if (!$img) {
        $this->container->get('flash')->addMessage('error', 'Erro ao processar a imagem');
        return $response->withRedirect($this->container->router->pathFor('app.home'));
    }

    $params = $request->getParsedBody();

    $x = (int) $params['x'];
    $y = (int) $params['y'];
    $w = (int) $params['w'];
    $h = (int) $params['h'];

    $croppedImg = imagecrop($img, ['x' => $x, 'y' => $y, 'width' => $w, 'height' => $h]);
    if ($croppedImg) {
        $dest = $directory . 'cropp/' . $item->imagem;

        // Salve no formato adequado
        if ($mimeType === 'image/jpeg') {
            imagejpeg($croppedImg, $dest);
        } elseif ($mimeType === 'image/png') {
            imagepng($croppedImg, $dest);
        } elseif ($mimeType === 'image/gif') {
            imagegif($croppedImg, $dest);
        }

        imagedestroy($croppedImg);
    }

    imagedestroy($img);

    $this->container->get('flash')->addMessage('success', 'Crop realizado com sucesso!');
    return $this->redirect($request, $response, 'app.arquivos', ['area' => $item->area->slug]);
}


    public function cropperUpdate_back($request, $response, $params)
    {
        
        $item = Arquivo::where('id', $params['id'])->first();

        if(!$item)
        {
           $this->container->get('flash')->addMessage('error','Registro não encontrado');
            return $response->withRedirect($this->container->router->pathFor('app.home'));
        }

        $directory = $this->container->get('upload_directory').'/imagens/';

        $src = $directory.$item->imagem;
        $img = imagecreatefromjpeg($src);

        $params = $request->getParsedBody();

        $x = $params['x'];
        $y = $params['y'];
        $w = $params['w'];
        $h = $params['h'];

        $croppedImg = imagecrop($img, ['x' => $x, 'y' => $y, 'width' => $w, 'height' => $h]);
        $dest = $directory.'cropp/'.$item->imagem;;

        imagejpeg($croppedImg, $dest);

        imagedestroy($img);
        imagedestroy($croppedImg);

        $this->container->get('flash')->addMessage('success','Crop realizado com sucesso!');
        return $this->redirect($request, $response, 'app.arquivos', ['area' => $item->area->slug]);

    }

}

