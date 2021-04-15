 <?php
 session_start();
 error_reporting(0);



   $fname=$_POST['fname'];
   $email = $_POST['email'];
   $lname=$_POST['lname'];
   $contact = $_POST['contact'];
   $phno = $_POST['phno'];
   $subject = $_POST['subject'];



$conn=mysqli_connect('localhost', 'root', '','enquire');


if ($conn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
} 

$sql = "INSERT INTO info(fname, lname, phno,email,subject,contact) VALUES ('$fname', '$lname', '$phno','$email','$subject','$contact')";

// if ($conn->query($sql) === TRUE) {
if (mysqli_query($conn, $sql)) {

 header('Location: form.html');
 exit;


// echo "<script>window.Location = 'myprofile.html'"</script>" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// mysqli_query($conn, $sql);


$conn->close();
?>