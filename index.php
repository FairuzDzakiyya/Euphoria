<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png" />
    <title>Euphoria Books</title>
    <style>
        .navbar {
            background: radial-gradient(rgb(250, 238, 209), rgb(178, 165, 155)), url('');
            color: #fff;
        }
        .banner {
            height: 500px;
            background-color: #FAEED1;
        }
        .card {
            background-position: center;
            margin-top: 3%;
            margin-left: 4%;
            border-radius: 10%;
            height: 300px;
            width: 200px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            margin-top: 30px;
        }
        .header img {
            width: 50%;
        }
        @media (max-width: 768px) {
            .header img {
                width: 50%;
            }
        }
        .section1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .section2 {
            background: radial-gradient(rgb(250, 238, 209), rgb(178, 165, 155)), url('');
            gap: 20px;
            padding: 20px;
            margin-top: 30px;
            width: 9%;
            height: 550px;
            border-radius: 30px;
            justify-content: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center">
            <h1>Euphoria Books</h1>
            <h3>Welcome To Euphoria Books Page</h3>
        </div>
    </div>
    <div class="container-fluid">
    <div class="header">
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <img src="assets/image/logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Text under the image</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container mt-5">
        <h2 class="mb-4">Recommended for you</h2>
        <div class="section1">
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="section2 mt-5">
        <h2 class="mb-4">Popular</h2>
        <div class="section1">
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
            <div class="card">
                <img src="assets/image/logo.png" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>  
</body>
</html>
