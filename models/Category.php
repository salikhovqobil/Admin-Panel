<?php

namespace models;

use components\Constants;
use vendor\myframe\Connection;
use vendor\myframe\Model;
use PDO;
class Category extends Model
{
    public function tableName()
    {
        return "category";
    }


    public function save($title){
        $sql = "insert into category(name) values (:name)";
        $state = $this->db->prepare($sql);
        $state->bindValue(":name", $title);
        $state->execute();
    }
   public function update($id, $title){
        $sql = " update category set name = :name where id = :id";
        $state = $this->db->prepare($sql);
        $state->bindValue(":id", $id, PDO ::PARAM_INT);
        $state->bindValue(":name", $title);
        $state->execute();
    }

    public function delete($id)
    {
        $sql = " delete from category where id = :id";
        $state = $this->db->prepare($sql);
        $state->bindValue(":id", $id, PDO ::PARAM_INT);
        $state->execute();
    }

}