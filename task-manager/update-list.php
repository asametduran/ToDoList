<?php 
    include('config/constants.php');

    //Get the Current values of the selected list
    if(isset($_GET['list_id'])){
        //GEt the list ID value
        $list_id=$_GET['list_id'];

        //connect to database
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

        //select database
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

        //Query to get the values from database
        $sql="SELECT * FROM tbl_lists WHERE list_id=$list_id";

        //execute the query
        $res=mysqli_query($conn, $sql);

        //check whether the query is executed successfully or not
        if($res==true){
            //get the value from the database
            $row=mysqli_fetch_assoc($res); // Value is in array
           
            //printing $row array
            // print_r($row);
            //echo "executed successfully";

            //Create Individueal Variable to save the data
            $list_name = $row['list_name'];
            $list_description = $row['list_description'];

        }   
        else {
            //go back to manage lists page
            header('location:'.SITEURL.'manage-list.php');
        }
    }
?>
<html>
    <head>
    <title>To Do List with PHP and MySQL</title>
        <link rel="stylesheet" href="<?php echo SITEURL; ?>css/style.css" />
    </head>
    <body>
        <h1>TASK MANAGER</h1>
        <div class="menu">
            <a href="<?php echo SITEURL;?>">Home</a>
            <a href="<?php echo SITEURL;?>manage-list.php">Manage Lists</a>
        </div>

        <h3>Update List Page</h3>

<p>
    <?php
   
   //Check whether the session is set or not
   if(isset($_SESSION['update_fail'])){
    echo $_SESSION['update_fail'];
    unset($_SESSION['update_fail']);

   }
   
   ?>
</p>

        <form method="POST" action="">

            <table>
                
                <tr>
                    <td>List Name: </td>
                    <td><input type="text" name="list_name" value="<?php echo $list_name; ?>" required="required"/></td>
                </tr>
                
                <tr>
                    <td>List Description: </td>
                    <td>
                        <textarea name="list_description">
                            <?php echo $list_description; ?>

                        </textarea>
                    </td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="submit" value="UPDATE" /></td>
                </tr>
            </table>

        </form>

    </body>
</html>

<?php 

    //Check whether the Update is Clicked or not
    if(isset($_POST['submit'])){
        //echo "BUtton Clicked";

        //Get the Updated Values from our Form
        $list_name = $_POST['list_name'];
        $list_description = $_POST['list_description'];

        //Connect to database
        $conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

        //Select the Database
        $db_select2 = mysqli_select_db($conn2, DB_NAME) or die(mysqli_error());

        //Query to update
        echo $sql2="UPDATE tbl_lists SET list_name='$list_name', list_description='$list_description' WHERE list_id=$list_id";

        //Execute the Query
        $res2=mysqli_query($conn2, $sql2);

        //Check whether the query is executed successfully or not
        if($res2==true){
            //update succesfull
            //set the message
            $_SESSION['update']="List Updated Successfully";

            //Redirect to Manage Lists Page
            header('location:'.SITEURL.'manage-list.php');
        }
        else{
            //failed to update
            //Set Session Message
            $_SESSION['update_fail']="Failed to Update";

            //Redirect to the update list page
            header('location:'.SITEURL.'update-list.php?list_id='.$list_id);
        }

    }
?>