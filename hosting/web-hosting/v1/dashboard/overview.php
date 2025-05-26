<?php
include_once '../../../../data/header.php';
include_once '../../../../data/sidebar_dashboard.php';

$timestamp = "2023-11-16 00:00:00"; // Example timestamp
// Convert MySQL timestamp to Unix timestamp
$timestampUnix = strtotime($timestamp);
// Get the current Unix timestamp
$currentUnix = time();
// Calculate the initial difference in seconds
$secondsDifference = $currentUnix - $timestampUnix + 3600;
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
<div class="content" style="margin-left: 270px; padding: 20px;">
<div class="col-sm-9">
    <div class="well">
        <h4>InfiniSync Dashboard</h4>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="well">
                <h4>Nutzer</h4>
                <p>10 Nutzer diesen Monat</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Seiten</h4>
                <p>1/10</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Daten</h4>
                <p>13 MB</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Server Uptime</h4>
                <p>Server has been up for:  <span id="time-difference">
        <?php
        // Manually format the time difference to avoid 24-hour rollover
        $hours = floor($secondsDifference / 3600);
        $minutes = floor(($secondsDifference % 3600) / 60);
        $seconds = $secondsDifference % 60;

        printf('%02d:%02d:%02d', $hours, $minutes, $seconds);
        ?>
    </span></p>
            </div>
        </div>
    </div>
    
</div>
</div>
 <script>
        // Initialize the seconds difference from PHP
        let secondsDifference = <?php echo $secondsDifference; ?>;

        // Function to format seconds into h:mm:ss
        function formatTime(seconds) {
            const hours = Math.floor(seconds / 3600); // Total hours, no 24-hour rollover
            const minutes = Math.floor((seconds % 3600) / 60); // Minutes
            const remainingSeconds = seconds % 60; // Remaining seconds

            return (
                String(hours).padStart(2, '0') + ':' +
                String(minutes).padStart(2, '0') + ':' +
                String(remainingSeconds).padStart(2, '0')
            );
        }

        // Function to update the displayed time every second
        function updateTime() {
            // Increment the difference by 1 second
            secondsDifference++;

            // Update the display
            document.getElementById('time-difference').textContent = formatTime(secondsDifference);
        }

        // Start the timer to update every second
        setInterval(updateTime, 1000);
    </script>
