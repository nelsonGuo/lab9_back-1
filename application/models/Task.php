<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends Entity {

private $priority =NULL;//low|medium|high
private $pize = NULL;//samll|medium|large
private $group =NULL;//house|school|work|family
private $status =NULL;//in progress|complete
    

    /**
     * Property Magic Getter
     * @param String $property the property to get
     * @return mixed value of the property
     */
    public function __get($property){
        if(isset($this->$property)){
            return $this->$property;
        }
        else{
            return NULL;
        }
    }

    public function setPriority($value){
        //validate input against Rule
        if(is_int($value) && $value < 4){
            $this->priority = $value;
        }
    }


    public function setSize($value){
        //validate input against Rule
        if(is_int($value) && $value < 4){
            $this->size = $value;
        }
    }
    
    public function setGroup($value){
        //validate input against Rule
        if(is_int($value) && $value < 5){
            $this->group = $value;
        }
    }
   

}

