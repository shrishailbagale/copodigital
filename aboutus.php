<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"
        integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h1,
h2,
h3,
h4,
h5,
h6 {}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    outline: none;
}

a,
a:active,
a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

img {
    max-width: 90%;
    height: auto;
}

section {
    padding: 60px 0;
    /* min-height: 100vh;*/
}

.sec-title {
    position: relative;
    z-index: 1;
    
}

.sec-title .title {
    position: relative;
    display: block;
    font-size: 18px;
    line-height: 24px;
    color: #00aeef;
    font-weight: 500;
    margin-bottom: 15px;
}

.sec-title h2 {
    position: relative;
    display: block;
    font-size: 40px;
    line-height: 1.28em;
    color: #222222;
    font-weight: 600;
    padding-bottom: 18px;
}

.sec-title h2:before {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 50px;
    height: 3px;
    background-color: #d1d2d6;
}

.sec-title .text {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 400;
    margin-top: 35px;
}

.sec-title.light h2 {
    color: #ffffff;
}

.sec-title.text-center h2:before {
    left: 50%;
    margin-left: -25px;
}

.list-style-one {
    position: relative;
}

.list-style-one li {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #222222;
    font-weight: 400;
    padding-left: 35px;
    margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #ff2222;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover {
    color: #44bce2;
}

.btn-style-one {
    position: relative;
    display: inline-block;
    font-size: 17px;
    line-height: 30px;
    color: #ffffff;
    padding: 10px 30px;
    font-weight: 600;
    overflow: hidden;
    letter-spacing: 0.02em;
    background-color: #00aeef;
}

.btn-style-one:hover {
    background-color: #0794c9;
    color: #ffffff;
}

.about-section {
    position: relative;
    padding: 0px 0 20px;
}

.about-section .sec-title {
    /* margin-bottom: 45px; */
}

.about-section .content-column {
    position: relative;
    margin-bottom: 50px;
}

.about-section .content-column .inner-column {
    position: relative;
    padding-left: 20px;
}

.about-section .text {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 600;
}

.about-section .list-style-one {
    margin-bottom: 45px;
}

.about-section .btn-box {
    position: relative;
}

.about-section .btn-box a {
    padding: 15px 50px;
}

.about-section .image-column {
    position: relative;
}

.about-section .image-column .text-layer {
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column {
    position: relative;
    padding-left: 80px;
    padding-bottom: 0px;
}

.about-section .image-column .inner-column .author-desc {
    position: absolute;
    bottom: 16px;
    z-index: 1;    
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}

.about-section .image-column .inner-column .author-desc h2 {
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
    margin: 0;
}

.about-section .image-column .inner-column .author-desc span {
    font-size: 16px;
    letter-spacing: 2px;
    text-align: center;
    color: #fff;
    display: block;
    font-weight: 400;
}

.about-section .image-column .inner-column:before {
    content: '';
    position: absolute;    
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;   
}

.about-section .image-column .image-1 {
    position: relative;
}

.about-section .image-column .image-2 {
    position: absolute;
    left: 0;
    bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img {
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    border-radius: 46px;
}

.about-section .image-column .video-link {
    position: absolute;
    left: 70px;
    top: 170px;
}

.about-section .image-column .video-link .link {
    position: relative;
    display: block;
    font-size: 22px;
    color: #191e34;
    font-weight: 400;
    text-align: center;
    height: 100px;
    width: 100px;
    line-height: 100px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover {
    background-color: #191e34;
    color: #f
}

#clients img {
    transition: all 0.4s ease-in-out;
}

#banner {
    background-image: url("images/bg.jpg");
    background-position: center;
    background-color:white
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    color: white;
    
}

body{
    background-image : url('images/background.png');
}
</style>

<body>
    
    <?php include('includes/header.php') ?>
    <div id="banner" class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-5">About Us</h1>
                <p class="lead">Exhicon Group company</p>
            </div>
        </div>
    <section class="about-section">        
        <div class="container">
            <div class="row">
                <div class="content-column col-md-6 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">
                                <h3>About Exhicon Group</h3>
                            </span>
                            <div class="divider py-1 bg-dark"></div>
                            <!-- <h2>We are Creative Tech Enthusiast working since 2015</h2> -->
                        </div>
                        <div class="text">The Exhicon Group established in 1997 with a more capital of Rs 2300 is the
                            only organization in Asia that serves with the full array of products and services for
                            TradeFairs and Event Sector. From Media to Integrated Marketing Solution, From Temporary to
                            Permanent Event Infrastructure from Management to organising.</div>
                        <div class="text">
                            The Group in 2010 started successfully diversifying into Hospitality.
                            F&B, Non Chemical FMCG, International Trading and very recently
                            in Healthcare and now has full fledged overseas operatio s in India.
                            Thailand, Hong Kong, Dubai and Switzerland in addition to having a marketing & Selling
                            Network in over 50 countries.
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-md-6 col-sm-12">
                    <div class="inner-column ">
                        <div class="author-desc">
                            <h2>M Q Syed</h2>
                            <span>CMD</span>
                            <span>Exhicon Events Media Solutions Ltd</span>
                        </div>
                        <figure class="image-1"><a href="#" class="" data-fancybox=""><img
                                    title="M Q Syed" src="images/mqsyedsir.jpg" alt=""></a></figure>
                    </div>
                </div>

            </div>
            <div class="sec-title">
                <span class="title"><h4>Our Services</h4></span>
                <!-- <h2>We want to lead in innovation & Technology</h2> -->
            </div>
            <div class="text">
                <ol>
                    <li>Permission and Licensing</li>
                    <li>Infrastructure service for outdoor and Indoor event</li>
                    <li>Branding and Promotion</li>
                </ol>
            </div>
            <div class="sec-title">
                <span class="title"><h4>Our Venue</h4></span>                
            </div>
            <div class="text">
                <ol>
                    <li>Messe Global Pune, Laxmi Lawns</li>                   
                </ol>
            </div>
            <div class="sec-title">
                <span class="title"><h4>Industry Plublication/Channel</h4></span>                
            </div>
            <div class="text">
                <ol>
                    <li>Trade Fair Times</li>                   
                </ol>
            </div>
            <div class="sec-title">
                <span class="title"><h4>Partners We've Worked With</h4></span>                
            </div>
            <div class="text">
                <ol>
                    <li>WEA for space selling</li>                   
                </ol>
            </div>
            <div class="sec-title">
                <span class="title"><h4>Our Clients</h4></span>                
            </div>
            <div class="text">
                <!-- <ol>
                    <li></li>                   
                </ol> -->
            </div>
            
        </div>
    </section>

    <?php include('includes/footer.php') ?>
</body>

</html>