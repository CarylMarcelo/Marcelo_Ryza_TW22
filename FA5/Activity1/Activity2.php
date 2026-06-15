<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = isset($_POST['firstname_input']) ? trim($_POST['firstname_input']) : '';
    $middlename = isset($_POST['middlename_input']) ? trim($_POST['middlename_input']) : '';
    $lastname = isset($_POST['lastname_input']) ? trim($_POST['lastname_input']) : '';

    if (!empty($firstname)) setcookie("firstname", $firstname, time() + 10, "/");
    if (!empty($middlename)) setcookie("middlename", $middlename, time() + 20, "/");
    if (!empty($lastname)) setcookie("lastname", $lastname, time() + 30, "/");
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2 - Cookies Dashboard</title>
    
    <link rel="stylesheet" href="Activity2.css">
</head>
<body>

<div class="container">
    <h2>Cookie Expiration Tracker</h2>
    
    <div class="input-form">
        <h3>Set Cookie Values</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
                <label for="firstname_input">First Name:</label>
                <input type="text" id="firstname_input" name="firstname_input" required>
            </div>
            <div class="form-group">
                <label for="middlename_input">Middle Name:</label>
                <input type="text" id="middlename_input" name="middlename_input" required>
            </div>
            <div class="form-group">
                <label for="lastname_input">Last Name:</label>
                <input type="text" id="lastname_input" name="lastname_input" required>
            </div>
            <button type="submit" class="submit-btn">Save Cookies</button>
        </form>
    </div>

    <div class="meta-info">
        <span>Active Session Monitoring</span>
        <button class="refresh-btn" onclick="window.location.reload();">🔄 Check Status</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Cookie Name</th>
                <th>Value</th>
                <th>Lifespan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>firstname</strong></td>
                <td><?php echo isset($_COOKIE['firstname']) ? htmlspecialchars($_COOKIE['firstname']) : '<em>None</em>'; ?></td>
                <td>10s</td>
                <td>
                    <?php if (isset($_COOKIE['firstname'])): ?>
                        <span class="badge active">Active</span>
                    <?php else: ?>
                        <span class="badge expired">Expired / Not Set</span>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td><strong>middlename</strong></td>
                <td><?php echo isset($_COOKIE['middlename']) ? htmlspecialchars($_COOKIE['middlename']) : '<em>None</em>'; ?></td>
                <td>20s</td>
                <td>
                    <?php if (isset($_COOKIE['middlename'])): ?>
                        <span class="badge active">Active</span>
                    <?php else: ?>
                        <span class="badge expired">Expired / Not Set</span>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td><strong>lastname</strong></td>
                <td><?php echo isset($_COOKIE['lastname']) ? htmlspecialchars($_COOKIE['lastname']) : '<em>None</em>'; ?></td>
                <td>30s</td>
                <td>
                    <?php if (isset($_COOKIE['lastname'])): ?>
                        <span class="badge active">Active</span>
                    <?php else: ?>
                        <span class="badge expired">Expired / Not Set</span>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>