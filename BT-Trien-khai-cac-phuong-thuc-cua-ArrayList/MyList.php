<?php

class MyList
{
    public int $size;
    public array $element;

    public function __construct(int $size, array $element)
    {
        $this->size = $size;
        $this->element = $element;
    }

    public function isFull()
    {
        return count($this->element) == $this->size;
    }

    public function insert($index,$obj)
    {
        if (!$this->isFull()){
            return $this->element[$index] = $obj;
        }else{
            return "Danh sach da day";
        }

    }

    public function add($obj)
    {
        if (!$this->isFull()){
            return array_push($this->element,$obj);
        }else{
            return "Danh sach da day";
        }

    }

    public function remote($index)
    {
        if(array_key_exists($index,$this->element)){
            unset($this->element[$index]);
        }
    }

    public function get($index)
    {
        if(array_key_exists($index,$this->element)){
            return $this->element[$index];
        }else{
            return "Phan tu thu $index khong co trong mang";
        }
    }

    public function clear()
    {

    }

    public function addAll($arr)
    {
        if (!$this->isFull()){
            return array_merge($this->element,$arr);
        }else{
            return "Danh sach da day";
        }
    }

    public function indexOf($obj)
    {
        return $this->indexOf($obj);

    }

    public function isEmpty()
    {
        if (empty($this->element)){
            return 1;
        }else{
            return 0;
        }
    }

    public function sort()
    {
        return sort($this->element);
    }

    public function reset()
    {
        return reset($this->element);
    }

    public function size()
    {
        return count($this->element);
    }



}