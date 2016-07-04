<?php
namespace Flycartinc\Cache;
use Flycartinc\Cache\Wordpress\WpCache;
class Cache
{
    public static $platform;
    
    public function __construct($platform)
    {
        self::$platform = $platform;
    }

    public static function setItem($ItemName, $value, $expiration = 60 * 60 * 24)
    {
        if (self::$platform === 'wordpress' )
        {
            return WpCache::setItem($ItemName, $value, $expiration = 60 * 60 * 24);
        }
    }

    public static function getItem($ItemName)
    {
        if (self::$platform === 'wordpress' )
        {
            return WpCache::getItem($ItemName);
        }
    }

    public static function deleteItem($ItemName)
    {
        if (self::$platform === 'wordpress' )
        {
            return WpCache::deleteItem($ItemName);
        }
    }
    
    public static function hasItem($ItemName)
    {
        if (self::$platform === 'wordpress' )
        {
            return WpCache::hasItem($ItemName);
        }
    } 
    
    

}
