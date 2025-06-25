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
    </style>
</head>
<header class="p-3 border-bottom bg-black">
    <a href="/admin" class="link-body-emphasis text-decoration-none d-flex  align-items-center justify-content-center">
        <img src="/favi.png" alt="Logo" width="50"> <span class="fs-3 fw-bold text-white">Real Estate</span> </a>
        <a href="<?php echo base_url("/admin/view_bookings")?>"><button class="btn btn-primary float-end">View Bookings</button></a>
</header>


<body>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <main>
        <div>
            <div class="px-4 py-5 mt-2 text-center">
                <h1 class="display-5 fw-bold text-body-emphasis">Add property</h1>
                <div class="col-lg-6 mx-auto">
                    <form id="propertyForm" class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="<?php echo base_url('/admin/add_property'); ?>" method="POST" enctype="multipart/form-data">
                       
                        <div class="mb-3">
                            <label for="propertyName" class="form-label">Property Name</label>
                            <input type="text" class="form-control" id="propertyName" name="property_name" placeholder="Enter property name" required>
                        </div>
                        <div class="mb-3">
                            <label for="propertyType" class="form-label">Property Type</label>
                            <select class="form-select" id="propertyType" name="property_type" required>
                                <option value="" disabled selected>Select property type</option>
                                <option value="flat">Flat</option>
                                <option value="villa">Villa</option>
                                <option value="plot">Plot</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">Area</label>
                            <input type="number" class="form-control" id="area" name="area" placeholder="Enter Area (sqft)" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter property description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter property address" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="imageUpload" name="images" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr />

        <div class="container">
        <div class="text-center m-5">
            <h2 class="fw-bold">Properties</h2>
            
        </div>
            <div class="row ">

            <?php 
            for($i = 0; $i < count($properties); $i++) {
            ?>
                <div class="col-lg-4 border p-3 my-2 rounded row-gap-3 gap-3"> 
                    <img src="<?php echo base_url($properties[$i]['image_path']); ?>" class="card-img-top" alt="Property Image" width="100%" height="200">
                      
                     <div class="card-body">
                        <br />
                            <h5 class="card-title">NAME: <?= ($properties[$i]['name']) ?></h5>
                            <p class="card-text"><strong>PRIZE: $<?= ($properties[$i]['price']) ?></strong></p>
                            <p class="card-text">TYPE : <?= ($properties[$i]['type']) ?></p>
                            <p class="card-text">DESCRIPTION : <?= ($properties[$i]['description'])?></p>
                            
                        </div>
                </div>
                 
                       
            <?php
            }

            ?>



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