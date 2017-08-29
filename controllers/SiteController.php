<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 11:51
 */
include_once ROOT . '/models/Task.php';


class SiteController {

    public function actionIndex()
{

    $latestTasks = array();
    $latestTasks = Task::getLatestTasks(9);
    require_once(ROOT . '/views/site/index.php');
    return true;
}


    public function actionTz()
    {
       // $tasks = array();
       // $tasks = Task::getTAsk();
        require_once(ROOT . '/views/site/tz.php');
        return true;
    }

}