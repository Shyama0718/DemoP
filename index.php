<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEMO PROJECT</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include 'partials/_header.php'?>
    

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider_1650448056.png" width="200" height="700" class="d-block w-100" alt="...">
                <div class="searchengine">
                    <h1>Learn on your schedule</h1>
                    <p>Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>
                    <div class="search-container">
                        <input class="form-control me-2" type="search" placeholder="What do you want to learn ?"
                            aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">
                            <img src="img/pngwing.com.png" alt="Search" width="30" height="30">
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider_1650541225.png" width="200" height="700" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider_1650448041.png" width="200" height="700" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Constant div -->
    <div class="horizontal-text">
        <img src="img/bull.png" width="100" height="100">
        <p>58 Online courses<br>
            Explore a variety of fresh topics</p>
        <img src="img/109613.png" width="80" height="80">
        <p>Lifetime access
            Learn on your schedule</p>
        <a href="https://play.google.com/store/apps/details?id=com.okcl.learningcompanion" target="blank">
            <img src="img/Google_Play_Store_badge_EN.svg.png" alt=".." width="300" height="100">
        </a>
    </div>




    <!--First Content-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>eschool</h2>
            
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/x.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class X</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/IX.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class IX</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/8.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class VIII</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    <!--Second Content Course-->

    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>Keonjhar Smart LAB at Colleges</h2>
            
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/quantitative.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <p>OKCL Competitive Examination Preparation Materials</p>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>



    <!--Third Content Course-->

    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>Application</h2>
            
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/mu odia.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class X</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>RS.2500</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <!--Fourth Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>Artificial Intelligence</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/AI.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class X</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--Fifth Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>eSchool (CBSE)</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/CBSE(1).jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class I (CBSE)</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/CBSE(2).jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class II (CBSE)</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/CBSE(3).jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class III (CBSE)</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" ><strike>Rs.2500</strike>
                            <p>RS.763</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--Six Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>OKCL Achievers' Series</h2>
            
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/ASO.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>OKCL Achievers Series - ASO - Online Class</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.4237</strike>
                            <p>Rs.2119</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/Banking.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>OKCL Achievers Series - Banking - Online Class</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.4237</strike>
                            <p>Rs.2119</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/B.ed.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>OKCL Achievers Series - B.Ed Science</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" ><strike>Rs.4237</strike>
                            <p>Rs.2119</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>


    <!--Seven Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>eSchool Demo</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/eSchoolDemo.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>eSchool DEMO Course</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>FREE</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--Eight Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>Free</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/HSCEXAM.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>HSC Practice Test - 2023-24</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>FREE</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/SpokenEnglish.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>OKCL Spoken English Course</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>RS.5000</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/FreeSpokenEnglish.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Class VIII</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" >
                            <p>Free</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--Nine Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>CLASS-2</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
    </div>

    <!--Ten Content Course-->
    <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>QUIZ</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/republic.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>e Test on Republic Day</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>FREE</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/health.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>e Test on World Health Day</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" >
                            <p>FREE</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/Management-Game.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>Management Game</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" >
                            <p>FREE</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

     <!--Eleven Content Course-->
     <div class="container my-3">
        <div class="myContent">
            <div class="eschoolContent">
                <h2>Institutional Purchase</h2>
                <button type="submit" value="submit">View All</button>
            </div>
        </div>
        <div class="demoCard">
                <div class="cardContent">
                    <div class="cardImg">
                    <img src="img/IX-International.jpg" alt="..">
                    </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>eSchool - Class (IX) Institutional Purchase</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.16949.15</strike>
                            <p>RS.6356</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/X-International.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>eSchool - Class (X) Institutional Purchase</h5>
                        </div>
                        <div class="cardContent-footer">
                            <div class="price" ><strike>Rs.16949.15</strike>
                            <p>RS.6356</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
                <div class="cardContent">
                    <div class="cardImg">
                        <img src="img/IX-X-International.jpg" alt="..">
                        </div>
                    <div class="cardContent-body">
                        <div class="cardContent-head">
                        <h5>eSchool - Class (IX-X) Institutional Purchase</h5>
                        </div>
                        <div class="cardContent-footer">
                          <div class="price" ><strike>Rs.33898.31</strike>
                            <p>RS.12712</p>
                            </div>
                            <p>+GST</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        var carousel = document.getElementById('carouselExampleIndicators');
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 5000, // Set the slide interval to 5 seconds (5000 milliseconds)
            wrap: true // Enable wrapping for infinite scrolling
        });
    </script>
</body>

</html>
