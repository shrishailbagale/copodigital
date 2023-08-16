<?php
// Step 1: Set up the database connection
include_once('config.php');

// Step 2: Fetch data from the database
$sql = "SELECT company_image FROM tblclients"; // Replace 'your_table_name' with the actual name of your table
$result = $conn->query($sql);

?>
<section class="services" style="">
    <div class="container-fluid">
        <h2 class="text-center">Our Clients</h2>
        <div class="border"></div>
        <section class="customer-logos slider">
            <?php
        // Loop through the results and display the images
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="slide"><img src="images/clients/' . $row["company_image"] . '" alt="logo"/></div>';
            }
        } else {
            echo "No images found.";
        }

        // Close the database connection
        $conn->close();
        ?>
        </section>
    </div>


</section>
<script>
$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
                breakpoint: 768,
                settings: { // Fixed typo here
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 520,
                settings: { // Fixed typo here
                    slidesToShow: 2
                }
            }
        ]
    });
});
</script>
<style>
.slick-slide {
    margin: 0 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
}

.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block
}

.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}

.slick-slide img {
    display: block;
}

.slick-initialized .slick-slide {
    display: block;
}

.copy {
    padding-top: 250px;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>