<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <form action="<?php echo site_url('admin/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="560" height="237" border="0">
                        <tr>
                            <td width="145" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/admin2.png" width="70" height="70" /></td>
                            <td colspan="2"><h1>Create Admin</h1></td>
                        </tr>
                        <tr><td height="23" colspan="3">&nbsp;</td></tr>
                        <tr>
                            <div>
                                <th valign="top">Nama </th>
                                <th width="30">:</th>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required pattern="[a-zA-Z\s]{3,20}"></td>
                            </div> 
                        </tr>
                        <tr>
                            <td height="23" colspan="3">&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <div>
                                <th valign="top">Username </th>
                                <th width="30">:</th>
                                <td><input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required pattern="{3,15}"></td>
                            </div>
                        </tr>
                        <tr>
                            <td height="23" colspan="3">&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <th valign="top">Password</th>
                            <th width="30">:</th>
                            <td><input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required pattern="{3,20}" /></td>
                        </tr> 
                        <tr>
                            <td height="23" colspan="3">&nbsp;</td>
                        </tr>

                        <tr>
                            <th valign="top">Email</th>
                            <th width="30">:</th>
                            <td><input type="text"  class="form-control" id="email" name="email" placeholder="Masukkan Email" required pattern="{3,30}" /></td>
                            <td></td>
                        </tr> 
                        <tr><td height="23" colspan="3">&nbsp;</td></tr>

                        <tr>
                            <td><a class="btn btn-primary" href="<?php echo site_url('admin/admin') ?>">Back</a></td>
                            <td>&nbsp;
                            <td><label for="textfield3">
                                <button type="submit" name="button" class="btn btn-info">SAVE</button>
                                <button type="reset" name="button" class="btn btn-danger">RESET</button>
                            </label></td>
                            <td width="67"><div align="right"></div></td>
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
                                <h2><strong>Edit Admin Data</strong></h2>
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
                            <td>Id Admin</td>
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
                                
                                <div>
                                    <a class="btn btn-primary" href="<?php echo site_url('admin/admin') ?>">Back</a></td>
                                    <button type="submit" name="button" class="btn btn-info">UPDATE</button>
                                </div>
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
                                <td width="500"><h1>Manage Admin</h1></td>
                            </tr>  
                        </table>

                        <hr>
                            <a href="<?php echo site_url()?>admin/create"><button type="button" class="btn btn-warning" "btn-lg">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;
                            Create Admin</button></a>
                        <hr>
                                    
                        <script type="text/javascript">
                        function tanya ()
                        {
                            if (confirm ('Anda yakin akan menghapus data ini??'))	
                            { return true; }
                            else
                            { return false; }
                        }
                        </script>
                        
                        <table class="table table-striped">
                        <thead>
                            <th>ID Admin</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>&nbsp;Action</th>
                        </thead>

                        <?php foreach ($list as $l) { ?>
			
			                <tr>
                                <td><?php echo $l->id_admin ?></td>
                                <td><?php echo $l->name ?></td>
                                <td><?php echo $l->username ?></td>
                                <td><?php echo $l->email ?></td>
				                <td>
                                    <a href='<?php echo site_url('admin/update/'.$l->id_admin) ?>'>
                                        <button type="button" name="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        &nbsp;Update </button>
				                    <a onClick='return tanya()' href='<?php echo site_url('admin/delete/'.$l->id_admin) ?>'>
                                        <button type="button" name="button" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        &nbsp;Delete </button>
				                    </a>
                                </td>
			                </tr>

                        <?php } ?>

			            </table>
                        </br></br>
<?php } ?>

<?php include "footer.php" ?>
