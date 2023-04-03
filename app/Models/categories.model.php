<?php

class CategoryModel{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }

    public function addCategory($category){
        $query = $this->db->prepare("INSERT INTO category(id, category) VALUES(?,?)");
        $query->execute([$id, $category]);
    }

    public function getCategories(){
        $query = $this -> db -> prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    public function selectCategory($id){
        $query = $this->db->prepare("SELECT * FROM category WHERE id=?");
        $query->execute([$id]);
        $category = $query->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    public function deleteCategory($id){
        $movie = $this->selectCategory($id);
        $query = $this->db->prepare('DELETE FROM category WHERE id=?');
        $query->execute([$id]);
    }

    public function getMovieCat($id){
        $query = $this->db->prepare("SELECT * FROM movies WHERE category_id = ?");
        $query -> execute([$id]);
        $IdMovie = $query->fetch(PDO::FETCH_OBJ);
        return $IdMovie;
    }

    public function editCategory($category, $id){
        $query = $this->db->prepare("UPDATE category SET category = ? WHERE id = ?");
        $query->execute([$category, $id]);
        $query->fetchAll(PDO::FETCH_OBJ);
    }
}

?>