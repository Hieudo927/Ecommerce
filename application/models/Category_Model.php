<?php
loadModel("Model");

class Category_Model extends Model {
    public function __construct(){
        parent::__construct();
    }

    public function getCategories(){
        $sql = "SELECT * FROM categories";
        return $this->mysqli_array_result($this->con, $sql);
    }

    public function addCategory($categoryName = null){
        try{
            if($categoryName !== null){
                $sql = "INSERT INTO categories (cat_title) VALUES ('$categoryName')";
                mysqli_query($this->con, $sql);
                if(mysqli_affected_rows($this->con) > 0){
                    return $this->returnResult(201, '1 New Category Added Successfully');
                }
                return $this->returnResult(200, 'Something went wrong');
            }
        }catch(Exception $e){
            return $this->returnResult(500, $e->getMessage());
        }
    }

    public function deleteCategoryById($categoryId = null){
        try{
            if($categoryId !== null){
                $sql = "DELETE FROM categories WHERE cat_id = '$categoryId'";
                mysqli_query($this->con, $sql);
                if(mysqli_affected_rows($this->con) > 0){
                    return $this->returnResult(200, '1 Category Removed');
                }
                return $this->returnResult(200, 'Something went wrong');
            }
        }catch(Exception $e){
            return $this->returnResult(500, $e->getMessage());
        }
    }

    public function updateCategoryById($categoryId = null, $categoryName = null){
        try{
            if($categoryId !== null && $categoryName !== null){
                $sql = "UPDATE categories SET cat_title = '$categoryName' WHERE cat_id = '$categoryId'";
                mysqli_query($this->con, $sql);
                if(mysqli_affected_rows($this->con) > 0){
                    return $this->returnResult(201, '1 Category Updated');
                }
                return $this->returnResult(200, 'Something went wrong');
            }
        }catch(Exception $e){
            return $this->returnResult(500, $e->getMessage());
        }
    }
    public function getCategoryById($categoryId = null){
        try{
            if($categoryId !== null){
                $sql = "SELECT * FROM categories WHERE cat_id = '$categoryId'";
                $rows = $this->mysqli_array_result($this->con, $sql);
                return $this->returnResult(200, null, $rows[0]);
            }
        }catch(Exception $e){
            return $this->returnResult(500, $e->getMessage());
        }
    }
}


?>