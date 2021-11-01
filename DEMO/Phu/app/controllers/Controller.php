<?php

namespace app\controllers;

class Controllers
{
    public function renderView($path, $param = [])
    {
        include 'app/views' . $path;
    }
}
