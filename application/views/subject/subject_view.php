<!-- <!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/subject_css.css">
    </head>

    <body> -->
        
    <link rel="stylesheet" href="<?php echo base_url('assets/css/subject_css.css');?>">   
    <div class="container white-background">
        <h1 class="center padding-top-70">DAFTAR SUBJEK</h1>
        <div class="row">

            <?php foreach ($subject as $s) { ?>

                <div class="column">
                    <a href="#" class="card">
                        <img class="card-img-top" src="assets/img/<?php echo $s->sub_foto ?>" alt="Card image cap">
                        <div class="card-body">
                            <p><?php echo $s->sub_nama ?></p>
                        </div>
                    </a>
                </div>

            <?php } ?>

        </div>
    </div>
        
    <!-- </body>
</html> -->