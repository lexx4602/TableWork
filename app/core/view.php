<?php
/**
 * Created by PhpStorm.
 * User: a.borisov
 * Date: 25.02.2016
 * Time: 12:47
 */
class View
{
    function generate($content, $template, $data = null)
    {
        include 'app/views/' . template;
    }
}