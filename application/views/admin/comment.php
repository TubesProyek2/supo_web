<?php include "header.php" ?>

                        <?php echo $this->session->flashdata('notif'); ?>
                        <table width="644" border="0">
                            <tr>
                                <td width="63" rowspan="2"><img src="<?php echo base_url('assets/')?>images/icon/berita2.png" width="70" height="70" /></td>
                                <td width="521"><h1>Manage Comment</h1></td>
                            </tr>
                            </br>	      
                        </table>

                        <hr>
                        
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
                            <th>ID Comment</th>
                            <th>ID News</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>&nbsp;Action</th>
                        </thead>
                            
                        <?php foreach ($list as $c) { ?>
                                
                            <tr>
                                <td><?php echo $c->id_comment ?></td>
                                <td><?php echo $c->id_news ?></td>
                                <td><?php echo $c->name ?></td>
                                <td><?php echo $c->email ?></td>
                                <td><?php echo $c->comment ?></td>
                                <td><?php echo date("d/m/Y", strtotime($c->date)) ?></td>
                                <td>
                                    <?php
                                        if($c->status == "BUKAN SPAM")
                                        { echo $c->status; }
                                        else
                                        { echo "<a href='".site_url('comment/stat/'.$c->id_comment)."'>KONFIRMASI</a>"; }
                                    ?>
                                </td>
                                <td>
                                    <a onClick='return tanya()' href='<?php echo site_url('comment/delete/'.$c->id_comment) ?>'>
                                        <button type="button" name="button" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        &nbsp;Delete </button>
				                    </a>
                                </td>
                            </tr>

<?php } ?>

                        </table>
                        </br></br>

<?php include "footer.php" ?>