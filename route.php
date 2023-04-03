<?php
require_once './app/Controllers/movies.controller.php';
require_once './app/Controllers/categories.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home';
    $moviescontroller = new MovieController();
        $moviescontroller->showMovies();
        break;    
    case 'categories';
    $catcontroller = new CategoryController();
        $catcontroller->showCategories();
        break;
    case 'edit';
    $moviescontroller = new MovieController();
                $id = $params[1];
                $moviescontroller->showEditMovie($id);
                break;
    case 'editMovie';
    $moviescontroller = new MovieController();
                $id = $params[1];
                $moviescontroller->editMovie($id);
                break;
    case 'editCategory';
    $catcontroller = new CategoryController();
                $id = $params[1];
                $catcontroller->showEditCategories($id);
                break;
    case 'postEditCategory';
    $catcontroller = new CategoryController();
                $id = $params[1];
                $catcontroller->editCategory($id);
                break;
    case 'delete';
    $moviescontroller = new MovieController();
            $id = $params[1];
            $moviescontroller->deleteMovie($id);
            break;
    case 'deleteCategory';
    $catcontroller = new CategoryController();
            $id = $params[1];
            $catcontroller->deleteCategory($id);
            break;
    case 'addMovie';
    $moviescontroller = new MovieController();
            $moviescontroller->addMovie();
            break;
    case 'newMovie';
    $moviescontroller = new MovieController();
            $moviescontroller->showFormAddMovie();
            break;
    case 'newCategory';
    $catcontroller = new CategoryController();
            $catcontroller->showFormAddCategory();
            break;
    case 'postNewCategory';
    $catcontroller = new CategoryController();
            $catcontroller->addCategory();
            break;
    case 'details';
    $moviescontroller = new MovieController();
            $id = $params[1];
            $moviescontroller->seeDetails($id);
    case 'filter';
    $moviescontroller = new MovieController();
            $id = $params[1];
            $moviescontroller->filterMovies($id);

    default:
        echo('404 Page not found');
        break;
}

?>