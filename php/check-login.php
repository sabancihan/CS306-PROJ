<?php
session_start();
include "db_conn.php";

$errorMessage = "";

if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
      $role = test_input($_POST["role"]);

      if(empty($username)) 
          $errorMessage="Please enter your username";
      

      else  if(empty($password)) 
        $errorMessage="Please enter your password";


        else {

            $sql  = "SELECT * FROM users WHERE username='$username' AND role='$role'";
   
             $result = mysqli_query($conn,$sql);
   
             if(mysqli_num_rows($result) === 1) {
                 
                 $row = mysqli_fetch_assoc($result);
   
                 if(password_verify($password,$row["password"])) {
   
                   $typesql = "SELECT id FROM user$role WHERE username='$username'";
                   echo $typesql;
                   $typeresult = mysqli_query($conn,$typesql);
                      
                   if(mysqli_num_rows($typeresult) === 1) {
   
                     $typerow = mysqli_fetch_assoc($typeresult);   
                     $_SESSION["role"] = $row["role"];
                     $_SESSION["id"] = $typerow["id"];
   
                     header("Location: ../home.php");
   
   
                   }
   
                   else 
                    $errorMessage = "User is deleted";                  
             }
   
             else 
                $errorMessage = "Wrong password";         
         }
   
         else 
            $errorMessage = "Wrong username/type";

        }
        
    }

else 
    $errorMessage = "Please enter all inputs";

if($errorMessage != "")
    header("Location: ../index.php?error=$errorMessage");



