<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../resources/css/app.css">
</head>
<body class="main">
    <div id="front">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <div id="who">
            <label class="text-main">Hello, I'm</label>
            <p class="text-main name">JAMES ODIKE</p>
            <label id="undertext">And this is my portfolio</label>
        </div>        
    </div>

    <div id="featured">
        <p>Featured <b>Portfolio</b></p>
    </div>
    
    <div class="container">
        <div class="row">
          <div class="proj col-md-4 col-sm-6">
            <img class="project-image" src="images/noteit.webp" alt="">
            <h5 class="text-main">Note It</h5>
            <label class="text-main">Android Application(Kotlin)</label>
          </div>
          
          <div class="proj col-md-4 col-sm-6">
            <img class="project-image" src="images/protrnd-logo.svg" alt="">
            <label class="text-main"><h5 class="text-main">Protrnd</h5>Software Application</label>
          </div>
          
          <div class="col-md-4 col-sm-6">
            <img class="project-image" src="images/noteit.webp" alt="">
          </div>
          <!-- Add more divs as needed -->
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>