<?php

                   if (isset($_REQUEST['submit'])) {
                    
                    // $id = $_REQUEST['id'];
                    $name =  $_REQUEST['name'];
                    $number = $_REQUEST['number'];
                    $password =  $_REQUEST['password'];
                    $user_type = $_REQUEST['user_type'];
                    $email = $_REQUEST['email'];

                    $sql = "INSERT INTO users (fullname, email, usertype, contact, lpassword) VALUES ('$name',
                    '$email','$user_type', '$number', '$password')";

                  if(mysqli_query($conn, $sql)){
                  echo "<script>alert('new user added');</script>";

                  } 
                  else{
                      echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
                   }
                   }
 ?>