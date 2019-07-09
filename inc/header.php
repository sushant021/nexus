<?php 
/* client: nexus services 
   developer: Sushant Nepal
   start date: 2019 , May 17
*/
?>
<img src="assets/img/slider.jpg" alt="slider" class="bg-image">
<div class="overlay">

    

    <!-- top bar section-->
    <section class="container-fluid top-bar">
        <div class="row fs-14  bg-black">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  text-center bg-orange text-white pad-10">
                <main class="top-left-box">
                    <span class=" mr-2"><i class="fas fa-phone"></i></span>
                    <span class="text-bold">Client Services : </span>
                    <span>+977-9855012011</span>
                </main>
            </div>
    
            <div class="col-4 mobile-hidden"></div>
    
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center text-white pad-10 ">
                <main class="top-right-box">
    
                    <span class="email-box pr-3 ">
                        <span class=" mr-2"><i class="fas fa-envelope"></i></span>
                        <span><strong>Email:</strong> info@nexus.com.np</span>
                    </span>
    
                    <span class="m-3">
                        <span class="mr-2"><i class="fab fa-facebook-f"></i></span>
                        <span class="mr-2"><i class="fab fa-twitter"></i></span>
                        <span class="mr-2"><i class="fab fa-youtube"></i></span>
                        <span class="mr-2"><i class="fab fa-linkedin-in"></i></span>
                    </span>
                    
                </main>
            </div>
        </div>
    </section>
    
    
    <!-- mobile menu -->
    <section class="mobile-menubar bg-black-light">
        <div class="logo" style="display:inline-block; margin:0 10px;">Nexus</div>
        <div class="menu-toggler" onClick="showMobileMenu()"><i class="fas fa-bars"></i></div>
        <div class="mobile-menu" id="mobileMenu">
            <a onClick="closeMobileMenu()" style="color:#fff;float:right;margin:0 10px;"><span><i class="fas fa-times"></i></span></a>
            <ul>
                <li class="mobile-menu-item">
                    <a href="" class="mobile-menu-link">Home</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="#about" class="mobile-menu-link">About Us</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="#projects" class="mobile-menu-link">Projects</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="#services" class="mobile-menu-link">Services</a>
                </li>
                <li class="mobile-menu-item">
                    <a href="#contacts" class="mobile-menu-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- navigation section --> 
    <section class="container-fluid bg-black-light" id="mainMenuBar">
    
        <div class="row p-4">
            <div class="col-sm-3 text-center">
    
                <span class="logo-desk">
                    <span class="logo">Nexus</span>
                </span>
    
            </div>
    
            <div class="col-sm-6 text-center border-black-light-1 m-auto ">
                    
                <nav>
                    <ul class="main-menu">
                        <li class="menu-item"><a href="" class="menu-link">Home</a></li>
                        <li class="menu-item"><a href="#about" class="menu-link">About Us</a></li>
                        <li class="menu-item"><a href="#projects" class="menu-link">Projects</a></li>
                        <li class="menu-item"><a href="#services" class="menu-link">Our Services</a></li>
                        
                        <li class="menu-item"><a href="#contacts" class="menu-link">Contact Us</a></li>
                        
                    </ul>
                </nav>
    
            </div>
    
            <div class="col-sm-3 text-center m-auto px-5">
                <a href="#quote" class="quote-btn d-block">Request Quote</a>
            </div>

           
        </div>
            
    </section>

    

 
    <!-- caption -->    
    <section class="caption">
        <span class="upper-subtitle text-white bg-orange text-uppercase">We Provide Quality</span>
        <p class="title text-white">Start Your Dream Project</p>
        <p class="subtitle text-white">Call Us Now: <span class="call-now-num text-orange">+977-9855-053773</span> </p>
        <a href="#contacts" class="quote-btn-opp mt-1">Contact Details</a>
    </section>

</div>



<script>
    function showMobileMenu(){
        document.getElementById("mobileMenu").style.display = "block";
    }
    function closeMobileMenu(){
        document.getElementById('mobileMenu').style.display = "none";
    }

</script>