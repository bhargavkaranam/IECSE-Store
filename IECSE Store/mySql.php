<!-- Open a Connection to MySQL -->


<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"promislove"); //Databse name

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





$Name1=$_POST['Name'];
$Password1=$_POST['Password'];
// $Email1=$_POST['Email'];
// $Phone1=$_POST['Phone'];
// $Address1=$_POST['Address'];
// Username already exists
$query = mysqli_query($conn,"SELECT * FROM promrocks WHERE Name='$Name1'") or die(mysql_errno($conn));

  if (mysqli_num_rows($query) != 0)
  {
      echo "Username already exists .<br> Status 101";
      die();
  }


//Name of table inside the Database
$sql = "INSERT INTO promrocks (Name) VALUES('$Name1')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully .<br>Status 111";
} else {
    echo "Error: Status 000" . $sql . "<br>" . $conn->error;
}


//Phone number validation
    // 
	// if(strlen($Phone1)==10) {
    //     echo "Number is correct";
    // }
    //
    // else{
    //     echo "Invalid Code 103";
    // }
    //



//JSON Encode
json_encode(Contact-form.html, "True");


$conn->close();
?>
