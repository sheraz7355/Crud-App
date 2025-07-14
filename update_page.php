<?php
include ('header.php');
include('connect.php');
?>

<?php
if (isset($_GET['id'])) {
    include('connect.php');  
    $id = $_GET['id'];
    // Insert query
    $query = "SELECT * FROM student WHERE id = '$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}else{
    $row = mysqli_fetch_assoc($result);
}
}
?>

<?php
if (isset($_POST['update_student'])) {
    $id = $_POST['id_new'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    $query = "UPDATE student SET first_name = '$f_name', last_name = '$l_name', age = '$age' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location:index.php?message=Student updated successfully");
        exit();
    } else {
        die("Query failed: " . mysqli_error($conn));

}
}
?>

<form method="POST" action="update_page.php?id_new=<?php echo $id?>">
   
 <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="f_name" value="<?php echo $row['first_name']; ?>">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="l_name" value="<?php echo $row['last_name']; ?>">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>">
                    </div>
                    <button type="submit" id = "update_button" class="btn btn-primary" name="update_student">Update</button>
</form>











<?php
include('footer.php');
$conn->close();

?>