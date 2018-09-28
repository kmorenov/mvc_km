<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 7:51 AM
 */

class ViewHelper
{
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function myLink($id, $route)
    {
        $qstr = 'index.php?id=' . $id . '&route=' . $route;
        return $qstr;
    }

/*    public function pagination()
    {
        if ($arr["num_pages"] > 1) {
            for ($i = 1; $i <= $arr["num_pages"]; $i++) {
                echo '<a href="' . $this->myLink('', $i) . '">Page ' . $i . '</a>    ';
            }
        }
    }*/


}