<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!----My Css-->

    <style>

    section{
            min-height: 420px;
        }
    /* Stackoverflow preview fix, please ignore */
    .navbar-nav {
      flex-direction: row;
    }
    
    .nav-link {
      padding-right: .5rem !important;
      padding-left: .5rem !important;
    }
    
    /* Fixes dropdown menus placed on the right side */
    .ml-auto .dropdown-menu {
      left: auto !important;
      right: 0px;
    }
    a{
        color: black;
    }
  </style>
    <title>Khoironi</title>
  </head>
  <body>
    <div class="container fixed-top">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Khoironi</a>
            <ul class="navbar-nav mr-auto">
             
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link"  href="" >Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link"  href="#about" >About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link"  href="#portfolio" >Portfolio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link"  href="#contact" >Contact</a>
              </li>
              
              
            </ul>
          </nav>
    </div>

      <section>
          <div class="container pt-5">
              <div class="row pt-5 pb-5 justify-content-center">
                  <div class="col-md-5">
                      <img src="<?php echo base_url('assets/img/Component 4 – 1.png') ?>" width="100%">

                      <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime officia voluptate nam doloremque alias quo modi? Recusandae blanditiis, suscipit quia illum provident autem, inventore atque debitis nesciunt ullam, eos facere.</p>
					  <!-- <img class="pt-3" src="assets/img/Component 2 – 1.png" width="50%"> -->
					  <a href="#login" class="btn btn-danger">REQUEST ACCESS</a>
                  </div>

                  <div class="col-md-5">
                      <img src="assets/img/Component 3 – 1.png" width="100%">
                  </div>
              </div>
          </div>
      </section>


      <section id="about" class="about">
      <div class="container pt-2">
          <div class="row mb-4">
                <div class="col text-center">
                        <h2>About</h2>
                </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-5">
                  <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium quia, voluptatum molestiae debitis odit cumque. Quidem, inventore. Accusantium rerum, sit corrupti delectus amet dolore, veniam non placeat inventore velit nostrum.</p>

              </div>
              <div class="col-md-5">
                  <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, consequatur consectetur dicta quibusdam blanditiis nemo rerum debitis ullam aliquam, praesentium pariatur fuga nobis, qui quasi! In perspiciatis aliquam sunt reiciendis.</p>
              </div>
          </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio bg-light pb-4">
      <div class="container">
          <div class="row mb-4 pt-4">
              <div class="col text-center">
                  <h2>Portfolio</h2>
              </div>
          </div>

          <div class="row mb-4">
              <div class="col-md">
                    <div class="card">
                        <img src="assets/img/thumb/jakob-owens-MPU7_mQB_AY-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
              </div>

              <div class="col-md">
                    <div class="card">
                        <img src="assets/img/thumb/sandra-seitamaa-Gc2yBVxaEcc-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
              </div>

              <div class="col-md">
                    <div class="card">
                        <img src="assets/img/thumb/delaney-van-EUVN4bihZug-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
              </div>

          </div>
        


          <div class="row mb-4">
                <div class="col-md">
                      <div class="card">
                          <img src="assets/img/thumb/wolfgang-hasselmann-NF7s8UiUtkE-unsplash.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                </div>
  
                <div class="col-md">
                      <div class="card">
                          <img src="assets/img/thumb/zdenek-machacek-QH9gxlxrdl4-unsplash.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                </div>
  
                <div class="col-md">
                      <div class="card">
                          <img src="assets/img/thumb/kelly-sikkema-YzQ7ihyffCs-unsplash.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                </div>
  
            </div>
      </div>
    </section>

    <section id="contact" class="contact mb-4">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact Us</h2>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 ">
                    <div class="card text-white bg-primary mb-3" >
                   
                    <div class="card-body">
                        <h5 class="card-title text-center">Contact Us</h5>
                        <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </div>

                    <ul class="list-group">
                            <li class="list-group-item"><h1>Location</h1></li>
                            <li class="list-group-item">Mt Office</li>
                            <li class="list-group-item">Jl. Jodipati Mancasan kidul Condong Catur</li>
                            <li class="list-group-item">West Java Indonesia</li>
                            
                    </ul>
                </div>


                <div class="col-lg-6">
                    <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp">
                        <small id="namaHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="telpon">Telpon</label>
                        <input type="number" class="form-control" id="telpon" aria-describedby="telponHelp">
                        <small id="telponHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" aria-describedby="pesanHelp"></textarea>
                        <small id="pesanHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
	</section>

	<!--login-->
	<section id="login" class="login">
	
		<div class="container">
			<div class="row">
			<h2>Login</h2>
			</div>
			<div class="row">
			<div class="col-md-4 ">
					<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
				
			</div>
		</div>
	
	</section>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>Copyright. Khoironi 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>