<?php include('header.php') ?>
    
    <div id="content">
  
    <h3><?php echo $data->title ?></h3><br>
        <img src="<?php echo base_url('assets/foto/'.$data->photo)?>" style="height:300px;width:300px" class="img-polaroid">
        <br/>
        <p><?php echo $data->about ?></p>
        <div class="pull-right">
            <strong>Tanggal : <?php echo $data->date ?> | Posted By : <?php echo $data->author ?></strong>
        </div>
   
    </div>

    <div class="fb-comments" data-width="500" data-href="http://localhost/web_candi/gallery.php" data-numposts="5" data-colorscheme="light"></div>
    <div id="footer"></div>
</div>
</body>
</center>
<div id="fb-root"></div>
<script>
(function(d, s, id)
{
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</html>