<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 12:38
 */


\inc\Events::on('error404', function () {
    throw new HttpException('страница не найдена', 404);
}
);