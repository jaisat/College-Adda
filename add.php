
<html>
    <head>
    <?php

        //error_reporting(0);//this make browser to report no error

        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'student');

        $name = $_POST['des'];
        $link = $_POST['link'];
        //$pass = $_POST['password'];
        $sql = "insert into info (description,link) values ('$name','$link')";

        //if($_POST['submit']){
            if(mysqli_query($con, $sql)){
                echo "data added successfully";
            }
            else{
                echo "something went wrong";
            }
       // }

?>
    </head>
    <body>
        <form action="add.php" method="post">
            DESCRIPTION: <input type="text" name="des">
            LINK: <input type="text" name="link">
            
            <br>
            <button type="submit" name="submit">ADD</button>
        </form>
    </body>
</html>