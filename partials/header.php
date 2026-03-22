<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | <?= htmlspecialchars($profileName); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body style="color: white;">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top nav-glass">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">
                <?= htmlspecialchars($brandName); ?><span class="text-info">.</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navMenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#achievements">Achievements</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#certificates">Certificates</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>