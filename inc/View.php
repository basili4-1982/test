<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 12:37
 */

namespace inc;


class View
{
    /**
     * @var \Twig_Environment
     */
    protected static $twigInst = null;
    protected static $loader = null;
    
    protected static function init()
    {
        if (is_null(self::$twigInst)) {
            $debug = defined('DEBUG') && DEBUG;
            self::$loader = new \Twig_Loader_Filesystem(__DIR__ . '/../views');
            self::$twigInst = new \Twig_Environment(self::$loader, [
                'cache' => __DIR__ . '/../runtime/cache',
                'debug' => true,
            ]);
            
            if ($debug) {
                self::$twigInst->addExtension(new \Twig_Extension_Debug());
            }
            
        }
        
        return self::$twigInst;
    }
    
    public static function make($template, $data = [])
    {
        self::init();
        
        echo self::$twigInst->render($template . ".twig", $data);
    }
    
    public static function addFunctionForTempl($name, callable $function)
    {
        self::init();
        $functionTwig = new \Twig_Function($name, $function);
        self::$twigInst->addFunction($functionTwig);
    }
}