<?php

require_once './app/Views/categories.view.php';
require_once './app/Models/categories.model.php';
require_once './app/Models/movies.model.php';


class CategoryController {

    private $model;
    private $view;
    

    public function __construct()
    {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        
    }
    
    public function showCategories(){
        
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

    function addCategory(){
        
        $category = $_POST['category'];

        $this->model->addCategory($category);
        header("Location: " . BASE_URL . "categories");
    }

    function showFormAddCategory(){
        
        $this->view->showFormAddCategory();
    }

    function deleteCategory($id){
        
        $moviecat = $this -> model -> getMovieCat($id);

        if($moviecat){
            //Show error
        }else{
            $this->model->deleteCategory($id);
            header("Location: " . BASE_URL . "categories");
        }

    }

    function editCategory($id){
        
        $category = $_POST['category'];

        $this->model->editCategory($category, $id);
        header("Location: " . BASE_URL . "categories");
    }

    function showEditCategories($id){
        
        $category = $this->model->selectCategory($id);
        
        $this->view->showEditCategories($category);
    }
}