<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 11:50
 */

return array (


    'task/([0-9]+)/page-([0-9]+)' => 'task/view/$1/$2',
    'task/([0-9]+)' => 'task/view/$1',

    'task' => 'task/index',
    'tz' => 'site/tz',
    'user' => 'user/register',
    '' => 'site/index',
);