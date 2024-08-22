<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Company</title>
    @vite('resources/js/app.js')
    <link href="{{ asset('build/app.css') }}" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #343a40;
            color: #fff;
            padding: 1rem;
            overflow: hidden;
        }
        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .navbar-nav .nav-item {
            margin-right: 1rem;
        }
        .navbar-nav .nav-link {
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            display: block;
            transition: background-color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            background-color: #495057;
            border-radius: 0.25rem;
        }

        /* Banner Section */
        .hero {
            background-color: #007bff;
            color: #fff;
            padding: 5rem 0;
            text-align: center;
        }
        .hero .btn {
            background-color: #fff;
            color: #007bff;
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            border: none;
            border-radius: 0.25rem;
        }
        .hero .btn:hover {
            background-color: #e9ecef;
        }

        /* Services Section */
        .card {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            margin-bottom: 1rem;
        }
        .card-body {
            padding: 1.25rem;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a class="navbar-brand" href="#">Software Company</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Banner Section -->
    <header class="hero">
        <div class="container">
            <h1 class="display-4">Welcome to Our Software Company</h1>
            <p class="lead">We provide top-notch software solutions for your business.</p>
            <a href="#services" class="btn btn-light btn-lg">Learn More</a>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">Web Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">Mobile Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">Project Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Software Company. All rights reserved.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
    <script src="/build/app.js" defer></script>
</body>
</html>
