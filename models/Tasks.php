<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 20.08.17
 * Time: 13:58
 */

namespace models;


use inc\Model;

class Tasks extends Model
{
    const PAGE_SIZE = 3;
    
    const ST_DONE = 1;
    
    protected $primaryKey = 'id';
    
    protected $orderFields = ['id', 'username', 'email'];
    
    /**
     * Возвращает массив где 0 элемент список задач в виде массива, 1 элемент общее количество задач
     *
     * @param int    $page
     * @param string $orderField
     * @param string $orderType
     *
     * @return array
     */
    public function listTasks($page = 1, $orderField = 'id', $orderType = self::ORDER_ASC)
    {
        $startRec = ($page - 1) * self::PAGE_SIZE;
        
        if (!in_array($orderField, $this->orderFields)) {
            $orderField = $this->orderFields[0];
        }
        
        $sql = 'SELECT SQL_CALC_FOUND_ROWS id,content,email,username,status FROM tasks t ORDER BY ' . $orderField . ' ' . $orderType . ' LIMIT ' . $startRec . ", " . self::PAGE_SIZE;
        
        
        $featchData = $this->db->query($sql);
        
        return [$featchData->fetchAll(\PDO::FETCH_ASSOC), $this->db->query('SELECT FOUND_ROWS()')->fetchColumn(0)];
    }
    
    /**
     * Сохраняет задачу
     *
     * @param array $attr
     */
    public function save(array $attr)
    {
        if (isset($attr[ $this->primaryKey ])) {
            $this->update($attr);
        } else {
            $this->insert($attr);
        }
    }
    
    
    /**
     * Обнавляет задачу должен быть передан примари кей в массиве
     *
     * @param array $pkKey
     * @param array $attr
     */
    public function update($pkKey, array $attr)
    {
    
    }
    
    /***
     * Добавляет задачу
     *
     * @param array $attr
     */
    public function insert(array $attr)
    {
        $sql = 'INSERT tasks (content, email, username, status) VALUE (:content, :email, :username, :status)';
        
        $prepare = $this->db->prepare($sql);
        
        $prepare->execute($attr);
    }
}