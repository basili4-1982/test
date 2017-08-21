<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 13:31
 */

namespace inc;


class Errors extends Controller
{
    /**
     * общая ошибка
     */
    public function error()
    {
        return 'Что пошло не так.';
    }
}