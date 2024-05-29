<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduShape</title>
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
            padding: 10px;
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
            margin-bottom: 10px;
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
        .image-container img {
            width: 60%;
            max-width: 600px;
            border-radius: 15px;
            margin-bottom: 1rem;
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
        <h1>Welcome to EduShape!</h1>
        <p>Explore a world of educational videos for kids of all ages.</p>
        <div class="image-container">
            <img src="https://threedio-cdn.icons8.com/LiVRb9KAlixryWLXpirOzvTUI5X-QseJMpJyHWv93DA/rs:fit:1024:1024/czM6Ly90aHJlZWRp/by1wcm9kL3ByZXZp/ZXdzLzk3OS83ZmU5/NmMzMC01NWZmLTRh/OTAtYWY2OS03NmE5/NWRkNDNkMzgucG5n.png" alt="Educational Image">
        </div>
        <a href="/pre-school" class="btn btn-primary">Get Started</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
