<?php
include('header.php');
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
<form method="POST" action="delete_page.php?id_new=<?php echo $id?>">
   
 <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="f_name" value="<?php echo $row['first_name']; ?>">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="l_name" value="<?php echo $row['last_name']; ?>">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>">
                    </div>
                    <button type="submit" id = "delete_button" class="btn btn-primary" name="delete_student">Delete</button>
</form>


<?php
if (isset($_POST['delete_student'])) {
    $id = $_POST['id_new'];
    // Delete query
    $query = "DELETE FROM student WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location:index.php?message=Student deleted successfully");
        exit();
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
}

?>




<?php
include('footer.php');
?>