<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Us</title>

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


</head>
<style>
body {

    background-color: #00000012;
}

section {
    padding: 60px 0;
    min-height: 100vh;
}

.contact-info {
    display: inline-block;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
}

.contact-info-icon {
    margin-bottom: 15px;
}

.contact-info-item {
    background: #071c34;
    padding: 30px 0px;
}

.contact-page-sec .contact-page-form h2 {
    color: #071c34;
    text-transform: capitalize;
    font-size: 22px;
    font-weight: 700;
}

.contact-page-form .col-md-6.col-sm-6.col-xs-12 {
    padding-left: 0;
}

.contact-page-form.contact-form input {
    margin-bottom: 5px;
}

.contact-page-form.contact-form textarea {
    height: 110px;
}

.contact-page-form.contact-form input[type="submit"] {
    background: #071c34;
    width: 150px;
    border-color: #071c34;
}

.contact-info-icon i {
    font-size: 48px;
    color: #fda40b;
}

.contact-info-text p {
    margin-bottom: 0px;
}

.contact-info-text h2 {
    color: #fff;
    font-size: 22px;
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 10px;
}

.contact-info-text span {
    color: #999999;
    font-size: 16px;
    font-weight: ;
    display: inline-block;
    width: 100%;
}

.contact-page-form input {
    background: #f9f9f9 none repeat scroll 0 0;
    border: 1px solid #f9f9f9;
    margin-bottom: 20px;
    padding: 12px 16px;
    width: 100%;
    border-radius: 4px;
}

.contact-page-form .message-input {
    display: inline-block;
    width: 100%;
    padding-left: 0;
}

.single-input-field textarea {
    background: #f9f9f9 none repeat scroll 0 0;
    border: 1px solid #f9f9f9;
    width: 100%;
    height: 120px;
    padding: 12px 16px;
    border-radius: 4px;
}

.single-input-fieldsbtn input[type="submit"] {
    background: #fda40b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-weight: 600;
    padding: 10px 0;
    text-transform: capitalize;
    width: 150px;
    margin-top: 20px;
    border-color: gray;
    font-size: 16px;
}

.single-input-fieldsbtn input[type="submit"]:hover {
    background: #071c34;
    transition: all 0.4s ease-in-out 0s;
    border-color: #071c34
}

.single-input-field input,
textarea {
    border: 1px solid #0000004d;
}

.single-input-field textarea {
    border: 1px solid #0000004d;
}

.single-input-field h4 {
    color: #464646;
    text-transform: capitalize;
    font-size: 14px;
}

.contact-page-form {
    display: inline-block;
    width: 100%;
    margin-top: 30px;
}

.contact-page-map {
    margin-top: 36px;
}

.contact-page-form form {
    padding: 20px 15px 0;
}

/* hr {
    border: 1px solid #fda40b;
}

.card .fa {
    color: #c60518;
    padding:5px;
}

.card-title {
    color: #003d5a;
}
.card {
    padding-bottom:10px;
    margin-bottom: 20px;
}
.card p{
    font-size:16px;
    font-weight:500;
} */
</style>

<body>
    <?php include('includes/header.php')?>


    <section class="contact-page-sec">

        <div class="container">
            <h1 class="display-5">Contact Us</h1>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-page-form" method="post">
                        <h2>Get in Touch</h2>
                        <form method="post" action="process_form.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="Your Name" name="name" value="" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="email" placeholder="E-mail" name="email" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="Phone Number" name="mobile" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-input-field">
                                        <input type="text" placeholder="Subject" name="subject" required />
                                    </div>
                                </div>
                                <div class="col-md-12 message-input">
                                    <div class="single-input-field">
                                        <textarea placeholder="Write Your Message" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="single-input-fieldsbtn">
                                    <input type="submit" value="Send Now" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-page-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3378944619167!2d72.82980257495613!3d19.136681100065186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b62314cfffff%3A0x3a6a6b0fe5631307!2sPremier%20Interiors!5e0!3m2!1sen!2sin!4v1690955151369!5m2!1sen!2sin"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marked"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>address</h2>
                                <span>302 Kuber complex, new link road,
                                    Andheri west</span>
                                <span>Mumbai-400053</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>E-mail</h2>
                                <span>info@copodigital.com</span>
                                <span>events@copodigital.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h2>office time</h2>
                                <span>Mon - sat 10:00 am - 6.00 pm</span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section>
        <div class="container">
            <h1 class="display-5">Country Contacts</h1>
            <hr />
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">India</h2>
                            <hr />
                            <div>
                                <p><i class="fa fa-globe"></i> sunita@exhicongroup.com</p>
                                <p><i class="fa fa-map-marker-alt"></i> 103, Crystal Paradise, D S Road, Andheri (W),
                                    Mumbai -400053, India</p>
                                <p><i class="fa fa-phone fa-rotate-90"></i> 1800 258 8103</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Thailand</h2>
                            <hr />
                            <div>
                                <p><i class="fa fa-globe"></i> thailand@exhicongroup.com</p>
                                <p><i class="fa fa-map-marker-alt"></i> 162/51-52, Phangmuang Saikor Road,Patong,
                                    Phuket-83150, Thailand</p>
                                <p><i class="fa fa-phone fa-rotate-90"></i> +66 953369335</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">HongKong</h2>
                            <hr />
                            <div>
                                <p><i class="fa fa-globe"></i> syed@wea-agency.com</p>
                                <p><i class="fa fa-map-marker-alt"></i> 1411, Cosco Towers, 183, Queens road, Central,
                                    Sheung Wan, Hong Kong</p>
                                <p><i class="fa fa-phone fa-rotate-90"></i> +66 953369335</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">UAE</h2>
                            <hr />
                            <div>
                                <p><i class="fa fa-globe"></i> middleeast@exhicongroup.com</p>
                                <p><i class="fa fa-map-marker-alt"></i> 1601, Al-Moosa Tower 1, Sheikh Zayed Rd., Dubai.
                                </p>
                                <p><i class="fa fa-phone fa-rotate-90"></i> +9715 85985094</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <?php include('includes/footer.php')?>
    <?php include('includes/script.php')?>
    <?php include('includes/whatsapp-wrapper.php') ?>

</body>

</html>