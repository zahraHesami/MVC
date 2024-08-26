<?php
namespace System\Traits;

trait View
{
    protected function view ($dir ,$vars = null)
    {
       $dir = str_replace('.','/',$dir);
       if($vars)
       extract($vars);
       $path = realpath(dirname(__FILE__)."/../../application/view/".$dir.".php");
       if(file_exists($path))
       {
        return require_once($path);
       }
       else
       echo "this view [".$dir."] not exist";
    }
    protected function asset($dir): string
    {
       global $base_url;
       $path= $base_url."public/".$dir;
       return $path;
    }
    protected function include($dir ,$vars = null)
    {
        $dir = str_replace('.','/',$dir);
        if($vars)
            extract($vars);
        $path = realpath(dirname(__FILE__)."/../../application/view/".$dir.".php");
        if(file_exists($path))
        {
            return require_once($path);
        }
        else
            echo "this view [".$dir."] not exist";
    }
    protected function url($url): string
    {
        global $base_url;
        $domain =trim($base_url,'/');
        $url=$domain.'/'.trim($url,'/');
        return $url;
    }
}