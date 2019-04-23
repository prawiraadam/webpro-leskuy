<!-- <!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/course_css.css">
    </head>

    <body> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/course_css.css');?>">
        <div class="title padding-top-70">
            <div class="container">

                <?php if($course) {?>

                    <h1 class="padding-top-70"><?php echo $course[0]->sub_nama ?></h1>
                    <p class="padding-bot"><?php echo $course[0]->sub_desc?></p>
                <?php }else{?>
                    <h1 class="padding-top-70">Masih Kosong boy</h1>
                <?php }?>
            </div>
        </div>

        <div class="container">
            <div class="row">
        
            <?php foreach ($course as $c) { ?>
                <div class="column">
                    <a href="<?php echo site_url('video/videos/')?><?php echo $c->course_id ?>" class="card">
                        <!-- <img class="card-img-top" src="assets/img/<?php echo $c->course_foto ?>" alt="Card image cap"> -->
                        <div class="card-body">
                            <p class="subtitle"><?php echo $c->univ_id ?></p>
                            <p class="title"><?php echo $c->course_name ?></p>
                            <p class="subtitle">full version</p>
                            <p>Rp.<?php echo $c->course_price?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>

            </div>
        </div>
        
    <!-- </body>
</html> -->