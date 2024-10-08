<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="/images/logo.png">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        body, html {
            height: 100%;
            margin: 0;
            font-family: "Roboto", sans-serif;  
        }

        .content {
            margin-top: 70px;
        }

        .catalog-title {
            font-size: 60px; /* Increased font size */
            font-weight: bold;
            color: black; 
            text-shadow: 0 0px 0px 3px rgba(0, 0, 0, 0.5); /* Shadow only at the bottom */
        }

        .catalog-subtitle {
            font-size: 18px; /* Smaller font size */
            color: gray;
            font-weight: 300; /* Thin weight */
            text-align: center; /* Center align */
            margin-top: 10px; /* Space above the text */
        }

        .divider {
            height: 1px;
            background-color: lightgray; /* Color for the divider line */
            margin: 20px 0; /* Space above and below the line */
        }

        .logo {
            width: 40px; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .catalog-container {
            width: 80%; /* Set width to 80% of the screen */
            margin: auto; /* Center the catalog container */
        }
        .navbar-toggler {
            border: none; /* Remove border */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-apple" style="font-size: 20px"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <h5 class="navbar-brand">Apple.</h5>
                </a>    
                <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('product')}}">Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        <div class="catalog-container"> <!-- Catalog container div -->
            <div class="text-center mb-3">
                <h1 class="catalog-title">Our Catalog</h1>
            </div>
            
            <!-- Subtitle for catalog -->
            <div class="catalog-subtitle">
                We are committed to crafting high-quality products that not only meet your needs but also enhance your everyday life. We believe in innovation and excellence, ensuring every item we create brings joy and satisfaction.
            </div>
            
            <!-- Divider line -->
            <div class="divider"></div>
            
            <!-- Card layout -->
            <div class="row"> <!-- Start of Bootstrap row -->
                @if ($product->isEmpty())
                    <div class="col-12 text-center">
                        <h5 class="text-muted text-danger">Data Kosong</h5>
                    </div>
                @else
                    @foreach ($product as $products)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="p-3 text-center">
                                    <h1>{{ $products->product }}</h1>
                                    <p>{{ $products->deskripsi }}</p>
                                    <a href="#" class="btn btn-outline-dark">View Product</a>
                                </div>
                                    
                            </div>
                        </div>
                        @if (($loop->iteration % 3) == 0) 
                            </div><div class="row"> 
                        @endif
                    @endforeach
                    </div> 
                @endif
            </div> 
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
