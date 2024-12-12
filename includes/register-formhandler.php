<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitbtn'])) {
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT); // Hashing password
    $countryCode = $_POST["countryCode"];
    $email = $_POST["email"];

    // Concatenate the country code with the phone number
    $fullPhoneNumber = "+" . $countryCode . $phone;

    // Validate the phone number
    if (preg_match('/^\+\d{10,15}$/', $fullPhoneNumber)) {
        echo "Full Phone Number: " . $fullPhoneNumber;
    } else {
        echo "Invalid phone number format.";
        exit();
    }

    try {
        require_once "dbh.inc.php"; 
        
        // Ensure the query is correct for inserting data
        $query = "INSERT INTO users (username, phone, pwd, countryCode, email) VALUES (:username, :phone, :pwd, :countryCode, :email)";
        $stmt = $pdo->prepare($query);

        // Bind parameters to the prepared statement
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":phone", $fullPhoneNumber); // Binding full phone number
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":countryCode", $countryCode);
        $stmt->bindParam(":email", $email);

        // Execute the query
        $stmt->execute();

        // Close the connection
        $pdo = null;
        $stmt = null;

        // Redirect to login page after successful registration
        header("Location: login.php");
        die();
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
} else {
    header("Location: register.php");
}
?>
