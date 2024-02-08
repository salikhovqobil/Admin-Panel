<?php

namespace controllers;

use models\Category;
use vendor\myframe\Controller;
use vendor\myframe\Views;
use vendor\myframe\Connection;
class CategoryController extends Controller
{

    public function list()
    {
        $category =new Category();
        $result = $category->getList();
        $pageCount = $category->getPageCount();
        $this->render("category/list", [
            'list' => $result,
            'pageCount' => $pageCount
        ]);
    }

    public function add()
    {
        if (isset($_POST["cat_add"])){
            $category =new Category();
//            $category->validate();
            $category->save($_POST['name']);
        }
        $this->render("category/add");

    }
    public function update($id)
    {
        $category = new Category();
        if (isset($_POST["cat_update"])) {
            $category->update($id, $_POST['name']);
            header("Location:/index.php/category/list"); exit();
        }
        $result = $category->getRowById($id);
        $this->render("category/update", ["category"=>$result]);
    }
    public function delete($id)
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $category_row = getCategoryById($id);
            if(isset($_GET['confirm']) && $_GET['confirm'] === 'yes'){
                deleteCategory($id);
                header("Location: /category/list.php");
            }else if(isset($_GET['confirm']) && $_GET['confirm'] === 'no'){
                header("Location: /index.php/category/list.php");

            }
        }
        echo 'Rostan ham ochirmoqchimisiz?';
    }
}