<?php

if(!function_exists('assets')){
    
    function assets(string $type = '')
    {
        switch ($type) {
            case 'js':
                $assets = [];
                foreach(glob(dirname(__DIR__) . '/public/assets/js/*.js') as $asset){
                    $arr = explode('/',$asset);
                    $assets[] = $arr[count($arr)-1];
                }
                return $assets;
                break;
            
            case 'css':
                $assets = [];
                foreach(glob(dirname(__DIR__) . '/public/assets/css/*.css') as $asset){
                    $arr = explode('/',$asset);
                    $assets[] = $arr[count($arr)-1];
                }
                return $assets;
                break;

            default:
                return [];
                break;
        }
        
    }

}