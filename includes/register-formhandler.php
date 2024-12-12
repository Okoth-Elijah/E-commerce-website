<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitbtn'])) {
    // Sanitize input data
    $username = htmlspecialchars(trim($_POST["username"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $pwd = isset($_POST["pwd"]) ? password_hash($_POST["pwd"], PASSWORD_DEFAULT) : null; // Hashing password
    $countryCode = htmlspecialchars(trim($_POST["countryCode"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    // Check for missing inputs
    if (!$username || !$phone || !$pwd || !$countryCode || !$email) {
        echo "<script>alert('All fields are required. Please fill out the form completely.'); window.location.href='register.php';</script>";
        exit();
    }

    // Concatenate the country code with the phone number
    $fullPhoneNumber = "+" . $countryCode . $phone;

    // Validate the phone number format
    if (!preg_match('/^\+\d{9,15}$/', $fullPhoneNumber)) {
      echo "<script>alert('Invalid phone number format. Ensure it has between 10 and 15 digits.'); window.location.href='register.php';</script>";
      exit();
  }
  

    try {
        // Include database connection file
        require_once "dbh.inc.php";

        // Prepare SQL query for inserting data
        $query = "INSERT INTO users (username, phone, pwd, countryCode, email) VALUES (:username, :phone, :pwd, :countryCode, :email)";
        $stmt = $pdo->prepare($query);

        // Bind parameters to the prepared statement
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":phone", $fullPhoneNumber);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":countryCode", $countryCode);
        $stmt->bindParam(":email", $email);

        // Execute the query
        $stmt->execute();
        $pdo = null; 
        $stmt = null;

        // Redirect to login page after successful registration
        header("Location: ../login.php");

        // $username = null;
        // $phone = null; 
        // $pwd = null;
        // $email = null; 
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        echo "<script>alert('Registration failed: " . $e->getMessage() . "'); window.location.href='../register.php';</script>";
        exit();
    }
} else {
    // Redirect if accessed directly
    header("Location: ../register.php");
    exit();
}
?>
