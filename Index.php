<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
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

    <!-- CLient Slider css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>


</head>
<style>
.popup-form {
    margin: 10px auto;
}

.popup-form h2 {
    margin-bottom: 15px;
    font-size: 24px;
    text-transform: uppercase;
}

.contact-form-wrapper {
    padding: 64px 0;
}

.contact-form {
    padding: 30px 40px;
    background-color: #ffffff;
    border-radius: 12px;
    max-width: 400px;
}

.contact-form textarea {
    resize: none;
}

.contact-form .form-input,
.form-text-area {
    background-color: #f0f4f5;
    height: 50px;
    padding-left: 16px;
}

.contact-form .form-text-area {
    background-color: #f0f4f5;
    height: auto;
    padding-left: 16px;
}

.contact-form .form-control::placeholder {
    color: #aeb4b9;
    font-weight: 500;
    opacity: 1;
}

.contact-form .form-control:-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
}

.contact-form .form-control::-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
}

.contact-form .form-control:focus {
    border-color: #f33fb0;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
}

.contact-form .title {
    text-align: center;
    font-size: 24px;
    font-weight: 500;
}

.contact-form .description {
    color: #aeb4b9;
    font-size: 14px;
    text-align: center;
}

.contact-form .submit-button-wrapper {
    text-align: center;
}

.contact-form .submit-button-wrapper input {
    border: none;
    border-radius: 4px;
    background-color: #f23292;
    color: white;
    text-transform: uppercase;
    padding: 10px 60px;
    font-weight: 500;
    letter-spacing: 2px;
}

.contact-form .submit-button-wrapper input:hover {
    background-color: #d30069;
}
</style>

<body>


    <?php include('includes/header.php'); ?>

    <?php include('includes/section1.php') ?>
    <?php include('includes/partners.php') ?>

    <?php include('includes/section2.php') ?>
    <?php include('includes/slider.php') ?>
    <?php include('includes/service.php') ?>
  
    <?php include('includes/client.php') ?>


    <?php include('includes/footer.php') ?>
    <?php include('includes/popup.php') ?>


    <?php include('includes/whatsapp-wrapper.php') ?>

    <?php include('includes/script.php') ?>

</body>

</html>