<?php

namespace models;

use components\Constants;
use vendor\myframe\Connection;
use vendor\myframe\Model;
use PDO;
class Product extends Model
{
    public function tableName()
    {
        return "product";
    }

    public function insertProduct()
    {

    }
}