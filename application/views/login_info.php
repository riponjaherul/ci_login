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
                <a href="<?php echo base_url(); ?>admin/super_admin">back</a>
                <a href="<?php echo base_url(); ?>admin/logout_admin">Logout(<?php echo $this->session->userdata('admin_name'); ?>)</a>
            </div>
            <?php
                $admin_id = $this->uri->segment(3,0);
                $single_admin_email = $this->login_model->get_single_admin_email($admin_id);
                $i = 0;
            ?>
            <table align="center">
                <br>Email Address : <?php echo $single_admin_email[0]->admin_email_address; ?>
                <tr>
                    <th>Serial</th>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                </tr>
                <?php
                $single_admin_data = $this->login_model->get_single_admin_data($single_admin_email[0]->admin_email_address);
                foreach ($single_admin_data as $value) {
                    
                ?>
                <tr>
                    <td align="center"><?php echo ++$i; ?></td>
                    <td align="center"><?php echo $value->login_time; ?></td>
                    <td align="center"><?php echo $value->logout_time; ?></td>
                </tr>
                <?php }  ?>
            </table>
        </div>
    </body>
</html>
