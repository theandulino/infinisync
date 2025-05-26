<?php

include_once '../../data/header.php';
include_once '../../data/db.php';

if (isset($_SESSION['username'])) {
    header('Location: /account');
    exit;
}

$db = new mysqli($host, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (!empty($email) && !empty($username) && !empty($password) && !empty($confirm_password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($password === $confirm_password) {
                $query = "SELECT * FROM users WHERE username = ? OR email = ?";
                $stmt = $db->prepare($query);
                $stmt->bind_param('ss', $username, $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 0) {
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                    $insert_query = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
                    $insert_stmt = $db->prepare($insert_query);
                    $insert_stmt->bind_param('sss', $email, $username, $hashed_password);

                    if ($insert_stmt->execute()) {
                        header('Location: /account/login');
                        exit;
                    } else {
                        $error = "Error registering user. Please try again.";
                    }
                } else {
                    $error = "Username or email already exists.";
                }
            } else {
                $error = "Passwords do not match.";
            }
        } else {
            $error = "Invalid email address.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<div class="register-container">
    <h2>Register</h2>
    <?php if (isset($error)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>