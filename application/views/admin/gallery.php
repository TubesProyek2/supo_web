<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <form action="<?php echo site_url('gallery/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="533" height="237" border="0">
                        <tr>
                            <td width="145" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/galeri2.png" width="70" height="70" /></td>
                            <td colspan="2"><h1>Tambah Galeri</h1></td>
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
                                    <th valign="top">Gambar</th>
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
                                    <th valign="top">Keterangan</th>
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
                                    <td><a href="<?php echo site_url('admin/gallery') ?>">&lt;&lt; Batal</a></td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label for="textfield3">
                                        <input type="submit" name="button" id="button" value="Save" />
                                        <input type="reset" value="Reset" />
                                        </label>
                                    </td>
                                    <td width="67">
                                        <div align="right"></div>
                                    </td>
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
                                <h2><strong>Edit Data Gambar</strong></h2>
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
                                        <td width="259"><a href="<?php echo site_url('admin/gallery') ?>">&lt;&lt; Batal</a></td>
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
                                <td width="63" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/galeri2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Kelola Galeri</h1></td>
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

                        <table width='1040' border='1' >
                        <tr>
                            <p align='center'><th bgcolor='#8a9cae'>ID Gambar</th></p>
                            <p align='center'><th bgcolor='#8a9cae'>Gambar</th></p>
                            <p align='center'><th bgcolor='#8a9cae'>Keterangan</th></p>
                            <p align='center'><th bgcolor='#8a9cae'>Edit</th></p>
                            <p align='center'><th bgcolor='#8a9cae'>Hapus</th></p>
                        </tr>

    <?php foreach ($list as $l) { ?>

                        <tr>
                            <td><?php echo $l->id_photo ?></td>
                            <td align='center'><img src='<?php echo base_url('assets/foto/'.$l->photo) ?>' width='300' height='200' /></td>
                            <td><?php echo $l->description ?></td>
                            <td align='center' >
                                <a href='<?php echo site_url('gallery/update/'.$l->id_photo) ?>'>
                                    <img src='<?php echo base_url('assets/') ?>images/edit2.png' width='20' height='20' alt=''/>
                                </a>
                            </td>
                            <td align='center'>
                                <a onClick='return tanya()' href='<?php echo site_url('gallery/delete/'.$l->id_photo) ?>'>
                                    <img src='<?php echo base_url('assets/') ?>images/del2.png' width='20' height='20' alt='' />
                                </a>
                            </td>
                        </tr>

    <?php } ?>

                        </table>
                        </br></br>
                        <p><a href="<?php echo site_url('gallery/create') ?>">Tambah Gambar  >></a></p>

<?php } ?>
                        
<?php include "footer.php" ?>