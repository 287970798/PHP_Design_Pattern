<?php
/**
 * 数据对象映射模式
 */

namespace IMooc\orm;


class User
{
    protected $db;
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    public function __construct($id = null)
    {
        $this->db = new \IMooc\Database\MySQLi();
        $this->db->connect('localhost', 'root', 'qing43', 'test');
        $res = $this->db->query("SELECT * FROM user LIMIT 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    public function __destruct()
    {
        echo $sql = "
            UPDATE user SET 
                name = '{$this->name}', 
                mobile = '{$this->mobile}', 
                regtime = {$this->regtime}
            WHERE id = {$this->id}
            LIMIT 1
        ";
        $this->db->query($sql);
    }
}