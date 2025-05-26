<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo '<div id="spinner" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
            <div style="border: 4px solid #f3f3f3; border-top: 4px solid #3498db; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite;"></div>
          </div>
          <style>
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
          </style>';
    echo '<script>
            setTimeout(function() {
                window.location.href = "overview.php";
            }, 2000);
          </script>';
    exit;
} else {
    header("Location: /account/login");
    exit;
}