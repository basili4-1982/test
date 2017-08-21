<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 12:37
 */

namespace inc;


abstract class Model
{
    
    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';
    
    /**
     * @var \PDO
     */
    protected $db;
    
    protected $primaryKey;
    
    protected $config = [];
    
    public function __construct()
    {
        $this->config = require __DIR__ . "/../configs/db.php";
        $this->db = new \PDO($this->config['dsn'], $this->config['user'], $this->config['password']);
    }
    
    
    public function connect()
    {
        return $this->db;
    }
    
    abstract public function save(array $attr);
    
    abstract public function update($pkkey, array $attr);
    
    abstract public function insert(array $attr);
}