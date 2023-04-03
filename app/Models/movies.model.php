<?php

class MovieModel{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }

    public function getMovies () {
        $query = $this -> db -> prepare("SELECT * FROM movies");
        $query->execute();
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }

    public function addMovie($title, $calification, $director, $year, $description, $category_id){
        $query = $this->db->prepare("INSERT INTO movies(title, calification, director, year, description, category_id) VALUES(?,?,?,?,?,?)");
        $query->execute([$title, $calification, $director, $year, $description, $category_id]);

    }

    public function selectMovie($id){
        $query = $this->db->prepare("SELECT * FROM movies WHERE id=?");
        $query->execute([$id]);
        $movie = $query->fetch(PDO::FETCH_OBJ);
        return $movie;
    }

    public function deleteMovie($id){
        $movie = $this->selectMovie($id);
        $query = $this->db->prepare('DELETE FROM movies WHERE id=?');
        $query->execute([$id]);
    }

    function editMovie($title, $calification, $director, $year, $description, $category_id, $id){
        $query = $this->db->prepare("UPDATE movies SET title = ?, calification = ?, director = ?, year = ?, description = ?, category_id = ? WHERE id = ?");
        $query->execute([$title, $calification, $director, $year, $description, $category_id, $id]);
        $query->fetchAll(PDO::FETCH_OBJ);
    }


}
?>