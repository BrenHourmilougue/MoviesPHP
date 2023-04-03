<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class MovieView{
        private $smarty;

        function __construct()
        {
            $this->smarty = new Smarty();
        }

        function showMovies($movies, $categories){
            
            $this->smarty->assign('movies', $movies);
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('Movies.tpl');
        }

        function showMovieDetails($movie, $categories){
            $this->smarty->assign('movie', $movie);
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('Movie.tpl');
        }

        function showFilteredMovies($category, $movies){
            $this->smarty->assign('movies', $movies);
            $this->smarty->assign('category', $category);
            $this->smarty->display('filteredMovies.tpl');
        }

        function showFormAddMovie($categories){
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('MoviesForm.tpl');
        }

        function showEditMovie($movie, $categories){
            $this->smarty->assign('movie', $movie);
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('editMovie.tpl');
        }
    }
?>