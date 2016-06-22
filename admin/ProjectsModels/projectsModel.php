<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Projects Model Class
 */
class Project {

    private $id;
    private $name;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $students_id;
    private $description;
    private $tools;
    private $keywords;

  public function __construct($name) {

        $this->name =$name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name= $value;
    }
  public function getCreated_at() {
        return $this->created_at;
    }

    public function setCreated_at($value) {
        $this->created_at= $value;
    }
    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function setUpdated_at($value) {
        $this->updated_at= $value;
    }
    public function getDeleted_at() {
        return $this->deleted_at;
    }

    public function setDeleted_at($value) {
        $this->deleted_at= $value;
    }
  
    public function getStudentId() {
        return $this->students_id;
    }

    public function setStudentId($value) {
        $this->students_id = $value;
    }
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($value) {
        $this->description = $value;
    }
    public function getTools() {
        return $this->tools;
    }

    public function setTools($value) {
        $this->tools = $value;
    }
    public function getKeywords() {
        return $this->keywords;
    }

    public function setKeywords($value) {
        $this->keywords = $value;
    }
} 
