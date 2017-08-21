<?php
/**
 *  Класс реализующий механизм событий
 */

namespace inc;


class Events
{
    /**
     * Слушатели
     *
     * @var array
     */
    private static $listners = [];
    
    /**
     * Запуск события
     *
     * @param string $eventType
     * @param array  $data
     */
    public static function trigger($eventType, array $data = [])
    {
        if (isset(self::$listners[ $eventType ]) && is_array(self::$listners[ $eventType ])) {
            foreach (self::$listners[ $eventType ] as $function) {
                
                call_user_func_array($function, $data);
            }
        }
        
    }
    
    /**
     * Повесить слушателя на событие
     *
     * @param  string  $eventType
     * @param callable $function
     */
    public static function on($eventType, callable $function)
    {
        if (!isset(self::$listners[ $eventType ])) {
            self::$listners[ $eventType ] = [];
        }
        self::$listners[ $eventType ][] = $function;
    }
    
}