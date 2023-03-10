<?php
namespace src\Http;

class Request
{
    public function __construct()
    {
        $request = $this->all();
        foreach ($request as $key => $value) {
            $this->$key = $value;
        }
    }
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        return str_contains($path, "?") ? explode("?", $path)[0] : $path;
    }
    public function all()
    {
        return $_REQUEST;
    }
}