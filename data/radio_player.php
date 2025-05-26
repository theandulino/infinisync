<?php
// radio_player.php

// Icecast server details
$icecastUrl = "https://stream.rcast.net/72476";
$metadataUrl = "https://stream.rcast.net/72476"; // Replace with your Icecast server's status URL

// Fetch metadata from Icecast server
function getMetadata() {
    global $metadataUrl;
    $metadata = json_decode(file_get_contents($metadataUrl), true);
    $source = $metadata['icestats']['source'] ?? null;

    return [
        'title' => $source['title'] ?? 'Unknown Title',
        'artist' => $source['artist'] ?? 'Unknown Artist',
        'artwork' => $source['artwork'] ?? 'default-artwork.jpg', // Replace with a default image if artwork is unavailable
    ];
}

if (isset($_GET['ajax'])) {
    echo json_encode(getMetadata());
    exit;
}

$metadata = getMetadata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Player</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .player {
            margin-top: 50px;
        }
        .artwork {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .info {
            margin-top: 20px;
        }
    </style>
    <script>
        function refreshMetadata() {
            fetch('radio_player.php?ajax=1')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('title').textContent = data.title;
                    document.getElementById('artist').textContent = data.artist;
                    document.getElementById('artwork').src = data.artwork;
                })
                .catch(error => console.error('Error fetching metadata:', error));
        }

        setInterval(refreshMetadata, 10000); // Refresh every 10 seconds
    </script>
</head>
<body>
    <div class="player">
        <audio controls autoplay>
            <source src="<?php echo $icecastUrl; ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="info">
            <img id="artwork" src="<?php echo $metadata['artwork']; ?>" alt="Artwork" class="artwork">
            <h2 id="title"><?php echo htmlspecialchars($metadata['title']); ?></h2>
            <h3 id="artist"><?php echo htmlspecialchars($metadata['artist']); ?></h3>
        </div>
    </div>
</body>
</html>