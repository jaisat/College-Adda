
<html>
    <head>
    <?php

        //error_reporting(0);//this make browser to report no error

        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'student');

        $id = $_POST['id'];
        /*$email = $_POST['email'];
        $pass = $_POST['password'];*/
        $sql = "delete from info where id='$id'";

        //if($_POST['submit']){
            if(mysqli_query($con, $sql)){
                echo "data deleted successfully";
            }
            else{
                echo "something went wrong";
            }
       // }

?>
    </head>
    <body>
        <form action="delete.php" method="post">
            ID FOR DELETION: <input type="text" name="id">
            <br>
            <button type="submit" name="submit">Delete</button>
        </form>
    </body>
</html>