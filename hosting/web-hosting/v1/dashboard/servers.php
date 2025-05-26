<?php
include_once '../../../../data/header.php';
include_once '../../../../data/sidebar_dashboard.php';
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
        <div class="col-sm-5">
            <div class="well">
                <h4>Deine Seiten</h4>
                <a href="/site/example">Example</a>
                <a href="/files.php" style="float:right;">Upload Files</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="well">
                <h4>Deine Anfragen</h4>
                <p>Du hast keine Anfragen</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <div class="well">
                <h2>Anfragen</h2>
                <p>Über phpmyadmin einrichten!</p>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>URL</th>
                            <th>Pass</th>
                            <th>Infos</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>Example Site</td>
                            <td>astner.andreas@gmx.at</td>
                            <td>/example2</td>
                            <td>********** <a href="#">Show Password</a></td>
                            <td>Basic</td>
                            <td>theandulino</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>