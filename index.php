<!DOCTYPE html>
<html lang="en">

<head>
    <title>TravalNepal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Travel Nepal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/trek1.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">We love travelling.</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos similique debitis
                        quia corporis
                        eveniet quis sunt voluptas sint aperiam dignissimos doloribus, atque quidem a quibusdam
                        accusantium fugit fugiat sed ipsum animi repellat omnis culpa magnam.
                    </p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top fixed-img" src="img/ghum1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Ghandruk</h4>
                            <p class="card-text">Beautiful Village</p>
                            <a href="#" class="btn btn-primary">Add Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top fixed-img" src="img/ghum2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Chitwan National Park</h4>
                            <p class="card-text">Habitat of Animals</p>
                            <a href="#" class="btn btn-primary">Add Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top fixed-img" src="img/ghum3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mardi Himal</h4>
                            <p class="card-text">Mountains</p>
                            <a href="#" class="btn btn-primary">Add Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallary</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal2.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal3.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal4.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal5.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal6.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal7.jpg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal8.jpeg" class="img-fluid pb-3 gal">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/gal9.jpeg" class="img-fluid pb-3 gal">
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Form</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter username" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter phone" id="pwd">
                </div>
                <div class="form-group">
                    <label for="cmt">Comment</label>
                    <textarea name="comment" id="cmt" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-white text-center">@visitnepal2024</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>