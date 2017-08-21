<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 14:18
 */

namespace controllers;


use inc\View;
use models\Tasks;

class Site
{
    public function index()
    {
        
        $task = new Tasks();
        
        $page = (int)(isset($_GET['page']) ? $_GET['page'] : 1);
        
        $orderField = empty($_GET['field']) ? 'username' : $_GET['field'];
        $orderType = empty($_GET['type']) || strtoupper($_GET['type']) == 'ASC' ? 'ASC' : 'DESC';
        list($listTasks, $countRecord) = $task->listTasks($page, $orderField, $orderType);
        
        $countPage = (int)($countRecord / Tasks::PAGE_SIZE);
        
        return View::make('index', ['listTasks' => $listTasks, 'count' => $countPage, 'page' => $page]);
    }
 
    public function view()
    {
        echo "View";
    }
    
    public function error()
    {
        return View::make('error');
    }
    
    
}