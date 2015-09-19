<?php
date_default_timezone_set('Asia/dacca')
?>
<html>
    <head>
        <title>After Login</title>
        <style type="text/css">
            body{
                background-color: #ffffff;
                color: #000000;
            }
            #main_wrapper{
                float: left;
                height: 400px;
                width: 600px;
                background-color: #cccccc;
                margin-left: 350px;
                margin-top: 100px;
            }
            #main_wrapper h2{
                text-align: center;
            }
            #main_wrapper table{
                margin-top: 50px;
                font-size: 20px;
            }
            #logout{
                float: left;
                margin-left: 400px;
            }
        </style>
    </head>
    <body>
        <div id="main_wrapper">
            <h2>After Login Page</h2>
            <?php
//            echo $login_time = $this->session->userdata('login_time'); 
//            echo $time = time();
//            echo $_SESSION['EXPIRES'];
            ?>
            <div id="logout">
                <a href="after_login.php">Home</a>
                <a href="<?php echo base_url(); ?>admin/logout">Logout(<?php echo $this->session->userdata('admin_name'); ?>)</a>
            </div>
        </div>
    </body>
</html>
