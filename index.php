<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca82e8f43a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Car Rental</title>
    </head>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <!-- <button onclick="window.location.href ='/signin.php'">Sign in</button> -->
            <form action="login.php" method="post">
                <button type="submit" name="submit">signin</button>
            </form>

        </ul>
    </nav>

    <!-- section1 -->
    <section>
        <div class="container1">
            <div class="text-section">
                <h2 >THE EASY WAY TO <br>TAKE OVER A LEASE </h2>
                <p>Live in New York, New Jerset and Connecticut!.</p>
            </div>
            <div class="image-section"></div>
        </div>

    </section>


    <!-- section2 -->
   <section>
        <h1>Feature Cars</h1>
        <div class="container">
            <div class="card">
                <img src="img1.jpg" alt="Car 1">
                <h2>Toyota RAV4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="card">
                <img src="img2.jpg" alt="Car 2">
                <h2>BMW 3 Series</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="card">
                <img src="img3.jpg" alt="Car 3">
                <h2>Volkswagen T-Cross</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <br>
        </div>
        <div class="container">
            <div class="card">
                <img src="img4.jpg" alt="Car 3">
                <h2>Cadillac Escalade</h2>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="card">
                <img src="img5.jpg" alt="Car 3">
                <h2>BMW 4 Series GTI</h2>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="card">
                <img src="img6.jpg" alt="Car 3">
                <h2>BMW 4 Series</h2>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Suspendisse et congue est.</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div>
    </section>

    <!-- section3 -->
    <section>
        <h1>Get started with 4 simple steps</h1>
        <div class="container3">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
                <div id="para">
                    <h5>Create a Profile</h5>
                </div>
                <div id="para1">
                    <p>If you are going to use a passage of Lorem Ipsum</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa-solid fa-car-side"></i></div>
                <div id="para">
                    <h5>Tell us what car you want</h5>
                </div>
                <div id="para1">
                <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa-solid fa-user-check"></i></i></div>
                <div id="para">
                    <h5>Match with seller</h5>
                </div>
                <div id="para1">
                    <p>It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa-solid fa-file-pen"></i></div>
                <div id="para">
                    <h5>Make a deal</h5>
                </div>
                <div id="para1">
                    <p>There are many variations of passages of Lorem available, but the majority have suffered alteration</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section4 -->

    <section>
        <h1 style="margin-top: 110px;">Our Blog</h1>
        <div class="container4" id="section1">
            <img src="image1.jpg" alt="An Example Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet, massa eget fringilla feugiat, enim lacus consectetur nibh, non tincidunt leo lectus ut lacus. </p>
            <!-- <button class="slide-button" onclick="showNextSection(2)">Next</button> -->

        </div>
        <div class="container4"id="section2">
            <img src="image2.jpg" alt="An Example Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet, massa eget fringilla feugiat, enim lacus consectetur nibh, non tincidunt leo lectus ut lacus. </p>
        </div>
        <div class="container4"id="section3">
            <img src="image3.jpg" alt="An Example Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet, massa eget fringilla feugiat, enim lacus consectetur nibh, non tincidunt leo lectus ut lacus. </p>
        </div>
        <div class="container4"id="section4">
            <img src="image4.jpg" alt="An Example Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet, massa eget fringilla feugiat, enim lacus consectetur nibh, non tincidunt leo lectus ut lacus. </p>
            <!-- <button class="slide-button" onclick="showNextSection(5)">Next</button> -->
        </div>

    </section>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>

