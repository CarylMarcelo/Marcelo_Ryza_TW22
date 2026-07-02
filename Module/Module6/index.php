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
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Year Level</th>
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
                            <td><?= $row['student_id']; ?></td>
                            <td><?= $row['first_name']; ?></td>
                            <td><?= $row['last_name']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['year_level']; ?></td>
                            <td><?= $row['date_created']; ?></td>
                        </tr>
                        <?php
                        // End the loop
                        endwhile;
                        ?>

                        <?php
                        // Check if the table hase records
                        if(mysqli_num_rows($result) === 0):
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