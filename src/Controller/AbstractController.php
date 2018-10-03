<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 27/09/18
 * Time: 8:44 PM
 */
abstract class AbstractController
{
    protected function render($arr)
    {
        $template = $arr['template'];
        include $template;
    }

    protected function getModel($model)
    {
        return new $model;
    }
}