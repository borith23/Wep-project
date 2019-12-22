<?php
    function get_data(){
        $query = "SELECT * FROM info_student";
        include "connection.php";
        $rows = [];
        $result = mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result)>0){
            foreach($result as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }

    function add_data($data) {
        include "connection.php";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $sex = $_POST['sex'];
        $email = $_POST ['email'];
        $reason = $_POST['reason'];
        $major = $_POST['major'];
        $filename = $_FILES['profile']['name'];
        $fileLocation = $_FILES['profile']['tmp_name'];
        move_uploaded_file($fileLocation, "View/img/".$filename);
    
        $query = "INSERT INTO info_student(first_name,last_name,class,gender,email,reason,marjor,profile)
                  VALUES('$firstname', '$lastname', ' $class', '$sex',' $email',' $reason',' $major', '$filename')";
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function m_detail() {
        $id = $_GET['id'];
        $query =  "SELECT * FROM info_student WHERE id = $id";
        include "connection.php";
        $result = mysqli_query($connection,$query);
        
        return $result;
    }
    

    function m_update_data($data) {
        include "connection.php";
        $id = $_GET['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $sex = $_POST['sex'];
        $email = $_POST ['email'];
        $reason = $_POST['reason'];
        $marjor = $_POST['major'];
    
        $query = "UPDATE info_student SET  first_name='$firstname',last_name='$lastname',class = '$class',gender='$sex',email='$email',reason='$reason',marjor='$marjor' WHERE id='$id'";
    
        $result = mysqli_query($connection, $query);
        return $result;
    }
    
    function m_change_profile($data) {
        include "connection.php";
        $id = $_GET['id'];
        $filename = $_FILES['profile']['name'];
        $fileLocation = $_FILES['profile']['tmp_name'];
        move_uploaded_file($fileLocation, "View/img/".$filename);
    
        $query = "UPDATE info_student SET profile = '$filename' WHERE id='$id'";
    
        $result = mysqli_query($connection, $query);
        return $result;
    
    
    }

    function m_delete() {
        include "connection.php";
        $id = $_GET['id'];
        $result = mysqli_query($connection, "DELETE FROM info_student WHERE id= $id");
    
        return $result;
    }
    
    
?>