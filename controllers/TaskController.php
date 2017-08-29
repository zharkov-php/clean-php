<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 12:29
 */

include_once ROOT . '/models/Task.php';

class TaskController
{



    public function actionView($taskId)
    {
        // $tasks = array();
         //$tasks = Task::getTask();
        $tasks = Task::getTaskById($taskId);


        require_once(ROOT . '/views/task/view.php');
        return true;
    }

}