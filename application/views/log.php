<?php include('header.php') ?>

    <div id="content">
        <h3>Login</h3><br><br>    
        <center>
        <table width="399" border="0">
        <tr>
            <td height="400">&nbsp;</td>
            <td valign="top">
                <table width="100%" border="0" cellpadding="10" cellspacing="10">
                <form action="<?php echo site_url('log/in') ?>" method="post">
                    <tr>
                        <td><h4>Username</h4></td>
                        <td>:</td>
                        <td><input type="text"  class="login-inp" name="user"/></td>
                    </tr>
                    <tr>
                        <td><h4>Password</h4></td>
                        <td>:</td>
                        <td><input type="password"  class="login-inp" name="pass"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="button" value="LOGIN"/></td>
                    </tr>
                </form>
                </table>
            </td>
        </tr>
        </table>
        </center>
    </div>

<?php include('footer.php') ?>