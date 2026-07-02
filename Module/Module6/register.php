<?php
require('registration.php');

require('include/header.php');
?>
        <div class="d-flex justify-content-center">
            <div class="col col-md-4">
                <h2 class="mb-4">Student Registration</h2>

                <?php
                if($message):
                ?>
                <div class="alert alert-<?= $type; ?> alert-dismissible fade show" role="alert">
                    <?= $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss></button>
                </div>
                <?php
                endif;
                ?>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="register.php" method="post" novalidate>
                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student ID</label>
                                <input type="text" name="student_id" id="student_id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="course" class="form-label">Course</label>
                                <select name="course" id="course" class="form-select">
                                    <option value="">-- Select Course --</option>
                                    <option value="BSIT">BS Information Technology</option>
                                    <option value="BSCS">BS Computer Science</option>
                                    <option value="BSCoE">BS Computer Engineering</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="year_level" class="form-label">Year Level</label>
                                <select name="year_level" id="year_level" class="form-select">
                                    <option value="">-- Select Year Level --</option>
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                <a href="index.php" class="btn btn-secondary">View Student List</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
require('include/footer.php');
?>