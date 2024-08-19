<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "businessdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Start a session and store the username
            session_start();
            $_SESSION['username'] = $username;

            // Redirect to the home page
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid password.";
            header("Location: finanacehomehtml.html");
            echo "Invalid password.";

        }
    } else {
        echo "No user found with that username.";
    }
}

$conn->close();
?>
