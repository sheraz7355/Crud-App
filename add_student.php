<?php
if (isset($_POST['add_student'])) {
    include('connect.php');

    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $age = $_POST['age'];

    if ($first_name == '' || empty($first_name)) {
        die("First name is required");
    }
    // Insert query
    $query = "INSERT INTO student (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";

   $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: index.php?message=Student added successfully");
        exit();
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
    $conn->close();
}


?>