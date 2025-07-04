<!DOCTYPE html>
<html>
<head>
  <title>Message</title>
  <style>
    .success-message {
      background-color: #d1e7dd;
      color: #0f5132;
      border: 2px solid #badbcc;
      padding: 15px 20px;
      border-radius: 10px;
      margin: 30px auto;
      max-width: 500px;
      text-align: center;
      font-family: 'Segoe UI', sans-serif;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .success-message h2 {
      margin: 0;
      font-size: 20px;
    }
  </style>
</head>
<body>
<?php
$conn = new mysqli("localhost","root","","contact");

if($conn->connect_error){
    die("error!!!!!!" . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo '<div class="success-message">
        <h2>Message saved successfully!</h2>
      </div>';
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
</body>
</html>