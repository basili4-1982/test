<?php
/**
 * Класс роутинга обрабатывает маршруты приложения
 *  по правилам определенным в configs/route.php
 */

namespace inc;


class Route
{
    protected $rules = [];
    
    public function __construct()
    {
        $this->rules = require __DIR__ . '/../configs/route.php';
    }
    
    /***
     * Строит маршрут для ошибок
     *
     * @param \Exception $exception
     */
    public function error(\Exception $exception)
    {
        $errors = $this->rules['errors'];
        
        if (isset($errors[ get_class($exception) ])) {
            $errorController = $errors[ get_class($exception) ];
        } else {
            $errorController = 'Site';
        }
        
        $code = $exception->getCode();
        if (!empty($code)) {
            $errorAction = "error" . $code;
        } else {
            $errorAction = "error";
        }
        
        return $errorController . "/" . $errorAction;
    }
    
    /**
     * строит маршрут для сайта
     */
    public function run()
    {
        return 'site/index.php';
    }
    
    
    public function toPage($pageUrl)
    {
        $this->to('http://test.my/?q=' . $pageUrl);
    }
    
    public function to($url)
    {
        header('Location: ' . $url);
    }
}