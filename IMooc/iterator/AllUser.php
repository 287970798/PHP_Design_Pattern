<?php


namespace IMooc\iterator;


use IMooc\factory\Factory;

class AllUser implements \Iterator
{
    protected $ids;
    protected $data = [];
    protected $index;
    public function __construct()
    {
        $db = Factory::createDataBase();
        $result = $db->query("SELECT * FROM user");
        $ids = $result->fetch_all(MYSLQI_ASSOC);
    }
    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    public function next()
    {
        $this->index ++;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function key()
    {
        return $this->index;
    }
}