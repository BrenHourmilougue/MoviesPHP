<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class CategoryView{
        private $smarty;

        function __construct()
        {
            $this->smarty = new Smarty();
        }

        function showCategories($categories){
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('Categories.tpl');
        }

        function showFormAddCategory(){
            $this->smarty->display('CategoryForm.tpl');
        }

        function showEditCategories($category){
            //var_dump($category);
            $this->smarty->assign('category', $category);
            $this->smarty->display('editCategory.tpl');
        }
    }
?>