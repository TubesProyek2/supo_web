<?php include "header.php" ?>

                        <?php echo $this->session->flashdata('notif'); ?>
                        <table width="644" border="0">
                            <tr>
                                <td width="63" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/berita2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Kelola Komentar</h1></td>
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

                        <table width='1040' border='1' bo cellspacing='0' cellpadding='0'>
                            <tr>
                                <p align='center'><th width='10%' bgcolor='#8a9cae'>Kode Komentar</th></p>
                                <p align='center'><th width='5%' bgcolor='#8a9cae'>Kode Berita</th></p>
                                <p align='center'><th width='10%' bgcolor='#8a9cae'>Nama</th></p>
                                <p align='center'><th width='10%' bgcolor='#8a9cae'>Email</th></p>
                                <p align='center'><th width='30%' bgcolor='#8a9cae'>Komentar</th></p>
                                <p align='center'><th width='5%' bgcolor='#8a9cae'>Tanggal</th></p>
                                <p align='center'><th width='10%' bgcolor='#8a9cae'>Status</th></p>
                                <p align='center'><th width='5%' bgcolor='#8a9cae'>Hapus</th></p>
                            </tr>
                            
<?php foreach ($list as $l) { ?>
                                
                            <tr>
                                <td><?php echo $l->id_comment ?></td>
                                <td><?php echo $l->id_news ?></td>
                                <td><?php echo $l->name ?></td>
                                <td><?php echo $l->email ?></td>
                                <td><?php echo $l->comment ?></td>
                                <td><?php echo date("d/m/Y", strtotime($l->date)) ?></td>
                                <td align='center' >
                                    <?php
                                        if($l->status == "BUKAN SPAM")
                                        { echo $l->status; }
                                        else
                                        { echo "<a href='".site_url('comment/stat/'.$l->id_comment)."'>KONFIRMASI</a>"; }
                                    ?>
                                    
                                </td>
                                <td align='center'>
                                    <a onClick='return tanya()' href='<?php echo site_url('comment/delete/'.$l->id_comment) ?>'>
                                        <img src='<?php echo base_url('assets/') ?>images/del2.png' width='20' height='20' alt='' />
                                    </a>
                                </td>
                            </tr>

<?php } ?>

                        </table>
                        </br></br>

<?php include "footer.php" ?>