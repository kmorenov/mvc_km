<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 4:39 AM
 */

class Model
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
        DEFINE('ROWS_PER_PAGE', 5);
        $dbh = Connection::getConnection();

        $page = !empty($_GET['page']) ? filter_input(INPUT_GET, $_GET['page']) : 1;

        $sql = 'SELECT * FROM news ORDER BY news_id DESC LIMIT ' . ($page - 1) * ROWS_PER_PAGE . ',' . ROWS_PER_PAGE;
        $stmt = $dbh->query($sql);
        $arr['news'] = $stmt->fetchAll();

        $arr['num_pages'] = $this->getNumberOfPages($dbh);

        return $arr;
    }

    public function getPost($id)
    {
        $dbh = Connection::getConnection();

        $sql = 'SELECT * FROM news WHERE news_id=' . $id;
        $stmt = $dbh->query($sql);
        $arr = $stmt->fetch();
        return $arr;
    }
}