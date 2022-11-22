<?php

$db = mysqli_connect('localhost', 'root', '', 'test');



    if (isset($_POST['Email']) && isset($_POST['password'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Email = validate($_POST['Email']);
        $pass = validate($_POST['password']);

        if (empty($Email)){
            header("Location: Login.php?error=Email is required");
            exit();
        }
        if (empty($pass)){
            header("Location: Login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM attorneys WHERE Email='$Email' AND password='$pass'" ;
            
            $result = mysqli_query($db , $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);
                
                header("Location: List/index1.php");
             }

            else {
                header("Location: Login.php?error=Incorrect Email Or Password");
                exit();
            }
        }
    }else{
        header("Location: Login.php");
        exit();
    }

?>