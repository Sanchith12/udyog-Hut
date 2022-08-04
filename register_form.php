<?php include('layouthead.php') ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Register</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item "><a href="login.php">Login</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                           
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Register</h5>
                    <h1 class="mb-5">Please Fill all the details</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form id="contact-form" method="POST" action="backend_php/register.php">
                                <div class="row g-3"> 
                                <div class="col-md-12">
                                        <div class="form-floating">
                                        <input type="text" class="form-control"  name="name" placeholder="Name" pattern="[a-zA-Z\s]+" autocomplete="off" required>
                                            <label for="email">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="date"  name="dob"  autocomplete="off" required class="form-control">
                                            <label for="subject">Date Of birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" placeholder="Email" required class="form-control">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                        <input type="password" class="form-control" placeholder="Password" name="password" placeholder="Passowrd:" required>
                                            <label for="subject">Password</label>
                                        </div>
                                    </div>                                  
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <input type="text"  class="form-control" name="number"  pattern="[6789][0-9]{9}" minlength="10" maxlength="12" placeholder="Phone:">
                                            <label for="email">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control"  name="address" placeholder=" Address :" style="height: 100px"></textarea>
                                            <label for="subject">Address</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="SignUp" type="submit">Register</button>
                                    </div>
                                    <div  class="form-floating text-center">
                                        <a href="login.php">Have a Account? Login Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('footer.php') ?>