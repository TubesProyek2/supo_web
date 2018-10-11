<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <form action="<?php echo site_url('gallery/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="533" height="237" border="0">
                        <tr>
                            <td width="145" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/galeri2.png" width="70" height="70" /></td>
                            <td colspan="2"><h1>Create Gallery</h1></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td height="40" colspan="3"></td>
                            <tr>
                                <td height="23" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="23" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <tr>
                                    <th valign="top">Photo</th>
                                    <th>:</th>
                                    <td>
                                        <input type="file" class="inp-form" style="padding:5px;" required name="photo"/>
                                        <?php echo $this->upload->display_errors() ?>
                                    </td>
                                </tr> 
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                <tr>
                                    <th valign="top">Description</th>
                                    <th>:</th>
                                    <td><input type="text" size=60 class="inp-form" name="description" required /></td>
                                </tr> 
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td height="23" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a class="btn btn-primary" href="<?php echo site_url('admin/news') ?>">Kembali</a></td>
                                    <td>&nbsp;</td>
                                    <td><label for="textfield3">
                                        <button type="submit" name="button" class="btn btn-info">SAVE</button>
                                        <button type="reset" name="button" class="btn btn-danger">RESET</button>
                                    </label></td>
                                    <td width="67"><div align="right"></div></td>
                                </tr>
                            </tr>
                        </table>
                        </form>

<?php } elseif ($page == 'update') { ?>

                        <style type="text/css">#box{ width:300px;}</style>

                        <fieldset>
                        <div style="width:300px; height:auto; margin-left:20px;">
                        <form action="<?php echo site_url('gallery/update/'.$data->id_photo) ?>" method="POST" enctype="multipart/form-data">
                        <table width="836" height="237" border="0">
                        <tr>
                            <td colspan="3"><div align="center">
                                <h2><strong>Edit Photo Data</strong></h2>
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
                            <td>Kode Gambar</td>
                            <td>:</td>
                            <td>
                                <input type="text"  name="id_photo" value="<?php echo $data->id_photo ?>" readonly>
                            </td>
                        </tr>                
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Gambar Lama </td>
                            <td>:</td>
                            <td><img src='<?php echo site_url('assets/foto/'.$data->photo) ?>' width='100' height='100' /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Gambar baru </td>
                            <td>:</td>
                            <td><input type="file" name="photo"/></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><input type="text"  size=60 name="description" value="<?php echo $data->description ?>" required ></td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right">
                                <p>&nbsp;</p>
                                <table width="204" border="0">
                                    <tr>
                                        <div>
                                            <a class="btn btn-primary" href="<?php echo site_url('admin/gallery') ?>">Back</a></td>
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
                                <td width="63" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/galeri2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Manage Gallery</h1></td>
                            </tr>
                        </br>	      
                        </table>

                        <hr>
                            <a href="<?php echo site_url()?>gallery/create"><button type="button" class="btn btn-warning" "btn-lg">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;
                            Create Gallery</button></a>
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
                            <th>ID Photo</th>
                            <th>Photo Name</th>
                            <th>Description</th>
                            <th>&nbsp;Action</th>
                        </thead>

                        <?php foreach ($list as $g) { ?>

                            <tr>
                                <td><?php echo $g->id_photo ?></td>
                                <td><img src='<?php echo base_url('assets/foto/'.$g->photo) ?>' width='300' height='200' /></td>
                                <td><?php echo $g->description ?></td>
                                <td>
                                    <a href='<?php echo site_url('gallery/update/'.$g->id_photo) ?>'>
                                        <button type="button" name="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        &nbsp;Update </button>
                                    <a onClick='return tanya()' href='<?php echo site_url('gallery/delete/'.$g->id_photo) ?>'>
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