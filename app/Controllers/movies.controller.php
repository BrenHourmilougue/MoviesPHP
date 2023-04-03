<?php

require_once './app/Models/movies.model.php';
require_once './app/Views/movies.view.php';
require_once './app/Models/categories.model.php';


class MovieController {

    private $model;
    private $view;
    private $catmodel;
    

    public function __construct()
    {
        $this->model = new MovieModel();
        $this->view = new MovieView();
        $this->catmodel = new CategoryModel();

    }
    
    public function showMovies(){

        $movies = $this->model->getMovies();
        $categories = $this->catmodel->getCategories();
        $this->view->showMovies($movies, $categories);
    }

    function seeDetails($id){

        $categories = $this->catmodel->getCategories();
        $movie = $this->model->selectMovie($id);
        $this->view->showMovieDetails($movie, $categories);
    }

    function filterMovies($id){
        $category = $this->catmodel->selectCategory($id);
        $movies = $this->model->getMovies();
        $this->view->showFilteredMovies($category, $movies);
    }

    function showFormAddMovie() {
        
        $categories = $this->catmodel->getCategories();
        $this->view->showFormAddMovie($categories);
    }
    public function showEditMovie($id){
        
        $categories = $this->catmodel->getCategories();
        $movie = $this->model->selectMovie($id);
        $this->view->showEditMovie($movie, $categories);
    }

    function addMovie(){
        
        $title = $_POST['title'];
        $calification = $_POST['calification'];
        $director = $_POST['director'];
        $year = $_POST['year'];
        $description = $_POST['description'];
        $category_id = $_POST['category'];

        $id = $this->model->addMovie($title, $calification, $director, $year, $description, $category_id);

        header("Location: " . BASE_URL . "home");
    }
    
    function editMovie($id){
        
        $title = $_POST['title'];
        $calification = $_POST['calification'];
        $director = $_POST['director'];
        $year = $_POST['year'];
        $description = $_POST['description'];
        $category_id = $_POST['category'];

        $this->model->editMovie($title, $calification, $director, $year, $description, $category_id, $id);
        header("Location: " . BASE_URL . "home");
    }

    function deleteMovie($id){
        
        $this->model->deleteMovie($id);
        header("Location: " . BASE_URL . "home");
    }
}