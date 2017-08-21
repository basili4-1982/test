<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 20.08.17
 * Time: 23:56
 */

\inc\View::addFunctionForTempl('param2url', function ($params) {
    
    $arr = $_GET;
    
    if (is_array($params)) {
        foreach ($params as $key => $val) {
            $arr[ $key ] = $val;
        }
    }
    
    return "/?" . http_build_query($arr);
});


\inc\View::addFunctionForTempl('url', function ($param1, $param2 = null) {
    
    $controller = 'Site';
    $action = 'index';
    
    
    if (is_null($param2)) {
        $action = $param1;
    } else {
        $controller = $param1;
        $action = $param2;
    }
    
    $_GET['q'] = "$controller/$action";
    
    return "/?" . http_build_query($_GET);
});
