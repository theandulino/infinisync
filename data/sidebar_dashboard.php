<div class="dashboard">
    <div class="sidebar">
        <style>
            .sidebar {
                width: 250px;
                height: 100vh;
                background-color:rgb(253, 253, 253);
                color:rgb(22, 22, 22);
                position: fixed;
                top: 75px;
                left: 0;
                display: flex;
                flex-direction: column;
                padding: 20px;
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            }

            .sidebar-menu {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .sidebar-menu li {
                margin: 15px 0;
            }

            .sidebar-menu a {
                text-decoration: none;
                color:rgb(19, 19, 19);
                font-size: 16px;
                display: flex;
                align-items: center;
            }

            .sidebar-menu a i {
                margin-right: 10px;
                font-size: 18px;
                color: rgb(0, 153, 255);
            }

            .sidebar-menu a:hover {
                color: #3498db;
            }
        </style>
        <ul class="sidebar-menu">
            <li>
                <a href="/hosting/web-hosting/v1/dashboard/overview.php">
                    <i class="fas fa-tachometer-alt"></i> Overview
                </a>
            </li>
            <li>
                <a href="/hosting/web-hosting/v1/dashboard/servers.php">
                    <i class="fas fa-server"></i> Servers
                </a>
            </li>
            <li>
                <a href="/hosting/web-hosting/v1/dashboard/file-manager.php">
                    <i class="fas fa-folder"></i> File Manager
                </a>
            </li>
            <li>
                <a href="/hosting/web-hosting/v1/dashboard/server-status.php">
                    <i class="fas fa-cloud"></i> Server Status
                </a>
            </li>
        </ul>
    </div>