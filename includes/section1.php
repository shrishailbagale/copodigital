<section class="showcase ">
    <img class="bg-image zoom-in-out-box1" src="images/background-image.jpg" alt="Picture">
    <div class="overlay">
        <img class="logo1" src="logos/copo-only.png" alt="" srcset="" style="">

        <h2 class="">Digital Service (India) Pvt Ltd</h2>
        <h4 class="sub-title">An <img class="" src="logos/Exhicon-logo.png" alt="" srcset=""
                style="width:auto; height:40px; padding-bottom:4px;"> Group Company</h4>
        <a href="https://exhicongroup.com/" target="_blank" class="button button-large add-space-right blue-button">About Exhicon</a>
        <a href="contact-us.php" target="_blank" class="button button-white button-large">Contact Us</a>
    </div>
</section>
<style>
    .zoom-in-out-box1 {   
  animation: zoom-in-zoom-out 20s ease infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.2, 1.2);
  }
  100% {
    transform: scale(1, 1);
  }
}
.logo1 {
    width: 250px;
    height: auto;
    padding-top: 90px;
}

.showcase {
    width: 100%;
    height: 80vh;
    position: relative;
    color: white;
    margin-top: -20px;
    text-align: center;
}

.bg-image {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.showcase .overlay {
    width: 100%;
    height: 80vh;
    background-color: #3598ded4;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.button.button-large.add-space-right.blue-button {
    background-color: #e16363;
    border-color: #e16363;
}

.button.button-large.add-space-right {
    background-color: #d04395;
    background-image: linear-gradient(320deg, #984df2, #ff3a46);
    border-width: 0;
    border-color: #d04395;
    margin-right: 24px;
    font-family: Figtree, sans-serif;
    font-weight: 600;
}

.showcase h2 {
    margin-top: 10px;
    font-size: 2em;
}

.showcase p {
    margin-top: 8px;
    font-size: 1.2em;
}

@media (min-width:1200px) {

    .showcase h2 {
        margin-top: 10px;
        font-size: 2.8em;
    }

    .logo1 {
        width: 450px;
        height: auto;
        padding-top: 70px;
    }

    .button.button-large {
        background-color: #e16363;
        background-image: linear-gradient(320deg, #984df2, #ff3a46);
        border-width: 0;

        border-color: #e16363;
        flex-flow: column;
        justify-content: center;
        align-items: center;
        padding: 14px 28px;
        font-family: Figtree, sans-serif;
        font-size: 18px;
        font-weight: 600;
        line-height: 30px;
        display: inline-block;
    }

}

@media (min-width:576) {
    .button.button-large {
        background-color: #e16363;
        background-image: linear-gradient(320deg, #984df2, #ff3a46);
        border-width: 0;
        border-color: #e16363;
        flex-flow: column;
        justify-content: center;
        align-items: center;
        padding: 14px 28px;
        font-family: Figtree, sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 30px;
        display: inline-block;
    }

    .logo1 {
        width: 400px;
        height: auto;
        padding-top: 70px;
    }

}

.add-space-right {
    margin-right: 12px;
}

.button {
    color: #fff;
    text-align: center;
    background-color: #e16363;
    border: 2px solid #e16363;
    border-radius: 5px;
    flex-direction: column;
    padding: 10px 24px;
    font-family: Figtree, sans-serif;
    font-weight: 500;
    transition: opacity .2s, color .2s, border-color .2s, background-color .2s;
    display: inline-block;
}

.button.button-white.button-large {
    color: #d04395;
    background-image: none;
    font-family: Figtree, sans-serif;
    font-weight: 600;
}

.button.button-white {
    color: #e16363;
    background-color: #fff;
    border-color: #fff;
}
</style>