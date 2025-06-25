<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="shortcut icon" type="image/png" href="/favi.png">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />


    <style>
        body {
            overflow-x: hidden;
            
        }

        body::-webkit-scrollbar {
            display: none;
        }
        main{
            background-image: url('/background.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
        }
    </style>
</head>
<header class="p-3 border-bottom bg-black">
    <a href="/" class="link-body-emphasis text-decoration-none d-flex  align-items-center justify-content-center">
        <img src="/favi.png" alt="Logo" width="50"> <span class="fs-3 fw-bold text-white">Real Estate</span> </a>
        
</header>


<body>


    <main class="d-flex align-items-center justify-content-center text-center  p-5">
        <div class="">
                <h1 class="display-4 fw-bold lh-1">Homes that suit your lifestyle, neighborhoods that match your vibe.</h1>
        </div>
    </main>

        <div class="container">
        <div class="text-center m-5">
            <h2 class="fw-bold">Properties</h2>
            
        </div>
     <div class="row ">

            <?php 
            for($i = 0; $i < 8; $i++) {
            ?>
                <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="./image.png" 
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
            <?php
            }

            ?>
        </div>
        </div>
    
        <footer class="py-3 bg-black">
        <p class="text-white text-center">© 2025 Real Estate</p>
    </footer>
            <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>

            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"></script>
</body>

</html>