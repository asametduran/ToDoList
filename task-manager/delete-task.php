<?php
    include('config/constants.php');

    //Check task id in URL
    if(isset($_GET['task_id']))
    {
        //Delete the task from the database
        $task_id = $_GET['task_id'];

        //Connect to the database
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

        //Select Database
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

        //SQL Query to Delete the task
        $sql = "DELETE FROM tbl_tasks WHERE task_id =$task_id";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        //Check if the query executed successfully ornot
        if($res==true)
        {
            //Query executed successfully
            $_SESSION['delete'] = "Task Deleted Successfully";
            
            //Redirect to the home page
            header('location:'.SITEURL);
        }
        else
        {
            //Failed to delete the task
            $_SESSION['delete_fail'] = "Failed to delete the task";
            
            //Redirect to the home page
            header('location:'.SITEURL);

        }
    }

    
    else
    {   
        //Redirect to the Home page
        header('location:' .SITEURL);
    }

?>