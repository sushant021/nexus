<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus Engineering Services Pvt. Ltd.</title>

    <!-- css links -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- popper js, jquery and  bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

     <!-- owl carousel js -->
     <script src="assets/js/owl.carousel.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Poppins|Roboto&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    
</head>
<body>

    <header>
        
            <?php include 'inc/header.php' ?>
        
    </header>
    
    <main>
        <?php include 'inc/about.php' ?>
        <?php include 'inc/services.php' ?>

        <?php include 'inc/projects.html' ?>
        <?php include 'inc/more_services.html' ?>
        <?php  include 'inc/solutions.html' ?>
        <?php include 'inc/quote.php' ?>
        <?php include 'inc/map.html' ?>
    </main>

    <footer>
            <?php include 'inc/footer.html' ?>
    </footer>
     

    <script>
    
            let owl = $('.owl-carousel');
           
            owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                        0:{
                        items:1,
                        
                        autoplay:true,
                        },
                        600:{
                        items:2,
                        
                        autoplay:true,
                        },
                        1000:{
                        items:3,
                        
                        loop:true,
                        autoplay:true,
                        }
                }
            });
            

        
    </script>
</body>
</html>