<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>front-end starter kit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- STYLES -->

    <style {csp-style-nonce}>
        nav {
          width: 100%;
          margin: auto;
          line-height: 40px;
          background: #ffffff;
        }
        nav ul {
          list-style-type: none;
          margin: 0;
        }

        nav ul li {
          float: left;
        }

        nav ul li a {
          color: black;
          text-align: center;
          padding: 0px 16px 0px 16px;
          text-decoration: none;
        }
        .menu {
        	float: right;
        }
        .wrapper {
          width: 1100px;
          margin: auto;
          position: relative;
        }
        .carousel-item{
          height: 700px;
        }
        .card {
          height: 200px;
          width: 300px;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        .dropbtn {
          color: black;
          font-size: 16px;
          border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
          position: relative;
          display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #ddd;}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid wrapper">
    <a class="navbar-brand" href="#"><b>Company</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="menu">
      <ul> 
        <li>
        <div class="dropdown me-2">
          <button class="dropbtn">ABOUT</button>
            <div class="dropdown-content">
              <a style="text-align:start" href="#">HISTORY</a>
              <a href="#">VISION MISSION</a>
            </div>
        </div>
        </li>
        <li><a href="#work">OUR WORK</a></li>
        <li><a href="#team">OUR TEAM</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p style="text-align: left; background-color:rgb(0,0,0,0.5); margin-right: 500px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:x-large;">THIS IS A PLACE WHERE TECHNOLOGY & CREATIVITY FUSED INTO DIGITAL CHEMISTRY</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p style="text-align: left; background-color:rgb(0,0,0,0.5); margin-right: 500px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:x-large;">WE DON'T HAVE THE BEST BUT WE HAVE THE GREATEST TEAM</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<p style="text-align: center; line-height: 5; font-size:larger"><strong>OUR VALUES</strong></p>
<div class="container" style="text-align:center">
  <div class="row">
    <div class="col" style="padding-left: 100px;">
    <div class="card" style="margin-left: 80px">
      <div class="card-body" style="background-color:rgba(234,124,111,255);">
      <img src="img/ov1.png" class="card-img-top mb-1" style="width: 15px;" alt="...">
        <h5 class="card-title text-center">INNOVATIVE</h5>
        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem dolorem deserunt, unde, eaque ipsa?</p>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="margin-right: -60px">
      <div class="card-body" style="background-color:rgba(106,153,111,255);">
      <img src="img/ov2.png" class="card-img-top mb-2" style="width: 20px;" alt="...">
        <h5 class="card-title text-center">LOYALTY</h5>
        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit similique eum itaque facere temporibus dolores.</p>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="margin-left: -80px;">
      <div class="card-body" style="background-color:rgba(86,150,194,255);">
      <img src="img/ov3.png" class="card-img-top mb-2" style="width: 20px;" alt="...">
        <h5 class="card-title text-center">RESPECT</h5>
        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, sit? Tenetur et neque quod incidunt!</p>
      </div>
    </div>
    </div>
  </div>
</div>



</div>

<p style="text-align: center; line-height: 5; font-size:larger"><strong>CONTACT US</strong></p>
<div class="container" style="width:650px; margin:auto;">
<form class="row g-3 needs-validation" novalidate>
  <div class="col-mb-3">
    <label for="validationCustom03" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      This Field is required.
    </div>
  </div>
  <div class="col-mb-3">
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Invalid email address.
    </div>
  </div>
  <div class="col-mb-3">
    <label for="validationCustom03" class="form-label">Message</label>
    <textarea type="email" class="form-control" id="validationCustom03" cols="30" rows="4" required></textarea>
    <div class="invalid-feedback">
      This Field is required.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" style="width: 627px;" type="submit">Submit form</button>
  </div>
</form>
</div>

<script>
  (function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
    
    function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<footer style="background-color: black;" class="mt-5">

    <div class="copyrights" style="background-color: black;">

        <p class="mt-2">Copyright &copy; 2016. PT Company</p>
        <img src="img/fb.png" class="img-fluid mb-3" width="20px" alt="...">
        <img src="img/twt.png" class="img-fluid mb-3" width="20px" alt="...">
        
    </div>

</footer>



</body>
</html>
