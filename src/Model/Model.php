<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 4:39 AM
 */

class Model extends Connection
{
    private function getNumberOfPages($dbh)
    {
        $sql = "SELECT COUNT(*) AS 'rows' FROM news";
        $stmt = $dbh->query($sql);

        $rows = $stmt->fetchAll();
        $num_pages = ceil($rows[0]['rows'] / ROWS_PER_PAGE);

        return $num_pages;
    }

    public function getPosts()
    {
        DEFINE('ROWS_PER_PAGE', 30);
        $dbh = parent::getConnection();

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT " . ($page - 1) * ROWS_PER_PAGE . "," . ROWS_PER_PAGE;
        $stmt = $dbh->query($sql);

        while ($res[] = $stmt->fetch()) {
            $arr['news'] = $res;
        }

        $arr['num_pages'] = $this->getNumberOfPages($dbh);
        return $arr;
    }

    public function getPost($id)
    {
        $dbh = parent::getConnection();
        $newsid = $id;
        $sql = "SELECT * FROM news WHERE news_id=" . $newsid;
        $stmt = $dbh->query($sql);

        while ($res[] = $stmt->fetch())
        {
            $arr = $res;
        }

        return $arr;
    }
}