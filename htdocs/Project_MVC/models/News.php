<?php

class News
{
    //Вертає 1 новину з пивним шд
    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    //Вертає масив х новинами
    public static function getNewsList()
    {
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content, content '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10');

        $i = 0;

        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['content'];
            $i++;
        }

        return $newsList;
    }
}