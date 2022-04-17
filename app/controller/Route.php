<?php

class Route
{
    public  $path;
    public $action;

    public function contructor($path, $action)
    {
        $this->action = $action;
        $this->path = trim($path, '/');
    }
    public function matches(string $url)
    {
       $path =
    }
}