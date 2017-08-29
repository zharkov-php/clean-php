<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 13:58
 */

class Task
{
    const SHOW_BY_DEFAULT = 3;

    public static function getLatestTasks($count = self::SHOW_BY_DEFAULT, $page = 1)
    {
        $count = intval($count);
        $page = intval($page);
        $offset = $page * $count;

        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT * FROM tasks '
            . 'WHERE status = "1"'
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['status'] = $row['status'];
            $productsList[$i]['email'] = $row['email'];
            $productsList[$i]['task'] = $row['task'];
            $i++;
        }

        return $productsList;
    }

    public static function getTaskById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM tasks WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }



}