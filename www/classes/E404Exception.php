<?php
/**
 * Created by PhpStorm.
 * User: shcheki
 * Date: 09.03.2015
 * Time: 09:50
 */

class E404Exception extends Exception{
     private $message;
     private $numerror;
{
    public function display($template)
{
    // foreach ($this->data as $key =>$val){
    //      $$key = $val;
    //  }
    foreach ($this->rewind(); $this->valid();$this->next){
        $numerror=$this->current();
        $num=$this->numerror();
    }
    include __DIR__ . '/../views/ . $template';
}
    public function add($e, $num)
    {
        $this->message=$e;
        $this->numerror=$num;
    }
}