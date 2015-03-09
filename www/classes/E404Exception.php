<?php
/**
 * Created by PhpStorm.
 * User: shcheki
 * Date: 09.03.2015
 * Time: 09:50
 */

class E404Exception extends Exception{
    
{
    public function display($template)
{
    // foreach ($this->data as $key =>$val){
    //      $$key = $val;
    //  }
    for ($this->rewind(); $this->valid();$this->next){
        $val=$this->current();
        $key=$this->key();
    }
    include __DIR__ . '/../views/ . $template';
}
    public function add($e)
    {
        $this[]=$e;
    }
}