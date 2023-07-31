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
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

html,
body {}

body {


    background: #fff;
    font-family: 'Manrope', sans-serif
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 50px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 6px;
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}

.pro-button {
    padding: 12px 42px;
    background-color: #ffa000;
    border-color: #ffa000
}

.pro-button:focus {
    outline: none !important;
    background-color: #ffa000;
    border-color: #ffa000;
    box-shadow: 0 0 0 0.2rem rgb(255, 255, 255) !important
}

.pro-button:active {
    outline: none !important;
    background-color: #ffa000 !important;
    border-color: #ffa000 !important
}

.pro-button:hover {
    padding: 12px 42px;
    background-color: #f1a018;
    border-color: #f1a018
}

#banner {
    background-image: url("images/client_background.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    color: white;
    padding: 80px;
}
</style>

<body>
    <?php include('includes/header.php'); ?>
    <section id="clients" class="section-bg">

        <div id="banner" class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-5"><b>Permission and Licensing</b></h1>
                <!-- <p class="lead">Meet our happy clients ....</p> -->
            </div>
        </div>

        <div class="container text-center">
            <div class="card">
                <h4 class="mb-5">If Exhicon is Planning to run a Public event, we need to go through a set og
                    procedures, and the most important of these include obtaining specific licences from the relevent
                    authorities. To make you understand further on the, we're here today a list licences we require to
                    conduct events.</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/healthcare.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Helth Department</h5> <small>Non-Objection Certificate from Ploice Station</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/electrician.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Electrical Insector</h5> <small>Non-Objection Certificate from Electrical Departments</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/Traffic.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Traffic Police</h5> <small>Non-Objection Certificate from Traffic Police</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/fire.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Local Goverment</h5> <small>Non-Objection Certificate from Fire and Rescue</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/Bank.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Additional Collector Office</h5> <small>Non-Objection Certificate from Additional Collector Office</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="mt-2"> <img src="icon/police.png" width="50" height="50" />
                            </div>
                            <h5 class="mt-3">Police Station</h5> <small>Non-Objection Certificate from Police Station</small>
                        </div>
                    </div>


                </div>
                <div class="button mt-5"> 
                    <!-- <button class="btn btn-primary pro-button">Add a product <i class="fa fa-long-arrow-right ml-2 mt-1"></i></button>  -->
                        </div>
            </div>
        </div>


        </div>

        </div>

    </section>
    <?php include('includes/footer.php'); ?>

</body>

</html>