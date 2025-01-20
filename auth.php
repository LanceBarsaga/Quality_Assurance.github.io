<?php
session_start();

include('config.php');

if(isset($_POST['login'])){  

    $username = $_POST['username']; 
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_user WHERE username = '$username' and password = '$password' ";                      
    $result = mysqli_query($conn, $sql);    
    $count = mysqli_num_rows($result);     
    $row = mysqli_fetch_array($result);

    if($count > 0){
        if($row['active'] == 1){
            $_SESSION['username'] = $username;
    

        ?>
            <script>
                alert("Login Successfull");  
                window.location.href='Dashboard.php'; 
            </script>
        <?php
        }else{
        ?>
            <script>
                alert("Your account is deactivated");
                window.location.href='index.html';
            </script>
        <?php
        }

    } else {  
        ?>
        <script>
            alert("Your username and password is incorrect"); 
            window.location.href='index.html';
        </script>
        <?php
    }
}

mysqli_close($conn);