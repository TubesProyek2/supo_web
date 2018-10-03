<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <form action="<?php echo site_url('admin/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="533" height="237" border="0">
                        <tr>
                            <td width="145" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/admin2.png" width="70" height="70" /></td>
                            <td colspan="2"><h1>Tambah Admin</h1></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td height="40" colspan="3"></td>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <tr>
                                    <th valign="top">Nama </th>
                                    <th>:</th>
                                    <td><input type="text" size=40 class="inp-form" name="name" required pattern="[a-zA-Z]{3,20}" /></td>
                                </tr> 
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th valign="top">Username </th>
                                    <th>:</th>
                                    <td><input type="text" size=40 class="inp-form" name="username" required pattern="{3,15}" /></td>
                                </tr>
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th valign="top">Password</th>
                                    <th>:</th>
                                    <td><input type="password" size=40 class="inp-form" name="password" required pattern="{3,20}" /></td>
                                </tr> 
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th valign="top">Email</th>
                                    <th>:</th>
                                    <td><input type="text" size=40 class="inp-form" name="email" required pattern="{3,30}" /></td>
                                    <td></td>
                                </tr> 
                                <tr><td height="23" colspan="3">&nbsp;</td></tr>
                                <tr>
                                    <td><a href="<?php echo site_url('admin/admin') ?>">&lt;&lt; Batal</a></td>
                                    <td>&nbsp;</td>
                                    <td><label for="textfield3">
                                        <input type="submit" name="button" id="button" value="Save" />
                                        <input type="reset" value="Reset" />
                                    </label></td>
                                    <td width="67"><div align="right"></div></td>
                                </tr>
                            </tr>
                        </tr>
                        </table>
                        </form>

<?php } elseif ($page == 'update') { ?>

                        <style type="text/css">#box{ width:300px;}</style>

                        <fieldset>
                        <div style="width:300px; height:auto; margin-left:20px;">
                        <form action="<?php echo site_url('admin/update/'.$data->id_admin) ?>" method="POST" enctype="multipart/form-data">
                        <table width="836" height="237" border="0">
                        <tr>
                            <td colspan="3"><div align="center">
                                <h2><strong>Edit Data Admin</strong></h2>
                                <hr size="2" width="600px" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td width="189" height="23">&nbsp;</td>
                            <td width="3">&nbsp;</td>
                            <td width="622">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kode Admin</td>
                            <td>:</td>
                            <td>
                                <input type="text" size=40  name="id_admin" value="<?php echo $data->id_admin ?>" readonly required >
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input type="text" size=40  name="name" value="<?php echo $data->name ?>" required pattern="[a-zA-Z]{3,20}" >
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Username </td>
                            <td>:</td>
                            <td>
                                <input type="text" size=40  name="username" value="<?php echo $data->username ?>" required pattern="{3,15}" >
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Password </td>
                            <td>:</td>
                            <td>
                                <input type="password" size=40  name="password" value="<?php echo $data->password ?>" required pattern="{3,20}" >
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Email </td>
                            <td>:</td>
                            <td>
                                <input type="text"  size=40 name="email" value="<?php echo $data->email ?>" required pattern="{3,20}" >
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>   
                        <tr>
                            <td>
                                <div align="right">
                                <p>&nbsp;</p>
                                <table width="204" border="0">
                                <tr>
                                    <td width="259"><a href="<?php echo site_url('admin/admin') ?>">&lt;&lt; Batal</a></td>
                                    <td width="119"><input type="submit" name="button" id="button" value="Update" /></td>
                                </tr>
                                </table>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        </table>
                        </form>
                        </div>
                        </fieldset>

<?php } else { ?>

                        <?php echo $this->session->flashdata('notif'); ?>
                        <table width="644" border="0">
                            <tr>
                                <td width="63" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/admin2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Kelola Admin</h1></td>
                            </tr>
                            </br>	      
                        </table>
                                    
                        <script type="text/javascript">
                        function tanya ()
                        {
                            if (confirm ('Anda yakin akan menghapus data ini??'))	
                            { return true; }
                            else
                            { return false; }
                        }
                        </script>
                        
                        <table width='1040'  border='1' style=''>
                            <tr>
                                <p align='center'><th bgcolor='#8a9cae'>Kode Admin</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Nama</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Username</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Password</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Email</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Edit</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Hapus</th></p>
                            </tr>
		
    <?php foreach ($list as $l) { ?>
			
			                <tr>
                                <td><?php echo $l->id_admin ?></td>
                                <td><?php echo $l->name ?></td>
                                <td><?php echo $l->username ?></td>
                                <td><?php echo $l->password ?></td>
                                <td><?php echo $l->email ?></td>
				                <td align='center' >
				                    <a href='<?php echo site_url('admin/update/'.$l->id_admin) ?>'>
				                        <img src='<?php echo base_url('assets/') ?>images/edit2.png' width='20' height='20' alt=''/>
                                    </a>
				                </td>
				                <td align='center'>
				                    <a onClick='return tanya()' href='<?php echo site_url('admin/delete/'.$l->id_admin) ?>'>
				                        <img src='<?php echo base_url('assets/') ?>images/del2.png' width='20' height='20' alt='' />
				                    </a>
                                </td>
			                </tr>

    <?php } ?>

			            </table>
                        </br></br>
                        <p><a href="<?php echo site_url('admin/create') ?>">Tambah Admin   >></a></p>

<?php } ?>

<?php include "footer.php" ?>