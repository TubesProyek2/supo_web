<?php include "header.php" ?>

<?php if ($page == 'create') { ?>

                        <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d F Y"); ?>

                        <form action="<?php echo site_url('news/create') ?>" method="post" enctype="multipart/form-data">
                        <table width="1000" height="237" border="0">
                        <tr>
                            <td width="100" rowspan="1"><img src="<?php echo base_url('assets/')?>images/icon/berita2.png" width="70" height="70" /></td>
                            <td colspan="2"><h1>Create News</h1></td>
                        </tr>

                        <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Title</th>
                                <th width="30">:</th>
                                <td><input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" required pattern="{5,100}"></td>
                            </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Headline</th>
                                <th width="30">:</th>
                                <td><textarea class="form-control" rows="3" id="headline" name="headline" placeholder="Masukkan Headline" required pattern="{5,100}" ></textarea></td>
                    
                            </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">About</th>
                                <th width="30">:</th>
                                <td><textarea class="jos" id="about" name="about" ></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><font color="red"> *Enter News Content Here</font></td>
                            </tr>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                            <tr>
                                <th valign="top">Photo</th>
                                <th>:</th>
                                <td>
                                    <input type="file" class="inp-form" id="photo" name="photo" required />
                                    <?php echo $this->upload->display_errors() ?>
                                </td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                            <tr>
                                <th valign="top">Author</th>
                                <th>:</th>
                                <td><input type="text" class="form-control" name="author" value="<?php echo $this->session->name ?>" readonly required></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Date</th>
                                <th>:</th>
                                <td><input type="text" class="form-control" name="date" value=<?php echo $tgl; ?> readonly required></td>
                                <td></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <td><a class="btn btn-primary" href="<?php echo site_url('admin/news') ?>">Back</a></td>
                                <td>&nbsp;</td>
                                <td><label for="textfield3">
                                    <button type="submit" name="button" class="btn btn-info">SAVE</button>
                                    <button type="reset" name="button" class="btn btn-danger">RESET</button>
                                </label></td>
                                <td width="67"><div align="right"></div></td>
                            </tr>
                        </table>
                        </form>

<?php } elseif ($page == 'update') { ?>

                        <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d F Y"); ?>

                        <style type="text/css">#box{ width:300px;}</style>

                        <fieldset>
                        <div style="width:300px; height:auto; margin-left:20px;">
                        <form action="<?php echo site_url('news/update/'.$data->id_news) ?>" method="POST" enctype="multipart/form-data">
                        <table width="836" height="237" border="0">
                        <tr>
                            <td colspan="3">
                                <div align="center">
                                    <h2><strong>Edit News Data</strong></h2>
                                    <hr size="2" width="600px" />
                                </div>
                            </td>
                        </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">ID News</th>
                                <th width="30">:</th>
                                <td><input type="text" class="form-control" id="id_news" name="id_news" value="<?php echo $data->id_news ?>" readonly required></td>
                            </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Title</th>
                                <th width="30">:</th>
                                <td><input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title ?>" required></td>
                            </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">Headline</th>
                                <th width="30">:</th>
                                <td><textarea class="form-control" rows="3" id="headline" name="headline"><?php echo $data->headline ?></textarea></td>
                            </tr>

                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
                            <tr>
                                <th valign="top">About</th>
                                <th width="30">:</th>
                                <td><textarea class="jos" id="about" name="about" ><?php echo $data->about ?></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><font color="red"> *Enter News Content Here</font></td>
                            </tr>
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                            <tr>
                                <th valign="top">Gallery Lama</th>
                                <th>:</th>
                                <td>
                                    <img src='<?php echo site_url('assets/foto/'.$data->photo) ?>' width='100' height='100' />
                                </td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                            <tr>
                                <th valign="top">Gallery Baru</th>
                                <th>:</th>
                                <td>
                                    <input type="file" class="form-control" id="photo" name="photo" required />
                                    <?php echo $this->upload->display_errors() ?>
                                </td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>
 
                            <tr>
                                <th valign="top">Author</th>
                                <th>:</th>
                                <td><input type="text" class="form-control" name="author" value="<?php echo $this->session->name ?>" readonly required></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                            <tr>
                                <th valign="top">Date</th>
                                <th>:</th>
                                <td><input type="text" class="form-control" name="date" value=<?php echo $tgl; ?> readonly required></td>
                                <td></td>
                            </tr> 
                            <tr><td height="23" colspan="3">&nbsp;</td></tr>

                        <tr>
                            <td>
                                <div align="right">
                                <p>&nbsp;</p>
                                <table width="204" border="0">
                                    <tr>
                                        <div>
                                            <a class="btn btn-primary" href="<?php echo site_url('admin/news') ?>">Back</a></td>
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
                                <td width="63" rowspan="2"><img src="<?php echo site_url('assets/') ?>images/icon/berita2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Kelola News</h1></td>
                            </tr>	      
                        </table>

                        <hr>
                            <a href="<?php echo site_url()?>news/create"><button type="button" class="btn btn-warning" "btn-lg">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;
                            Create News</button></a>
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
                            <th>ID News</th>
                            <th>Title</th>
                            <th>About</th>
                            <th>Photo</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>&nbsp;Action</th>
                        </thead>

                        <?php foreach ($list as $n) { ?>

                            <tr>
                                <td><?php echo $n->id_news ?></td>
                                <td><?php echo $n->title ?></td>
                                <td><?php echo $n->about ?></td>
                                <td><img src='<?php echo base_url('assets/foto/'.$n->photo) ?>' width='120' height='100' /></td>
                                <td><?php echo $n->author ?></td>
                                <td><?php echo date("d F Y", strtotime($n->date)) ?></td>
                                <td>
                                    <a href='<?php echo site_url('news/update/'.$n->id_news) ?>'>
                                        <button type="button" name="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        &nbsp;Update </button>
                                    <a onClick='return tanya()' href='<?php echo site_url('news/delete/'.$n->id_news) ?>'>
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