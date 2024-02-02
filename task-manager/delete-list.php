<?php 

    //include constants.php
    include('config/constants.php');

    //Check whethe the list_id assigned or not
    if(isset($_GET['list_id'])){
        //Delete the list from database
        
        
        //Get the list_id value from URL or Get Method
        $list_id=$_GET['list_id'];


    //connect the database
    $conn= mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

    //select the database
    $db_select=mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

    //Write the Query to Delete list from database
   $sql="DELETE FROM tbl_lists WHERE list_id=$list_id";
        //execute the query
        $res=mysqli_query($conn, $sql);

        //Check whether the query is executed succesfully or not
        if($res==true){
            //work on displaying data
            //echo "executed successfully";
            //Query executed succesfully which means list is deleted successfully
            $_SESSION['delete']="List Deleted Successfully";

            //redicrect to manage lists page
            header('location:'.SITEURL.'manage-list.php');
        }
        else {
            //failed to delete list
            $_SESSION['delete_fail']="Failed to Delete List";
            header('location:'.SITEURL.'manage-list.php');
        }
    }
    else{
        //redirect to manage list page
        header('location:'.SITEURL.'manage-list.php');
    }

    
    
    


?>