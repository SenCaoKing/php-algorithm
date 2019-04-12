<?php
/**
 * 单例模式
 */

class A
{
    protected $instance = null;
    protected function __construct()
    {

    }
    protected function __clone()
    {

    }
    protected function __wakeup()
    {

    }
    public function getInstance()
    {
        if(!isset(static::$instance)){
            static::$instance = new static();
        }
        return static::$instance;
    }
}

/**
 * 单例
 *
 * Class A2
 */
class A2
{
    private static $instance = null;

    public static function getInstance()
    {
        if(null === static::$instance){
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 防止使用 new 创建多个实例
     *
     * A2 constructor.
     */
    private function __construct()
    {
    }

    /**
     * 防止 clone 多个实例
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
    }
}

