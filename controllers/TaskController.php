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

    public static function createTask($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO tasks '
            . '(name, email, task, status, image,)'
            . 'VALUES '
            . '(:name, :email, :task, :status, :image,)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':task', $options['task'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);

        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

}