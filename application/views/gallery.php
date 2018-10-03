<?php include('header.php') ?>

    <div id="content">
        <h3>Gallery</h3>
        <p><a target="_blank" href="<?php echo base_url('assets/')?>images/Mapssupo.png">
        <img src="<?php echo base_url('assets/')?>images/Mapssupo.png" width="490" height="340"></a></p>

    <?php foreach ($list as $l) { ?>

    <div class="img">
        <a target="_blank" href="<?php echo base_url('assets/foto/'.$l->photo)?>">
            <img src="<?php echo base_url('assets/foto/'.$l->photo)?>" alt="Candi Supo" width="170" height="130">
        </a>
        <div class="desc" ><?php echo $l->description ?></div>
    </div>

    <?php } ?>

    </div>
    <div class="fb-comments" data-width="500" data-href="" data-numposts="5" data-colorscheme="light"></div>
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