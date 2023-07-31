<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Venue </title>

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
.section-ajeet-title {
    position: relative;
    font-size: 30px;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    margin: 0 0 10px;
}

.gallery-sec {
    padding: 40px 0 20px;
}

.gf-column {
    float: left;
    display: none;
    /* Hide all elements by default */
}

/* The "show" class is added to the filtered elements */
.show {
    display: block;
}

.filter {
    padding: 20px 2px 10px;
    text-align: center;
    max-width: 1050px;
    margin: auto;
    object-fit: cover;
}

.gf-btn {
    padding: 5px 10px;
    margin: 5px 4px 4px 0;
    display: inline-block;
    color: #000;
    background: #fff;
    font-size: 14px;
    font-weight: 500;
    border: 1px solid #0476b3;
    text-decoration: none;
    transition: all 0.2s;
    border-radius: 9px;
    cursor: pointer;
}

.gf-btn:hover,
.gf-btn-active {
    background: #0476b3;
    color: #fff;
    -webkit-transform: translateY(3px);
    -ms-transform: translateY(3px);
    transform: translateY(3px);
}

.gallery {
    display: flex;
    justify-content: center;
    width: fit-content;
    max-width: 1320px;
    flex-wrap: wrap;
    margin: 25px auto;
    /* gap: 14px; */
}

.gallery img {
    width: 250px;
    height: 300px;
    object-fit: cover;
    /* background: center center/cover no-repeat #ddd; */
    transition: 0.3s ease-in-out;
    border-radius: 12px;
    overflow: hidden;
    margin: 10px 10px;
}

.gallery img:hover::after {
    content: "E";
}

.gallery img:hover,
video:hover {
    transform: scale(1.1);
}

.butonsSection {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 7px 15px;
    gap: 15px;
}

.closeBtn {
    font-size: 22px;
    letter-spacing: 2px;
    color: #fff;
    transition: all 0.4s linear;
    padding: 8px 50px;
    border-radius: 25px;
    background: red;
    border: 0;
    outline-offset: -5px;
    outline: 2px solid #fff;
}

.closeBtn:hover {
    cursor: auto;
    background: white;
    color: black;
    padding: 8px 45px;
    outline-offset: 4px;
    outline: 2px solid #fff;
}

.openDiv {
    width: 100%;
    height: 100vh;
    background: #000000e7;
    position: fixed;
    top: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    left: 0;
    z-index: 9999;
}

.imgPreview {
    /*    width: 70%;  */
    object-fit: scale-down;
    max-height: 80vh;
    height: auto;
}

.sets .hide,
.sets .pophide {
    width: 0%;
    opacity: 0;
}

.all-btn {
    text-align: center;
    background-color: #0476b3;
    border-radius: 30px;
    margin: -15px auto 0;
    font-size: 1rem;
    width: 100%;
    max-width: 200px;
    padding: 5px 10px;
    letter-spacing: 1px;
    cursor: pointer;
}

.all-btn:active {
    transform: translateY(2px);
}

/* Responsive css Code Start */

@media (max-width: 767px) {
    .gallery img {
        margin: 8px 8px;
        width: 175px;
    }

    .closeBtn {
        padding: 8px 25px;
    }

    .imgPreview {
        width: 80%;
        height: auto;
    }
}

@media (max-width: 575px) {
    .gallery img {
        margin: 8px 6px;
        width: 155px;
    }

    .gf-btn {
        font-size: 15px;
    }

    .closeBtn {
        font-size: 18px;
        padding: 8px 25px;
        border-radius: 15px;
    }

    .closeBtn:hover {
        padding: 8px 20px;
    }

    .imgPreview {
        width: 90%;
        /* max-height: 50vh; */
        height: auto;
    }
}
</style>

<body>
    <?php include('includes/header.php')?>

    <section class="gallery-sec sec-pad">
        <div class="container">
            <div class="section-ajeet-title text-center">Venue Gallery</div>

            <div id="gf-BtnContainer" class="filter">
                <button class="gf-btn" onclick="filterSelection('wedding')">Wedding</button>
                <button class="gf-btn gf-btn-active" onclick="filterSelection('decoration')">Decoration</button>
                <button class="gf-btn" onclick="filterSelection('corporate')">Corporate</button>
                <button class="gf-btn" onclick="filterSelection('kitchen')">Kitchen</button>
                <button class="gf-btn" onclick="filterSelection('fair')">Trade Fair</button>
                <button class="gf-btn" onclick="filterSelection('international')">Parking</button>
                <button class="gf-btn" onclick="filterSelection('tv')">Videos</button>


            </div>

            <!-- Gallery Grid Images -->
            <div class="gallery sets">

                <div class="gf-column wedding">
                    <img src="images/venue/wedding/IMG_20190428_112442.jpg" />
                </div>
                <div class="gf-column wedding">
                    <img src="images/venue/wedding/wedding1-1.png" />
                </div>
                <div class="gf-column wedding">
                    <img src="images/venue/wedding/wedding2.png" />
                </div>
                <div class="gf-column wedding">
                    <img src="images/venue/wedding/wedding3-1.png" />
                </div>

                <div class="gf-column wedding">
                    <img src="images/venue/wedding/IMG_20190428_113014.jpg" />
                </div>

                <div class="gf-column wedding">
                    <img src="images/venue/wedding/2018-07-10.jpg" />
                </div>

                <div class="gf-column wedding">
                    <img src="images/venue/wedding/20190714_154047.jpg" />
                </div>
                <!-- -----------------Wedding -------------------------- -->

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/1.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/2.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/3.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/4.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/5.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/6.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/7.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/8.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/9.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/10.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/11.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/12.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/13.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/2018-07-10 (1).jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/2018-07-10 (1)4.jpg" />
                </div>

                <div class="gf-column decoration">
                    <img src="images/venue/decoration/20180629_203624.jpg" />
                </div>


                <!-- ----------------- Decoration _----------------------- -->

                <div class="gf-column corporate">
                    <img src="images/venue/goverment/2018-07-10 (1).jpg" />
                </div>
                <div class="gf-column corporate">
                    <img src="images/venue/goverment/2018-07-10.jpg" />
                </div>
                <div class="gf-column corporate">
                    <img src="images/venue/goverment/20180826_144743.jpg" />
                </div>
                <div class="gf-column corporate">
                    <img src="images/venue/goverment/20181209_085001.jpg" />
                </div>
                <div class="gf-column corporate">
                    <img src="images/venue/goverment/IMG_20190706_124144.jpg" />
                </div>

                <!-- ------------- kitchen ------------------- -->

                <div class="gf-column kitchen">
                    <img src="images/venue/kitchen/2018-07-10-55.jpg" />
                </div>
                <div class="gf-column kitchen">
                    <img src="images/venue/kitchen/2018-07-10.jpg" />
                </div>
                <div class="gf-column kitchen">
                    <img src="images/venue/kitchen/2018-07-103r.jpg" />
                </div>


                <!-- --------------International --------------------- -->

                <div class="gf-column international">
                    <img src="images/venue/2018-09-29.jpg" />
                </div>
                <div class="gf-column international">
                    <img src="images/venue/2019-02-22.jpg" />
                </div>
                <div class="gf-column international">
                    <img src="images/venue/2019-02-222.jpg" />
                </div>
                <div class="gf-column international">
                    <img src="images/venue/parking.jpg" />
                </div>
                <!-- ++++++++++++++ TV ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="row">
                    <div class="col-sm col-md-6">
                        <div class="gf-column tv">
                            <iframe width="480" height="260" src="https://www.youtube.com/embed/jgpLzMxDzTc"
                                title="Akshardham Set At Messe Global Pune Laxmi Lawns" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm col-md-6">
                        <div class="gf-column tv">
                            <iframe width="480" height="260" src="https://www.youtube.com/embed/jY3VbhPYVfU"
                                title="A Fairytale Dream Wedding" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm col-md-6">
                        <div class="gf-column tv">
                            <iframe width="480" height="260" src="https://www.youtube.com/embed/SPE7GCVRTPY"
                                title="Capturing The Magic Of A Memorable Event" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm col-md-6">
                        <div class="gf-column tv">
                            <iframe width="480" height="260" src="https://www.youtube.com/embed/8vksXkuOsl8"
                                title="UAE Property Expo 2022 | At Messe Global Pune Laxmi Lawns" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="col-sm col-md-6">
                    </div>
                </div>





            </div>

            <div class="all-btn">
                <a href="#" style="color: white; text-decoration-line: none">MORE IMAGES </a>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php')?>

    <script>
    filterSelection("decoration");

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("gf-column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Highlight active button and current button
    var btnContainer = document.getElementById("gf-BtnContainer");
    var btns = btnContainer.getElementsByClassName("gf-btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("gf-btn-active");
            current[0].className = current[0].className.replace("gf-btn-active", "");
            this.className += " gf-btn-active";
        });
    }

    // Popup Gallery Script

    let imgs = document.querySelectorAll("img");
    let count;
    imgs.forEach((img, index) => {
        img.addEventListener("click", function(e) {
            if (e.target == this) {
                count = index;
                let openDiv = document.createElement("div");
                let imgPreview = document.createElement("img");
                let butonsSection = document.createElement("div");
                butonsSection.classList.add("butonsSection");
                let closeBtn = document.createElement("button");

                closeBtn.classList.add("closeBtn");
                closeBtn.innerText = "Close";
                closeBtn.addEventListener("click", function() {
                    openDiv.remove();
                });

                imgPreview.classList.add("imgPreview");
                imgPreview.src = this.src;

                //   butonsSection.append(prevButton, nextBtn);
                openDiv.append(imgPreview, butonsSection, closeBtn);

                openDiv.classList.add("openDiv");

                document.querySelector("body").append(openDiv);
            }
        });
    });
    </script>

</body>

</html>