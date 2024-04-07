<?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services | InReach</title>
  <link href="nav-bar-styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <nav class="navbar bg-primary sticky-top">

    <div class="container">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <span class="navbar-brand fs-2 text-light">
              In<b>Reach</b>
            </span>
          </div>
          <div class="col-lg-4">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2 col-lg-2" type="search" placeholder="Search for any service..." aria-label="Search">
                <button class="btn btn-info text-light" type="submit">Search</button>
              </form>
            </div>
          </div>
          <div class="col-lg-4 d-flex justify-content-end ">
            <a class="text-light links p-1 mx-2" href="log-in.php"> Log in </a>
            <a class="text-light btn btn-info links p-1 px-2" href="sign-up.php"> Sign up </a>
          </div>
        </div>
      </div>


    </div>

  </nav>





  <div>
    <div class="navigation-container">
      <div class="float-item">
        <p>You are here: <a href="index.php" class="hover">Home</a>/ Profile</p>
      </div>
    </div>
  </div>

  <div class="box" id="myDiv">
    <div class="advisory-message">
      <div class="advisory-text-div">
        <h3>ADVISORY!</h3>
        <button class="advisory-remove-button" onclick="hideDiv()">&#10005;</button>
      </div>

      <div>
        <p class="advisory-paragraph">InReach is dedicated to offering information about various In-person service providers in Iligan City. The details provided here are sourced from local service providers and adhere to the goals established by the InReach.</p>
        <p class="advisory-paragraph">It's important to clarify that InReach is not involved in the processing or facilitation of service applications. Any inquiries, service requests, or related questions should be directed to the respective service providers whose contact information is made available on this website.</p>
        <p class="advisory-paragraph">It's crucial to note that the Iligan City Community Services does not guarantee the accuracy, completeness, or suitability of the information presented on this platform. We disclaim any legal liability or responsibility for the outcomes arising from the use of the information provided. Users are encouraged to verify details directly with the concerned service providers.</p>
      </div>
    </div>
  </div>

  <script>
    function hideDiv() {
      var div = document.getElementById('myDiv');
      div.classList.add('hidden');
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>