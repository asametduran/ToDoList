<?php

include('config/constants.php');


?>

<html>
<head>
    <title>To Do List with PHP and MySQL</title>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/style.css" />
</head>
<body>
    <h1>TO DO LIST</h1>
    <a href="<?php echo SITEURL;?>index.php">Home</a>
    <a href="<?php echo SITEURL;?>manage-list.php">Manage Lists</a>


    <h3>Add List Page</h3>

    <p>
        <?php
            //chech whether the session is created or not
    if(isset($_SESSION['add_fail'])){
        //displat session message after displaying once
        echo $_SESSION['add_fail'];
        unset($_SESSION['add_fail']);
    }

?>

</p>

    <!-- Form to Add List Starts Here -->
    <form method="POST" action="">
        <table>
            <tr>
                <td>List Name: </td>
                <td><input type="text" name="list_name" placeholder="Type List Name Here" required="required"/></td>
            </tr>

            <tr>
                <td>List Description:</td>
                <td><textarea name="list_description" placeholder="Type List Description Here"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SAVE"></td>
            </tr>
        </table>
    </form>
    <!-- Form to Add List Ends Here -->

</body>
</html>

<?php

    //Check whether the form is submitted or not
    if(isset($_POST['submit'])){
        //echo "Form submitted";
        //get the values from form and save it in variables
        $list_name = $_POST['list_name'];
        $list_description = $_POST['list_description'];

        //connect to database
        $conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

        //check whether the database is connected or not
        /*
        if($conn==true){
            echo "Database Connected";
        }
            */
        //Select database
        $db_select=mysqli_select_db($conn, DB_NAME);

        //Check whether database is connected or not
        /*
        if($db_select==true){
            echo "Database Selected";
        }
            */
        
        //Sql query to insert data into database
        $sql = "INSERT INTO tbl_lists SET
        list_name = '$list_name',
        list_description = '$list_description'
        ";

        //Execute query and insert data into database
        $res = mysqli_query($conn, $sql);

        //Chech whether the query is executed succesfully or not
        if($res==true){
            //Data inserted successfully
           // echo "Data inserted successfully";

           //Create a session variable to display message
           $_SESSION['add']= "List Added Successfully";


            //Redirect to Manage Lists page
            header("location:".SITEURL."manage-list.php");

            

        }

        
        else{
            //Failed to insert data
           // echo "Failed to insert data";

            //Create session to save message
            $_SESSION['add_fail']= "Failed to add List";


            //Redirect to Same page
            header("location:".SITEURL."add-list.php");
        }
    }
    /*
    else{
        echo "Form not submitted";
    }
*/


?>