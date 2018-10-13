<?php include('header.php') ?>
    
    <div id="content">
  
        <h3><?php echo $data->title ?></h3><br>
        <img src="<?php echo base_url('assets/foto/'.$data->photo)?>" style="height:300px;width:300px" class="img-polaroid">
        <br/>
        <p><?php echo $data->about ?></p>

        <div class="pull-right">
            <strong>Tanggal : <?php echo date("d F Y", strtotime($data->date)) ?> | Posted By : <?php echo $data->author ?></strong>
        </div>
        <br>
        <hr>
        <h3 class="pull-left">Komentar</h3>
        <?php echo $this->session->flashdata('notif'); ?>
        <form action="<?php echo site_url('comment/create') ?>" method="post">
            <input type="hidden" name="id_news" value="<?php echo $data->id_news ?>">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nama..." required>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-mail..." required>
            </div>
            <div class="form-group">
                <textarea name="comment" rows="5" class="form-control" placeholder="Komentar..." required></textarea>
            </div>
            <div class="pull-left">
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
                <button type="reset" name="submit" class="btn btn-default">Reset</button>
            </div>
        </form>
        <br><hr>
        <b>-= Komentar-komentar =-</b>
        <?php foreach($datakom as $k) { ?>
        
            <p>
                <div class="text-left"><b><?php echo $k->name ?> (<?php echo $k->name ?>)</b></div>
                <div class="text-justify"><?php echo $k->comment ?></div>
                <div class="text-right"><i><?php echo date("d F Y", strtotime($k->date)) ?></i></div>
            </p>
        
        <?php } ?>

    </div>
    <br>
    <div class="fb-comments" data-width="500" data-href="http://localhost/web_candi/gallery.php" data-numposts="5" data-colorscheme="light"></div>
    <br>
    <div id="footer"></div>
</div>
</body>
</center>
<div id="fb-root"></div>
<!-- <script>
(function(d, s, id)
{
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script> -->
</html>