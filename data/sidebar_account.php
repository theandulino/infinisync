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
                <a href="/account/">
                    <i class="fa-solid fa-circle-user"></i> Overview
                </a>
            </li>
            <li>
                <a href="/account/">
                    <i class="fas fa-gear"></i> Settings
                </a>
            </li>
            <li>
                <a href="/account/logout">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>
    </div>