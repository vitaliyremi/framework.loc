<?php

namespace site;


class Router{
    protected static $routes = []; // таблица маршрутов
    protected static $route = []; // текущий маршрут

    public static function add($regexp, $route =[]){ // правило записи маршрутов
        self::$routes[$regexp] = $route; // соотвествие для данного маршрута
    }

    public static function getRoutes(){ // Возвращает таблицу маршрутов
        return self::$routes;
    }

    public static function getRoute(){ // Возвращает текущий маршрут
        return self::$route;
    }

    public static function dispatch($url){
        if(self::matchRoute($url)){
            echo 'OK';
        }else{
            echo 'NO';
        }
    }

    public static function matchRoute($url){

        return false;
    }
}