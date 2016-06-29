<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Images Model Class
 */
class Image {
    private $id;
    private $image;
    private $alt;
    private $projects_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;

  public function __construct($image) {

        $this->image =$image;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }
    public function getImage() {
        return $this->image;
    }

    public function setImage($value) {
        $this->image= $value;
    }
      public function getAlt() {
        return $this->alt;
    }

    public function setAlt($value) {
        $this->alt= $value;
    }
      public function getProjects_id() {
        return $this->projects_id;
    }

    public function setProjects_id($value) {
        $this->projects_id= $value;
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
} 
