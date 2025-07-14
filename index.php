<?php
include('header.php');
include('connect.php');

$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<div class="box">
    <h2>Student List</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
</div>

<table class="table table-hover table-bordered table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo ($row['id']); ?></td>
                <td><?php echo ($row['first_name']); ?></td>
                <td><?php echo ($row['last_name']); ?></td>
                <td><?php echo ($row['age']); ?></td>
                <td><a href="update_page.php?id=<?php echo ($row['id'])?>"class="btn btn-success">Update</a></td>
                <td><a href="delete_page.php?id=<?php echo ($row['id'])?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
if (isset($_GET['message'])) {
    echo "<h3>" . htmlspecialchars($_GET['message']) . "</h3>";
}
?>



<!-- Modal -->
<form method="POST" action="add_student.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="f_name">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="l_name">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_student">ADD</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('footer.php');
?>
