<!DOCTYPE html>
<html>
<body>
    <div class="hero-slider" data-flickity='{ "wrapAround": true }'><!-- Menggunakan plugin css dari flickity -->
        <div class="carousel-cell" style="background-image:url(<?php echo base_url('assets/img/picture1.png')?>);">
            <div class="overlay">
            </div>
            <div class="inner">
                <h3 class="subtitle">KATA PIJAR</h3>
                <h2 class="title">Buat Impianmu jadi Kenyataan!</h2>
                <a href="<?php echo site_url('home/subjek')?>" class="btn">Pelajari</a>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url(<?php echo base_url('assets/img/picture2.png')?>);">
            <div class="overlay">
            </div>
            <div class="inner">
                <h3 class="subtitle">Metode Berbasis Video</h3>
                <h2 class="title">Kesuksesanmu adalah Prioritas Kami</h2>
                <a href="#" class="btn">Pelajari</a>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url(<?php echo base_url('assets/img/picture3.png')?>);">
            <div class="overlay">
            </div>
            <div class="inner">
                <h3 class="subtitle">Tunggu apa lagi?</h3>
                <h2 class="title">Gabung Sekarang!</h2>
                <a href="<?php echo site_url('home/login')?>" class="btn">Gabung</a>
            </div>
        </div>
    </div>
    <div class="container" id="cardcont">
        <div class="captsub">
          <h2>Our Subjects</h2>
        </div>
        <div class="row">
        <?php for ($i = 0; $i <4 ; $i++){ ?>
            <div class="column">
                <div class="card h-100">
                    <h3><?php echo $subject[0]->sub_nama ?></h3>
                    <p><?php echo $subject[0]->sub_desc ?></p>
                </div>
            </div>
        <?php } ?>

            <!-- <div class="column">
                <div class="card">
                    <h3>Computer</h3>
                    <h3>Science</h3>
                    <p>studi tentang proses berinteraksi dengan data berupa masalah yang direpresentasikan dalam bentuk program.</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Data</h3>
                    <h3>Science</h3>
                    <p>bidang untuk mengekstrak pengetahuan dengan berdasarkan data terstruktur dan tidak terstruktur.</p>
                </div>
            </div>
  
            <div class="column">
                <div class="card">
                    <h3>Socials &</h3>
                    <h3>Politics</h3>
                    <p>bidang filsafat yang berhubungan dengan peran individu dalam masyarakat, dan peran pemerintah.</p>
                </div>
            </div>
  
            <div class="column">
                <div class="card">
                    <h3>Arts &</h3>
                    <h3>Humanities</h3>
                    <p>ilmu yang mempelajari cara membuat atau mengangkat manusia menjadi lebih manusiawi dan berbudaya.</p>
                </div>
            </div> -->
        </div>
        <div class="text-center subbtn">
            <a class="btn btn-block btnblcktxt" href="<?php echo site_url('home/subjek')?>" role="button">
            Lihat Semua Subjek
            </a>
        </div>
    </div>
<div class="content">
</div>
<!-- JAVASCRIPTS -->
  <script src="<?php echo base_url('assets/js/navbar.js')?>"></script>
</body>
</html>