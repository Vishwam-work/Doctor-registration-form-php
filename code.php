<?php

session_start();

$conn = mysqli_connect("localhost","root","","doctor");

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $image = $_FILES['image']['name'];

    $query = "INSERT INTO doctor_info(name,ph_num,email,image) VALUES('$name','$phonenumber','$email','$image')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
            $_SESSION['status'] = "Data store successfully";
            header('location:main.php'); 
          
            move_uploaded_file($_FILES["image"]["tmp_name"], "image_uploaded/".$image);

    }
    else{
        $_SESSION['status'] = "Data Not store successfully";
        header('location:main.php'); 
    }

};
if(isset($_POST['update_btn'])){
    $docid = $_POST['doc_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
   
   
    
    
        $query="UPDATE doctor_info SET name='$name',ph_num='$phonenumber',email='$email' WHERE id='$docid'";
        $query_run=mysqli_query($conn,$query);
        if($query_run){
           
            $_SESSION["status"]="Data updated"; 
            header('location:display.php'); 
    
        }
    else{
        $_SESSION["status"]="Data not updated";
        header('location:display.php');   



    }



}




?>