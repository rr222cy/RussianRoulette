<?php
namespace view;
class NavigationView {
    private static $action = 'action';
    public static $home = 'home';
    public static function getAction() {
        if (isset($_GET[self::$action]))
        {
            return $_GET[self::$action];
        }
        else
        {
            return self::$home;
        }
    }
}
