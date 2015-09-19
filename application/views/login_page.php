<?php
date_default_timezone_set("Asia/Dacca");
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Login</title>
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
        </style>
    </head>
    <body>
        <div id="main_wrapper">
            <h2>Login Page</h2>
            <form action="<?php echo base_url(); ?>login/check_login" method="post">
                <table align="center">
                    <?php
                    $meg = $this->session->userdata('message');
                    if (isset($meg)) {
                        echo $meg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                    <tr>
                        <td>Email : &nbsp;&nbsp;</td>
                        <td><input type="email" name="user_email_address" required></td>
                    </tr>
                    <tr>
                        <td>Password : &nbsp;&nbsp;</td>
                        <td><input type="password" name="user_password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="btn" value="login"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="<?php echo base_url(); ?>index.php/welcome/forget">Forget Password</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="index.php">Create Account</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>