<?php
include "connection.php";

if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $age = $_POST['age'];
    $form_date = "INSERT INTO student(first_name, last_name, age)
     VALUEs('$fname', '$lname', $age)";
    //Excute query
    mysqli_query($conn, $form_date);
    header("location:form.php");
}

//fetch all data from the database
$dates = "SELECT *FROM student";
$students = mysqli_query($conn,$dates);

//view single data from the data from the database
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $single_data = "SELECT * FROM student WHERE id = $id";
    $my_single_data = mysqli_query($conn, $single_data);
}



######################################################
//edit specific data from the database
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit_data = "SELECT * FROM student WHERE id = $id";
    $edit = mysqli_query($conn, $edit_data);
}

#######################
//upate data from the edit form
if(isset($_POST['update'])$$isset_GET['up']){
    $id=$_GET['up'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $age = $_POST['age'];

    //query tto update to the databse
    $form_data_to_update = "UPDATE INTO student SETfirst_name ='$fname', last_name='$lname', age='$age' WHERE id ="$id;
     VALUEs('$fname', '$lname', $age)";
    //Excute query
    mysqli_query($conn, $form_date);
    header("location:form.php");
}

##################################
if(isset($_GET['del'])){
    $id = $_GET['id'];
    $delete = "DELETE * FROM student WHERE id = $id";
    mysqli_query($conn, $delete);
    header("location:form.php");

}