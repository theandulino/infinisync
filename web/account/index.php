<?php
include_once '../data/header.php';
include_once '../data/sidebar_account.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: /account/login');
    exit();
}


?>
<style>
    .content {
        margin-left: 270px;
        padding: 20px;
    }
    .content .well {
        box-shadow: none;
        border: none;
        background-color: transparent;
    }
</style>
<div class="content ">
    <div class="login-container">
        <br>
        <br>

        <h2>Account</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" disabled>
        </div>

        <div class="form-group">
            <a href="/account/logout">Logout</a>
        </div>
    </div>
