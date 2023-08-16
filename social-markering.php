<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
/* your CSS goes here*/
.title {
    color: #fa9746;
    margin-bottom: 30px;
    position: relative;
}

.title::before {
    position: absolute;
    left: -29px;
    top: 0;
    height: 20px;
    width: 20px;
    transform: rotate(45deg);
    background-color: #7499f1;
    box-shadow: 0px 4px 4px 0px #aaa;
    border-radius: 4px;
    content: '';
}

.title::after {
    position: absolute;
    left: -19px;
    top: 25px;
    height: 14px;
    width: 14px;
    transform: rotate(45deg);
    background-color: #7499f1;
    box-shadow: 0px 4px 4px 0px #aaa;
    border-radius: 4px;
    content: '';
}

/* services */
.services {
    padding: 40px;
    position: relative;
}

.services .square {
    height: 100px;
    width: 100px;
    margin: 30px auto 40px;
    position: relative;
    border-radius: 15px;
    transform: rotate(45deg);
    padding: 10px;
    background-color: #7499f1;
    box-shadow: 0px 0px 27px 0px #ccc;
    border: 2px dotted #eaf3fa;
}

.square i {
    transform: rotate(315deg);
    display: block;
    color: #eaf3fa;
    font-size: 40px;
    padding-top: 17px;
    padding-right: 14px;
}

.services .square::before {
    position: absolute;
    left: -10px;
    top: 0;
    width: 1px;
    height: 100%;
    background-color: #fa9746;
    content: '';
}

.services .square::after {
    position: absolute;
    left: 50px;
    top: 66px;
    width: 1px;
    height: 88%;
    background-color: #fa9746;
    content: '';
    transform: rotate(90deg);
}

.services .serv .num {
    width: 60px;
    height: 60px;
    background-color: #7499f1;
    box-shadow: 0px 0px 15px 0px #00a9d3;
    margin: -38px auto 15px auto;
    border-radius: 50%;
    color: #fff;
    font-size: 30px;
    padding-top: 7px;
    border: 1px dashed;
}

.services .serv h5 {
    color: #fa9746;
}

.services .serv p {
    color: #777;
}

.services .serv hr {
    width: 30px;
    border-top: 3px solid rgb(0 169 211);
}
</style>

<body>
    <?php include('includes/header.php')?>

    <div class="services pd">
        <div class="container">
            <h3 class="title text-center">Social Media Marketing</h3>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="square" style="background-color:#FF0000;"><i class="fab fa-youtube"></i></div>
                    <div class="serv">
                        <h5>YouTube</h5>
                        <p>YouTube marketing is a type of digital marketing that involves using the YouTube platform to promote products, services, or content to a targeted audience. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="serv">
                        <div class="square" style="background-color:#4267B2;"><i class="fab fa-facebook-f"></i></div>
                        <h5>Facebook</h5>
                        <p>Facebook marketing is a form of digital marketing that utilizes the Facebook platform to promote products, services, or content to a targeted audience. It involves creating and managing Facebook pages, running ads, and engaging with users through various strategies, </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="square" style="background-image: linear-gradient(45deg, #833ab4, #fd1d1d, #fcb045);"><i class="fab fa-instagram"></i></div>
                    <div class="serv">
                        <h5>Instagram</h5>
                        <p>Instagram marketing is a form of digital marketing that leverages the Instagram platform to promote products, services, or content to a targeted audience.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="square" style="background-color: #1DA1F2;"><i class="fab fa-twitter"></i></div>
                    <div class="serv">
                        <h5>Twitter</h5>
                        <p>Twitter marketing is a form of digital marketing that involves using the Twitter platform to promote products, services, or content to a targeted audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php')?>


</body>

</html>