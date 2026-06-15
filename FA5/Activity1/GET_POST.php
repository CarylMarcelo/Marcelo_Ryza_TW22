<?php
// Check if either the GET or POST submit button was triggered
$isGet  = isset($_GET['submit_get']);
$isPost = isset($_POST['submit_post']);
$formSubmitted = $isGet || $isPost;

// Dynamically select the correct superglobal source
$dataSource = $isPost ? $_POST : $_GET;

if ($formSubmitted) {
    $firstname  = $dataSource['firstname']  ?? '';
    $middlename = $dataSource['middlename'] ?? '';
    $lastname   = $dataSource['lastname']   ?? '';
    $dob        = $dataSource['dob']        ?? '';
    $address    = $dataSource['address']    ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="GET_POST.css">

    <title><?= $formSubmitted ? "Data Received" : "Forms Demo"; ?></title>
</head>
<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col col-md-4">

                <?php if (!$formSubmitted): ?>
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Type first name...">
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Type middle name...">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Type last name...">
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Type address...">
                        </div>
                        
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="submit" name="submit_get" formmethod="get" class="btn btn-pink w-100">Display GET</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" name="submit_post" formmethod="post" class="btn btn-outline-pink w-100">Display POST</button>
                            </div>
                        </div>
                    </form>

                <?php else: ?>
                    <div class="card p-4 shadow-sm">
                        <h4 class="mb-3 text-pink">
                            Submitted via: <span class="badge bg-secondary"><?= $isPost ? 'POST' : 'GET'; ?></span>
                        </h4>
                        <hr>
                        <p><strong>FIRST NAME:</strong> <?= htmlspecialchars($firstname); ?></p>
                        <p><strong>MIDDLE NAME:</strong> <?= htmlspecialchars($middlename); ?></p>
                        <p><strong>LAST NAME:</strong> <?= htmlspecialchars($lastname); ?></p>
                        <p><strong>DATE OF BIRTH:</strong> <?= htmlspecialchars($dob); ?></p>
                        <p><strong>ADDRESS:</strong> <?= htmlspecialchars($address); ?></p>
                        <hr>
                        <a href="?" class="btn btn-pink w-100">Go Back</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>