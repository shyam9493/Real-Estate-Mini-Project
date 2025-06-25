<!-- common php file for rendering content of the property -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Property</title>
    <link rel="shortcut icon" type="image/png" href="/favi.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            overflow-x: hidden;
        }

        body::-webkit-scrollbar {
            display: none;
        }
        .property-image {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header class="p-3 border-bottom bg-black">
        <a href="/" class="link-body-emphasis text-decoration-none d-flex align-items-center justify-content-center">
            <img src="/favi.png" alt="Logo" width="50"> <span class="fs-3 fw-bold text-white">Real Estate</span>
        </a>
    </header>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $property['image']; ?>" alt="Property Image" class="property-image rounded">
            </div>
            <div class="col-md-6">
                <h1><?php echo $property['title']; ?></h1>
                <p><?php echo $property['description']; ?></p>
                <p><strong>Price:</strong> <?php echo $property['price']; ?></p>
                <p><strong>Location:</strong> <?php echo $property['location']; ?></p>
                <a href="<?php echo base_url('/book_now'); ?>" class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <div class="mt-5">
            <h2>Property Details</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>Bedrooms:</strong> <?php echo $property['bedrooms']; ?></li>
                <li class="list-group-item"><strong>Bathrooms:</strong> <?php echo $property['bathrooms']; ?></li>
                <li class="list-group-item"><strong>Area:</strong> <?php echo $property['area']; ?> sq ft</li>
                <li class="list-group-item"><strong>Type:</strong> <?php echo $property['type']; ?></li>
            </ul>
        </div>
    </main>
    <footer class="py-3 bg-black mt-5">
        <p class="text-white text-center">© 2025 Real Estate</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-7+9z6b1d6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>
</body>
</html>
