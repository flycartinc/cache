<?php
namespace Flycartinc\Cache\Wordpress;

class WpCache
{

    public static function setItem($transient, $value, $expiration)
    {
        return set_transient($transient, $value, $expiration);
    }

    public static function getItem($transient)
    {
        return get_transient($transient);
    }

    public static function deleteItem($transient)
    {
        return delete_transient($transient);
    }
    
    public static function setHash($transient, $value, $expiration)
    {
        return set_transient($transient, $value, $expiration);
    }

    public static function hasItem($transient)
    {
        if(self::getItem($transient) === false)
        {
            return false;
        }
        else{
            return true;
        }
    }

}
