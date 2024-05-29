<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduKids Videos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F5E8DD; /* Warna krem */
            font-family: 'Nunito', sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .video-thumbnail {
            position: relative;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .video-thumbnail iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #776B5D;
        }
        .navbar {
            background-color: #65647C; /* 0xffB5C0D0 */
        }
        .navbar-brand, .nav-link {
            color: #F5E8DD; /* 0xff776B5D */
            font-size: 20px;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #F5E8DD; /* 0xffE19999 */
        }
        .sidebar {
            background-color: #B5C0D0; /* Light green */
            padding: 20px;
            font-size: 12px;
        }
        .card {
            background-color: #CCD3CA; /* 0xffCCD3CA */
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-body {
            color: #65647C; /* 0xff65647C */
        }
        .btn-primary {
            background-color: #83B582; /* 0xff83B582 */
            border-color: #83B582;
            border-radius: 30px;
            font-family: 'Baloo 2', cursive;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #776B5D; /* 0xff776B5D */
            border-color: #776B5D;
        }
        h1 {
            font-family: 'Baloo 2', cursive;
            color: #E19999; /* 0xffE19999 */
            font-weight: bold;
            text-align: center;
        }
        .card-text {
            font-family: 'Baloo 2', cursive;
        }
        .footer {
            background-color: #65647C; /* 0xffB5C0D0 */
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }
        .footer span {
            color: #F5E8DD; /* 0xff776B5D */
        }
        .main-content {
            display: flex;
        }
        .content {
            flex: 1;
        }
        .image-container img {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
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
    <div class="main-content">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
            <h5>Education Class</h5>
            <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="/pre-school">PreeSchool</a></li>
                <li class="nav-item"><a class="nav-link" href="/elementary">Elementary</a></li>
                <li class="nav-item"><a class="nav-link" href="/middle">Middle</a></li>
                <li class="nav-item"><a class="nav-link" href="/high">High</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Languages</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Arts</a></li> -->
            </ul>
            </ul>
        </div>
        <!-- Sidebar -->
    <!-- <div class="row">
        <div class="col-md-2 sidebar">
            <h5>Education Topics</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="#">Science</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Mathematics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">History</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Geography</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Languages</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Arts</a></li>
            </ul>
        </div> -->

        <!-- Video Content -->
        <div class="content col-md-9"><br>
            <h1 class="mb-5">Welcome to EduShape Videos</h1>
            <div class="row">
               <!-- Video 1 -->
<div class="col-md-6 mb-4">
    <div class="card">
        <div class="video-thumbnail">
            <iframe id="video1" src="https://www.youtube.com/embed/VMmPYQa2rts" allowfullscreen></iframe>
        </div>
        <div class="card-body">
                        <h5 class="card-title">Matematika Super Keren</h5>
                        <p class="card-text">Pelajaran matematika yang menyenangkan untuk anak SMP.</p>
            <button onclick="playVideo('video1')" class="btn btn-primary">Watch Now</button>
        </div>
    </div>
</div>

<script>
    function playVideo(videoId) {
        var video = document.getElementById(videoId);
        video.src += "?autoplay=1"; // Memulai pemutaran otomatis
        video.requestFullscreen(); // Memperbesar layar
    }
</script>
                <!-- Video 2 -->
                <div class="col-md-6 mb-4">
    <div class="card">
        <div class="video-thumbnail">
            <!-- Menggunakan URL embed dengan video ID -->
            <iframe id="video1" src="https://www.youtube.com/embed/Vr8p_d7DJg8" allowfullscreen></iframe>
        </div>
        <div class="card-body">
        <h5 class="card-title">Petualangan Sains Ajaib</h5>
                        <p class="card-text">Pelajaran IPA yang seru untuk anak SMP.</p>
            <button onclick="playVideo('video1')" class="btn btn-primary">Watch Now</button>
        </div>
    </div>
</div>

<script>
    function playVideo(videoId) {
        var video = document.getElementById(videoId);
        video.src += "?autoplay=1"; // Memulai pemutaran otomatis
        video.requestFullscreen(); // Memperbesar layar
    }
</script>
<!-- Video 3 -->
<div class="col-md-6 mb-4">
    <div class="card">
        <div class="video-thumbnail">
            <iframe id="video1" src="https://www.youtube.com/embed/VMmPYQa2rts" allowfullscreen></iframe>
        </div>
        <div class="card-body">
        <h5 class="card-title">Matematika Super Keren</h5>
                        <p class="card-text">Pelajaran matematika yang menyenangkan untuk anak SMP.</p>
            <button onclick="playVideo('video1')" class="btn btn-primary">Watch Now</button>
        </div>
    </div>
</div>

<script>
    function playVideo(videoId) {
        var video = document.getElementById(videoId);
        video.src += "?autoplay=1"; // Memulai pemutaran otomatis
        video.requestFullscreen(); // Memperbesar layar
    }
</script>
                <!-- Video 2 -->
                <div class="col-md-6 mb-4">
    <div class="card">
        <div class="video-thumbnail">
            <!-- Menggunakan URL embed dengan video ID -->
            <iframe id="video1" src="https://www.youtube.com/embed/Vr8p_d7DJg8" allowfullscreen></iframe>
        </div>
        <div class="card-body">
        <h5 class="card-title">Petualangan Sains Ajaib</h5>
                        <p class="card-text">Pelajaran IPA yang seru untuk anak SMP.</p>
            <button onclick="playVideo('video1')" class="btn btn-primary">Watch Now</button>
        </div>
    </div>
</div>

<script>
    function playVideo(videoId) {
        var video = document.getElementById(videoId);
        video.src += "?autoplay=1"; // Memulai pemutaran otomatis
        video.requestFullscreen(); // Memperbesar layar
    }
</script>
                
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <span>&copy; 2024 EduKids Videos. All rights reserved.</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
