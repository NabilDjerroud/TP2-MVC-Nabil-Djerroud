<?php
namespace App\Providers;

class Validator {
    public $errors = array();
    public $key;
    public $value;
    public $name;

    public function field($key, $value, $name = null){
        $this->key= $key;
        $this->value= $value;
        if($name == null){
            $this->name = ucfirst($key);
        }else{
            $this->name = ucfirst($name);
        }
        return $this;
    }
////////////////////////////////VALIDATION RUES////////////////////////////////////////////////////////////////////
    public function required() {
        if(empty($this->value)){
            $this->errors[$this->key]="$this->name is required.";
        }
        return $this;
    }

    public function max($length){
        if(strlen($this->value) > $length){
            $this->errors[$this->key]="$this->name must be less than $length characters";
        }
        return $this;
    }

    public function min($length){
        if(strlen($this->value) < $length){
            $this->errors[$this->key]="$this->name must be bigger than $length characters";
        }
        return $this;
    }

    public function email(){
        if(!empty($this->value) && !filter_var($this->value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$this->key]= "Invalid $this->name format";
        }
        return $this;
    }
    ///////////////////////////////////////////FIN//////////////////////////////////////////////////////////
    public function isSuccess(){
        if(empty($this->errors)) return true;
    }

    public function getErrors(){
        if(!$this->isSuccess()) return $this->errors;
    }


}