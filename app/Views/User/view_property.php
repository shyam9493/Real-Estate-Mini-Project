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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        main {
            flex: 1;
        }
    </style>
</head>
<header class="p-3 border-bottom bg-black">
    <a href="" class="link-body-emphasis text-decoration-none d-flex  align-items-center justify-content-center">
        <img src="/favi.png" alt="Logo" width="50"> <span class="fs-3 fw-bold text-white">Real Estate</span> </a>
</header>


<body>


    <main>

        <div class="container">
            <div class="text-center m-5">
                <h2 class="fw-bold">Property Details <?= $id ?></h2>

                <div class="">
                    <div class="row g-0 overflow-hidden flex-md-row my-5 border">
                        
                        <div class="col-auto d-none d-lg-block"> 
                            <img src="<?= base_url($property['image_path']) ?>" class="img-fluid" alt="Property Image" style="width: 400px; height: 300px; object-fit: cover;">
                        </div>
                        <div class="col p-4 d-flex flex-column fs-6"> 
                            <strong class="d-inline-block mb-2 text-primary-emphasis fs-1"><?= esc($property['name']) ?></strong>
                          
                            <div class="mb-2 text-body-secondary"><strong>Type:</strong> <?= esc($property['type']) ?></div>
                            <div class="mb-2 text-body-secondary"><strong>Price:</strong> $<?= number_format($property['price'], 2) ?></div>
                            <div class="mb-2 text-body-secondary"><strong>Area:</strong> <?= esc($property['area_sqft']) ?> sqft</div>
                            <div class="mb-2 text-body-secondary"><strong>Address:</strong> <?= esc($property['address']) ?: 'Not specified' ?></div>
                            <div class="mb-2 text-body-secondary"><strong>Description:</strong> <?= esc($property['description']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-5 mt-2 text-center">
                <h1 class="display-5 fw-bold text-body-emphasis">Book this Property</h1>
                <div class="col-lg-6 mx-auto">
                    <form id="propertyForm" class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="<?= base_url('/book_property'); ?>" method="POST">
                        
                        <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Date & Time</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                        </div>


                        <button type="submit" class="btn btn-primary">Book Property</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

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