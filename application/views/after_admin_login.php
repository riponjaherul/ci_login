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
                height: 600px;
                width: 850px;
                background-color: #cccccc;
                margin-left: 150px;
                margin-top: 10px;
            }
            #main_wrapper h2{
                text-align: center;
            }
            #main_wrapper table{
                margin-top: 50px;
                font-size: 20px;
            }
            #main_wrapper table{
                width: 600px;
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
            <div id="logout">
                <a href="after_login.php">Home</a>
                <a href="<?php echo base_url(); ?>admin/logout_admin">Logout(<?php echo $this->session->userdata('admin_name'); ?>)</a>
            </div>
            <table align="center">
                <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Total Login</th>
                </tr>
                <?php
                $all_admin = $this->login_model->get_all_admin();
                foreach ($all_admin as $value) {
                    
                ?>
                <tr>
                    <td ><a href="<?php base_url() ?>user_history/<?php echo $value->admin_id; ?>"><?php echo $value->admin_name; ?></a></td>
                    <td align="center"><?php echo $value->admin_email_address; ?></td>
                    <td align="center"><?php 
                        echo $total_login = $this->login_model->get_total_login($value->admin_email_address);
                    ?></td>
                </tr>
                <?php }  ?>
            </table>
        </div>
    </body>
</html>
