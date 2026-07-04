<?php
/**
 * @var mysqli_result $result MySQL query result
 */
?>

<?php
require('fetch_students.php');

// echo "<pre>";
// var_dump($result);
// echo "<pre>";

// die();
?>
<?php
require('include/header.php');
?>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Student List</h2>
            <a href="register.php" class="btn btn-success">+ Add New Student Record</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Year Level</th>
                            <th>Status</th>
                            <th>Date Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        // Loop through all records for the table tblstudents
                        while($row = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?= $counter++; ?></td>
                            <td>
                                <?php if($row['photo']):?>
                                    <img src="uploads/<?= $row['photo'] ?>" alt="Student photo." width="50px" height="50px" class="rounded-circle object-fit-cover">
                                <?php else: ?>
                                    <span class="text-muted">No Photo</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $row['student_id']; ?></td>
                            <td><?= $row['first_name']; ?></td>
                            <td><?= $row['last_name']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['year_level']; ?></td>
                            <td>
                                <?php if($row['is_confirmed']):?>
                                    <span class="badge bg-success">Confirmed</span>
                                <?php else:?> 
                                    <span class="badge bg-warning">Pending</span>
                                <?php endif;?>
                            </td>
                            <td><?= $row['date_created']; ?></td>
                        </tr>
                        <?php
                        // End the loop
                        endwhile;
                        ?>

                        <?php
                        // Check if the table hase records
                        if(mysqli_num_rows($result) === 0):
                        // if($conn->num_rows === 0):
                        ?>
                        <tr>
                            <td colspan="8" class="text-center text-muted">No student records found...</td>
                        </tr>
                        <?php
                        // End the checking part
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php
require('include/footer.php');
?>