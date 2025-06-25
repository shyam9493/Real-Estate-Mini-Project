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
    <a href="/admin" class="link-body-emphasis text-decoration-none d-flex  align-items-center justify-content-center">
        <img src="/favi.png" alt="Logo" width="50"> <span class="fs-3 fw-bold text-white">Real Estate</span> </a>
</header>

    <body>

        <main>
            <div class="container mt-5">
                <h1 class="text-center mb-4">Bookings</h1>
                <table class="table table-striped w-100 table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Property ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($bookings)): ?>
                        <tr>
                            <td colspan="7" class="text-center">No bookings found.</td>
                        </tr>
                        <?php endif; ?>
                        <?php if(!empty($bookings)) :
                        foreach ($bookings as $booking): ?>
                        <tr>
                            <td><?= esc($booking['id']) ?></td>
                            <td><?= esc($booking['property_id']) ?></td>
                            <td><?= esc($booking['name']) ?></td>
                            <td><?= esc($booking['email']) ?></td>
                            <td><?= esc($booking['phone']) ?></td>
                            <td><?= esc($booking['datetime']) ?></td>
                            <td><?= esc($booking['created_at']) ?></td>
                        </tr>
                        <?php endforeach;
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
       <footer class="py-3 bg-black">
        <p class="text-white text-center">© 2025 Real Estate</p>
    </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
