<?php
// Include script to make a database connection
include("connect.php");
// Empty string to be used later
$name='';
$email='';
$id='';

// Button click to update using POST method
if(!empty($_POST['update']) && !empty($_POST['id']) )  {
  $id=$_POST['id'];
  // Fetch record with ID and populate it in the form
  $query2 = "SELECT * FROM users WHERE id='".$_POST['id']."' ";
  $result = $conn->query($query2);
  if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
      $name=$row["fullname"];
      $email=$row["email"];
    }
    // echo "Current Details: " ."<b> - Name:</b> " . $name. " <b>Email:</b>" . $email. "<br>";
  } else {
    echo "Error updating";
  }
}

if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['id']) ){
    // Insert into the database
  $query = "UPDATE users SET fullname='".$_POST['fullname']."', email='".$_POST['email']."' WHERE id='".$_POST['id']."' ";
  if (mysqli_query($conn, $query)) {
      echo "Record updated successfully!<br/>";
      header("Location: users.php");
      // echo '<a href="form-get.php">Get Form</a><br/>
      //       <a href="form-post.php">Post Form</a>';
      die(0);
  } else {
      // Display an error message if unable to update the record
       echo "Error updating record: " . $conn->error;
       die(0);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>
</head>
<body>
    <h1>Form</h1>
    <p>Edit the record</p>
    <form method="POST" action="update.php">
        ID: <input type="text" name="id" value="<?php echo($id); ?>" required><br><br/>
        Name: <input type="text" name="fullname" value="<?php echo($name); ?>" required><br><br/>
        Email: <input type="text" name="email" value="<?php echo($email); ?>" required><br/>
        <br/>
        <input type="submit" value="update">
    </form>
</body>
</html>
