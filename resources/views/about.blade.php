<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduShape - About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #EED3D9, #F5E8DD, #B5C0D0);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #FFF; /* Text color to contrast with the background gradient */
        }
        .navbar {
            background-color: transparent;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-family: 'Baloo 2', cursive;
            color: #E19999; /* Coral color */
            font-weight: bold;
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.25rem;
            color: #776B5D;
            margin-bottom: 20px; /* Reduced margin */
        }
        .btn-primary {
            background-color: #83B582; /* Light green */
            border-color: #83B582;
            border-radius: 30px;
            font-family: 'Baloo 2', cursive;
            font-size: 1.25rem;
            padding: 10px 30px;
        }
        .btn-primary:hover {
            background-color: #776B5D; /* Brown color */
            border-color: #776B5D;
        }
        .about-content {
            background-color: rgba(255, 255, 255, 0.8); /* Translucent white background */
            border-radius: 20px;
            padding: 40px;
            max-width: 600px; /* Perlebar kotak about */
            width: 80%; /* Perlebar kotak about */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">EduShape</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="/cover">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pre-school">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="about-content">
            <h1>About Us</h1>
            <p>EduShape is a platform dedicated to providing educational videos for children of all ages. Our mission is to make learning fun and accessible to everyone.</p>
            <p>Our team consists of passionate educators and content creators who are committed to creating engaging and informative videos covering a wide range of subjects.</p>
            <p>Join us on this educational journey and help shape the future of learning!</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
