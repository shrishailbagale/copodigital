<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clients</title>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css"> 
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"
        integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
body,
html {
    margin: 0;
    padding: 0;
}

#sec-1 {
    background: url('https://s3.amazonaws.com/codecademy-content/projects/2/madison-square-market/s1.jpg') no-repeat center center;
    background-size: cover;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    margin-top: 0px;
    height: 350px;
    width: 100%;
}

#sec-1 .size {
    color: #1E88E5;
}

#sec-1 h2,
#sec-1 p {
    display: inline-block;
    background: #fff;
    padding: 2px 6px;
}

.intro {
    max-width: 1400px;
    //border:1px solid black;
    text-align: center;
}

.intro a {
    text-decoration: none;
    font-size: 25px;
}

.intro a:hover {
    color: #1E88E5;
    text-decoration: none;
}

.img-div {
    /* width: 80%; */
    max-width: 100%;
    display: block;
    height: auto;
    margin: auto;
    //background:white;
}

.image img {
    /* max-width: 70%; */
    /*this is the only way to make image responsive inside the flexbox*/
    margin: auto;
    display: block;
    //border:2px solid #fff;
}

.image {
    /*responsive*/
    max-width: 99%;
    height: auto;
    /* */
    /*centerized*/
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* */
}

.bg-custom {
    background: #1E88E5;
}

#banner {
    background-image: url("images/pertner.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    color: white;

}

.section-bg {
    background: #f0f0f0;
}

.bg-1 {
    background-color: #e7eb2a91;
}
</style>

<body>
    <?php include('includes/header.php') ?>
    <div id="banner" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-5">Our Clients</h1>
            <p class="lead">Our most happy clients</p>
        </div>

    </div>


    <section class="container intro">

        <div class="row mx-auto p-2 bg-1">
            <div class="mx-auto ">
                <a href="#" class=" font-weight-bold text-right">&mdash; Government Sector &mdash;</a>
            </div>
        </div>



        <div class="row mx-auto two mt-2">
            <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/MinistryOfRailway-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/MRD-GOI-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/BhartiyaVayuSena-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/BiharSarkar-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/DOMHFW-UP-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/GAIL-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3 mx-auto  mt-sm-2">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/GovtOfJharkand-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/IIT-Bombay-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/IndianArmy-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/JaipurDevAuthority-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/JK-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/Kotra-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/NPCIL-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/TCEB-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Government/UttarakhandTourism-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>


        </div>
        <?php include('includes/popup.php') ?>
        
        <?php 
            // Include the database configuration file  
         require_once 'config.php'; 

            // Get image data from database 
        $result = $conn->query("SELECT company_image FROM tblclients where category='Government' ORDER BY id DESC"); 
        ?>

        <?php if($result->num_rows > 0){ ?>
            <div class="gallery">
                <div class="row mx-auto two mt-2">
                    <?php $count = 0; ?>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                            <div class="img-div">
                                <div class="image ">
                                    <img src="images/clients/<?php echo ($row['company_image']);?>"/>
                                </div>
                            </div>
                        </div>

                        <?php $count++; ?>
                            <?php if($count % 5 == 0){ ?>
                            </div>
                            <div class="row">
                            <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                </div>
                <?php }else{ ?>
                <p class="status error">Image(s) not found...</p>
                <?php } ?>

    </section>

    <section class="container-fluid intro">

        <div class="row mx-auto p-2 bg-1">
            <div class="mx-auto ">
                <a href="#" class=" font-weight-bold text-right">&mdash; Organisers & Associations Agencies &mdash;</a>
            </div>
        </div>

        <div class="row mx-auto two mt-2">
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/ABEC-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/AsianCeramics-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/Assocham-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/CII-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/Fairfest-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/FICCI-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/InterAds-1-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/LBB-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/MesseFrankfurt-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/nbt-india-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/OrangeLogo-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/RotaryPuneCamp-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Organisers/Sphere-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
        </div>
        <?php 
            // Include the database configuration file  
         require_once 'config.php'; 

            // Get image data from database 
        $result = $conn->query("SELECT company_image FROM tblclients where category IN ('Organiser','Association') ORDER BY id DESC"); 
        ?>

        <?php if($result->num_rows > 0){ ?>
            <div class="gallery">
                <div class="row mx-auto two mt-2">
                    <?php $count = 0; ?>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                            <div class="img-div">
                                <div class="image ">
                                    <img src="images/clients/<?php echo ($row['company_image']);?>" />
                                </div>
                            </div>
                        </div>

                        <?php $count++; ?>
                            <?php if($count % 5 == 0){ ?>
                            </div>
                            <div class="row">
                            <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                </div>
                <?php }else{ ?>
                <p class="status error">Image(s) not found...</p>
                <?php } ?>
    </section>

    <section class="container intro">

        <div class="row mx-auto p-2 bg-1">
            <div class="mx-auto ">
                <a href="#" class=" font-weight-bold text-right">&mdash; Corporate Clients &mdash;</a>
            </div>
        </div>

        <div class="row mx-auto two mt-2">
            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Accenture-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>


            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Amdocs-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>


            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Cannon-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>


            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/ColorPlus-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Godrej-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/HCL-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/HDFC-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/HSBC-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/ICICI-Bank-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/IFB-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/JohnDeere-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Karvy-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/MasterCard-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Raymond-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Reliance-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/Sony-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/TataMotors-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-3">
                <div class="img-div">
                    <div class="image ">
                        <img src="images/clients/Corporate/TechMahindra-300x200.jpg" alt="Carrot">
                    </div>
                </div>
            </div>
        </div>
        <?php 
            // Include the database configuration file  
         require_once 'config.php'; 

            // Get image data from database 
        $result = $conn->query("SELECT company_image FROM tblclients where category='Corporate' ORDER BY id DESC"); 
        ?>

        <?php if($result->num_rows > 0){ ?>
            <div class="gallery">
                <div class="row mx-auto two mt-2">
                    <?php $count = 0; ?>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        <div class="col-10 col-sm-8 col-md-3 col-lg-4 col-xl-3">
                            <div class="img-div">
                                <div class="image ">
                                    <img src="images/clients/<?php echo ($row['company_image']);?>" />
                                </div>
                            </div>
                        </div>

                        <?php $count++; ?>
                            <?php if($count % 5 == 0){ ?>
                            </div>
                            <div class="row">
                            <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                </div>
                <?php }else{ ?>
                <p class="status error">Image(s) not found...</p>
                <?php } ?>
        </div>

    </section>

    <?php include('includes/footer.php') ?>
    <?php include('includes/script.php')?>

</body>

</html>