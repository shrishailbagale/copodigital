<section class="section-partner" id="">
<header class="section-header pt-5">
            <h3 class="text-dark">Exhicon Groups of Companies</h3>
            <?php include ('includes/divider_bar.php') ?>
            <!-- <p class="text-dark">An Exhicon Groups</p> -->
        </header>
    <div class="logo-slider" id="logo-slider">


        <div class="logo-slide-track">
            <div class="slide">
                <img src="logos/AlFresco.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/BlueSkyLounge.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/copo logo.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/CreativeFocus.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/DigiGlobe-logo.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/Exhicon PE.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/Exhicon-Events.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/Exhicon-Hospitality.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/Exhicon-Impex.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/Exhicon-RealEstate.png" alt="" style="width:auto; height:30px; padding-bottom:10px;" />
            </div>
            <div class="slide">
                <img src="logos/ExhiconRealEstate.png" alt="" />
            </div>
            <div class="slide">
                <img src="logos/MesseGlobalP.png" alt="" />
            </div>
        </div>

    </div>
    <!-- <img src="https://uploads-ssl.webflow.com/5e406ebc483f3d25af76955a/5e406ebd483f3d3ed4769628_divider-round-bottom.svg"
        alt="" class="divider divider-bottom"> -->
</section>

<style>
/* ----------------------------Logo Slider start--------------------------------- */

.section-title {
    padding-top: 40px;
}

.logo-slider .slide {
    height: 70px;
    height: auto;
    padding: 30px;
}

/* CSS for small screens */
.logo-slide-track .slide img {
    width: 140px;
    height: auto;
}

@media screen and (min-width: 768px) {
    .logo-slide-track .slide img {
        max-width: 160px;
        height: auto;
    }
}

/* CSS for extra-large screens */
@media screen and (min-width: 1200px) {
    .logo-slide-track .slide img {
    width: 140px;
    height: auto;
}

}

.logo-slide-track .slide {
    margin: 20px;
}

.section-name {
    font-size: 2rem;
    font-family: Figtree, sans-serif;
    text-align: center;
    color: crimson;
    font-weight: 600;
}

.section-partner {
    background-color: #eff0f2 !important;    
    height: 50vh;
}


.logo-slider {
    -webkit-box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
    box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
    margin: auto;
    overflow: hidden;   
    position: relative;
    width: 100%;

}

.logo-slider::before,
.logo-slider::after {
    background: -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
    background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
    content: "";
    height: 175px;
    position: absolute;
    width: 200px;
    z-index: 2;
}

.logo-slider::after {
    right: 0;
    top: 10px;
    -webkit-transform: rotateZ(180deg);
    transform: rotateZ(180deg);
}

.logo-slider::before {
    left: 0;
    top: 10px;
}

.logo-slider .logo-slide-track {
    -webkit-animation: logo-scroll 60s linear infinite;
    animation: logo-scroll 60s linear infinite;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: calc(250px * 14);
    animation-duration: 30s;
    animation-iteration-count: infinite;
}


.logo-slider .slide img {
    filter: grayscale(100%);
}

.logo-slider .slide:hover img {
    transition: filter 0.2s ease;
    filter: grayscale(0%);
}



@-webkit-keyframes logo-scroll {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    100% {
        -webkit-transform: translateX(calc(-250px * 7));
        transform: translateX(calc(-250px * 7));
    }
}

@keyframes logo-scroll {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    100% {
        -webkit-transform: translateX(calc(-250px * 7));
        transform: translateX(calc(-250px * 7));
    }
}

/*---------------------- logo slider end------------------------------------------ */
</style>