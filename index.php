<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CricZat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container" id="header-section">
        <div class="navigation-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand nav-icon" href="#">CricZat</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Series</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="window.location.replace('posts.php');">Posts</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Quiz</a>
                      </li> -->
                      <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Photo Gallery</a></li>
                          <li><a class="dropdown-item" href="#">Rankings</a></li>
                          <li><a class="dropdown-item" href="#">Stats</a></li>
                          <li><a class="dropdown-item" href="#">Teams</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search by players, teams.." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="window.location.replace('login.php');"><i class="bi bi-person-circle">Login</i></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>

    <section class="container">
      <div class="matches">
        <div class="items">
          <p>Match-1</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
        <div class="items">
          <p>Match-2</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
        <div class="items">
          <p>Match-3</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
        <div class="items">
          <p>Match-4</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
        <div class="items">
          <p>Match-5</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
        <div class="items">
          <p>Match-6</p>
          <h6>Batting</h6>
          <h6>Bowling</h6>
          <p>Need 14 runs</p>
        </div>
      </div>
    </section>

    <section class="container main-body">
      <div class="row">
        <div class="col-7">
          <h3>Featured Post</h3>
          <div class="post-front">
            <div class="show-img">
              <img class="w-100 news-front-img" src="logos/frontpost.jpg" alt="">
            </div>
            <div class="identity d-flex align-items-center">
              <img class="profile-img" src="logos/profile.png" alt="">
              <div class="profile-title">
                <h4>Posts Title</h4>
              <h3>Post Giver Name</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 news-front">
          <h3>News</h3>
          <div class="news-body">
            <div>
              <img src="logos/frontpost.jpg" alt="">
            </div>
            <div class="news-title">
              <h4>This is news title</h4>
              <p>Time yy/mm/dd</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-3 footer-img footer-col">
          <img src="logos/footer.png" alt="">
        </div>
        <div class="col-3 footer-col">
          <h3>Follow Us On</h3>
          <a href="">Facebook</a><br>
          <a href="">Twitter</a><br>
          <a href="">Instagram</a>
        </div>
        <div class="col-3 footer-col">
          <h3>About</h3>
          <a href="">Privacy Policy</a><br>
          <a href="">Terms of Use</a><br>
          <a href="">Careers</a><br>
          <a href="">Advertisement</a>

        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>