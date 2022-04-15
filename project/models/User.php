<?php

namespace Project\Models;

use \Core\Model;

class User extends Model
{
    public function getById($id)
    {
        return $this->findOne("SELECT * FROM users WHERE id=$id");
    }

    public function getAll()
    {
        return $this->findMany("SELECT * FROM users");
    }

    public function set($value)
    {
        //var_dump($value);
        foreach ($value as $data) {
            //var_dump($data);
            $name = $data['name'];
            $age = $data['age'];
            $salary = $data['salary'];
            parent::set("INSERT INTO users (name, age, salary) 
             			VALUES('$name', '$age', '$salary')");
        }
    }
}
