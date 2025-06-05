<?php

namespace App\Helpers;

class Helpers
{
    
    public static function url($str)
    {   
        // Remove os emoticons
        $str = preg_replace('/[\x{1F600}-\x{1F64F}]/u', '', $str);
    
        // Define a lista de caracteres especiais e suas substituições
        $specialChars = array(
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE',
            'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
            'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'TH', 'ß' => 'ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae',
            'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
            'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u',
            'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ý' => 'y', 'þ' => 'th', 'ÿ' => 'y',
        );
    
        // Remove acentos e converte caracteres especiais
        $str = strtr($str, $specialChars);
    
        // Substitui espaços e caracteres repetidos por hífen
        $str = preg_replace('/[^a-zA-Z0-9]+/', '-', $str);
    
        // Remove hífens no início e final da string
        $str = trim($str, '-');
    
        // Converte para minúsculas
        $str = strtolower($str);
    
        return $str;	
    }

    public static function youtube($youtube)
    {
        if($youtube){
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $youtube, $match);

            // Verifica se a correspondência foi encontrada e não está vazia
            if (isset($match[1]) && !empty($match[1])) {
                return $match[1];
            } else {
                // Se o vídeo estiver em branco, você pode retornar false ou lançar uma exceção, dependendo do seu caso de uso
                return '';
            }
        }
    }

    public static function grana($gn){	
        $gn2 = str_replace('.', '', $gn);
        $gn2 = str_replace(',', '.', $gn2);    
        return $gn2;
    }

    public static function dinheiro($dn){	
        $dn2 =  number_format($dn,2,',','.');
        return $dn2;
    }

    public static function cod()
    {	

        $caracteres='0123456789abcdef0123456789';
        $numch=32;
        $novaSenha='';
        for($i=0;$i<$numch;$i++) {$novaSenha.=$caracteres[rand(0,strlen($caracteres)-1)];
        }
    
        return $novaSenha;
    }

    //gera codigo
    public static function codSenha()
    {	

        $caracteres='0123456789';
        $numch=6;
        $novaSenha='';
        for($i=0;$i<$numch;$i++) {$novaSenha.=$caracteres[rand(0,strlen($caracteres)-1)];
        }

        return $novaSenha;
    }

    public static function data($dt,$v = null){
		
        if(!empty($dt)){
            if(!empty($v)){
                $parte = explode("-",$dt);
                $ver =  $parte[2]."/".$parte[1]."/".$parte[0];
            }else{
                $parte = explode("/",$dt);
                $ver =  $parte[2]."-".$parte[1]."-".$parte[0];
            }
        }else{
            $ver = "0000-00-00";
        }
        
        return $ver;
    }

    public static function getPaginate($config)
    {
        if($config['pages']>1)
        {
            $current = $config['current'];
            $pages = '<nav class="pages"><ul class="pagination justify-content-center">';
            for($i=1;$i<=$config['pages'];$i++)
            {
                $currentPage = ($current==$i)?'page-item active':'page-link';
                $pages .= '<li><a href="?page='.$i.$config['links'].'" class="'.$currentPage.'">'.$i.'</a></li>';
            }
            $pages .= '</ul></nav>';
        }
        else
        {
            $pages = '';
        }

        return $pages;
       
    }

    public static function getPaginateSite($config)
    {
        if($config['pages']>1)
        {
            $current = $config['current'];
            $pages = '<ul class="uk-pagination" uk-margin>';
            for($i=1;$i<=$config['pages'];$i++)
            {
                $currentPage = ($current==$i)?'uk-active':'';
                $pages .= '<li class="'.$currentPage.'"><a href="'.$config['url'].'?page='.$i.$config['links'].'">'.$i.'</a></li>';
            }
            $pages .= '</ul>';
        }
        else
        {
            $pages = '';
        }

        return $pages;
       
    }

    public static function getFilters($config)
    {	       
        $gets = '';
        foreach($config as $key => $v)
        {
            if($v){
                $gets .= '&'.$key.'='.$v; 
            }
        }
        return $gets;       
    }

    function keywords($str) {
        $rules = array(".", "-", "_");
        $str = str_replace($rules, "", $str);
        return $str;
    }

    
}