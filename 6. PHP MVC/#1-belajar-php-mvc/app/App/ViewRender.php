<?php

namespace Satriabimantara\BelajarPhpMvc\App;


class ViewRender
{
    public static function render($view, $model)
    {
        require __DIR__ . "/../View/" . $view . ".php";
    }
}
