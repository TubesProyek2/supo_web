<?php include('header.php') ?>

    <div id="content">

        <h3>Candi Songgoriti Satu-satunya Candi di Kota Batu</h3>    
        
        <p>
            <img src="<?php echo base_url('assets/')?>images/Candi Songgoriti-1.jpg" width="180" height="140" align="left">
            Candi Supo atau yang lebih sering disebut Candi Songgoriti terletak berdekatan dengan Taman Rekreasi Tirta Nirwana, Songgoriti. Lebih tepatnya berada di dalam kompleks Pemandian Air Panas Alami (PAPA) dan Hotel Songgoriti. Namun keberadaan candi ini tidak banyak diketahui oleh para wisatawan dari luar Kota Batu sebab daya tarik utama di area ini adalah Taman Rekreasi Songgoriti dan bukan Candi Songgoriti.
        </p>
        <p>Candi ini ditemukan kali pertama oleh seorang arkeolog Belanda bernama Van I Isseldijk tahun 1799 M, kemudian pelaksanaan renovasinya dilakukan oleh arkeolog Belanda lainnya yaitu Rigg tahun 1849 M dan Brumund pada tahun 1863 M. Tahun 1902 M, Knebel melakukan inventarisasi situs Candi Songgoriti dan dilanjutkan dengan renovasi besar-besaran tahun 1921 M. Renovasi terakhir dilaksanakan pada tahun 1938. </p>
        <p><img src="<?php echo base_url('assets/')?>images/Candi Songgoriti-2.jpg" width="360" height="160" align="center"></p>
        <br>
        <p><img src="<?php echo base_url('assets/')?>images/Candi Songgoriti-3.jpg" width="360" height="160" align="center"></p>
        
        <table width="429">

        <?php foreach ($list as $l) { ?>

            <tr>
                <td>
                <br><br>
                    <table class="table">
                        <tr>
	                        <td colspan="2"> 
	                            <a href="<?php echo site_url('home/detail/'.$l->id_news) ?>">
                                    <h4><?php echo $l->title ?><br></h4>
                                </a>
                                <strong>Tanggal : <?php echo $l->date ?> | Posted By : <?php echo $l->author ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">
                                <img src="<?php echo base_url('assets/foto/'.$l->photo)?>" style="height:100px;width:100px" class="img-polaroid">
                            </td>
                            <td align="left">
                                <p><?php echo $l->headline ?>
                                    <a href="<?php echo site_url('home/detail/'.$l->id_news) ?>" class="btn-link">Selengkapnya ...</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        <?php } ?>

        </table>
    </div>

<?php include('footer.php') ?>