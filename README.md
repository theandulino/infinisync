
## InfiniSync WebRepo

For security reasons, db.php is not included in the repo.
This is because this file includes Database relevant information and is not intended to the public.

## How to Install

You just need to download the repo and put it in your LAMB Stack.
You need to create this file:
   

     /data/db.php
And this content:

    <?php
    $host = '[Your MYSQL-Server]';
    $dbname = '[Your database]';
    $username = '[Your username]';
    $password = '[Your secure password]'; 
    
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$conn) {
    die("Database connection failed: "  .  mysqli_connect_error());
    }

You need to make one table:
![table](/data/%7B62E11C19-3379-4248-8C21-F7E51BFE082F%7D.png)

And thats it.
Please don't use it to mimic or distribute false information.
©2025 theandulino, InfiniSync
