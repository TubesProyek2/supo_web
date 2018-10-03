<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d/m/Y"); ?>

                        <form action="<?php echo site_url('news/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="1000" height="237" border="0">
                        <tr>
                            <td width="100" rowspan="1"><img src="<?php echo base_url('assets/')?>images/icon/berita2.png" width="70" height="70" /></td>
                            <td colspan="3"><h1>Tambah Berita</h1></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td height="40" colspan="3"></td>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Judul</th>
                                <th>:</th>
                                <td width="900"><input type="text" size=40 class="inp-form" name="title" required pattern=".{5,100}" ></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Headline</th>
                                <th>:</th>
                                <td width="100px"><textarea class="notes" name="headline" required pattern="{5,100}" ></textarea></td>
                            </tr>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Berita</th>
                                <th>:</th>
                                <td><textarea class="jos" name="about" ></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><font color="red"> *Ketik Berita Disini</font></td>
                            </tr>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Gambar</th>
                                <th>:</th>
                                <td>
                                    <input type="file" class="inp-form" style="padding:5px;" name="photo" required />
                                    <?php echo $this->upload->display_errors() ?>
                                </td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Penulis</th>
                                <th>:</th>
                                <td><input type="text" class="inp-form" name="author" value="<?php echo $this->session->name ?>" readonly /></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Tanggal</th>
                                <th>:</th>
                                <td><input type="text" class="inp-form" name="date" value=<?php echo $tgl; ?> readonly/></td>
                                <td></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <td><a href="<?php echo site_url('admin/news') ?>">&lt;&lt; Batal</a></td>
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
                        </table>
                        </form>

<?php } elseif ($page == 'update') { ?>

                        <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d/m/Y"); ?>

                        <style type="text/css">#box{ width:300px;}</style>

                        <fieldset>
                        <div style="width:300px; height:auto; margin-left:20px;">
                        <form action="<?php echo site_url('news/update/'.$data->id_news) ?>" method="POST" enctype="multipart/form-data">
                        <table width="836" height="237" border="0">
                        <tr>
                            <td colspan="3">
                                <div align="center">
                                    <h2><strong>Edit Data Berita</strong></h2>
                                    <hr size="2" width="600px" />
                                </div>
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
                            <td>ID Berita</td>
                            <td>:</td>
                            <td><input type="text" name="id_news" value="<?php echo $data->id_news ?>" readonly ></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td><input type="text" size=100 name="title"  value="<?php echo $data->title ?>"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Headline</td>
                            <td>:</td>
                            <td><input type="text" size=100 name="headline"  value="<?php echo $data->headline ?>"></td>
                        </tr>
                        <tr>
                            <td>Berita</td>
                            <td>:</td>
                            <td>
                                <textarea class="jos" name="about" width="100" height="1500" ><?php echo $data->about ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><font color="red"> *Edit berita disini</font></td>
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
                            <td>Gambar Baru </td>
                            <td>:</td>
                            <td><input type="file" name="photo" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Penulis </td>
                            <td>:</td>
                            <td><input type="text" name="author" value="<?php echo $this->session->name ?>" required ></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>Tanggal </td>
                            <td>:</td>
                            <td><input type="text" name="date" value=<?php echo $tgl; ?> readonly ></td>
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
                                        <td width="259"><a href="<?php echo site_url('admin/news') ?>">&lt;&lt; Batal</a></td>
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
                                <td width="63" rowspan="2"><img src="<?php echo site_url('assets/') ?>images/icon/berita2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Kelola Info</h1></td>
                            </tr>	      
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
                                <p align='center'><th bgcolor='#8a9cae'>Judul</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Headline</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Berita</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Gambar</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Penulis</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Tanggal</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Edit</th></p>
                                <p align='center'><th bgcolor='#8a9cae'>Hapus</th></p>
                            </tr>
                                
    <?php foreach ($list as $l) { ?>
                                    
                            <tr>
                                <td><?php echo $l->title ?></td>
                                <td><?php echo substr($l->headline,0,20) ?>... </td>
                                <td><?php echo substr($l->about,0,100) ?>... </td>
                                <td><img src="<?php echo base_url('assets/foto/'.$l->photo) ?>" width="100" height="100"></td>    
                                <td><?php echo $l->author ?></td>
                                <td><?php echo date("d/m/Y", strtotime($l->date)) ?></td>
                                <td align='center'>
                                    <a href='<?php echo site_url('news/update/'.$l->id_news) ?>'>
                                        <img src='<?php echo base_url('assets/') ?>images/edit2.png' width='20' height='20' alt=''/>
                                    </a>
                                </td>
                                <td align='center'>
                                    <a onClick='return tanya()' href='<?php echo site_url('news/delete/'.$l->id_news) ?>'>
                                        <img src='<?php echo base_url('assets/') ?>images/del2.png' width='20' height='20' alt='' />
                                    </a>
                                </td>
                            </tr>

    <?php } ?>

                        </table>
                        </br></br>
                        <p><a href="<?php echo site_url('news/create') ?>">Tambah Berita  >></a></p>

<?php } ?>

<?php include "footer.php" ?>