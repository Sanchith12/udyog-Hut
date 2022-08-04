<?php include('layouthead.php') ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="register_form.php">Register</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><a href="login.php">Login</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Login</h5>
                    <h1 class="mb-5">Please Fill all the details</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form id="contact-form" action="backend_php/login_verify.php" method="post">
                                <div class="row g-3">                                   
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" name="email" placeholder="Email" required class="form-control">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                        <input type="password" class="form-control" placeholder="Password" name="password" placeholder="Passowrd:" required>
                                            <label for="subject">Password</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="btnLogin" type="submit">Login</button>
                                    </div>
                                    <div  class="form-floating text-center">
                                        <a href="register_form.php">Dont Have a Account? Register Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('footer.php') ?>