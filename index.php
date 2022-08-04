<?php 
include('layouthead.php');
include('backend_php/config.php');
?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">We Bring the<br>Good Shopping to life</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Easy and safe way to sell and shop your item here! You can become a seller or buyer.Make the new experience of shopping and get the high quality products at your doorsteps by making your life easier.</p>
                            <a href="login.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Order Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Vendors</h5>
                                <p>The best vendors around India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fas fa-gifts text-primary mb-4"></i>
                                <h5>Quality Products</h5>
                                <p>Quality products at reasonable price</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Get your order delivered at your door steps</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Services available at anytime and everyday</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to UDYOG HUT</h1>
                        <p class="mb-4">In this platform people can be self employed by creating a account which include their profile details and the products details along with the categories. In order to create an account they have to register by giving their details and upload their products with price He or she can create an account only after getting an approval from admin Once the account creation is done they can update their product details </p>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Products</h5>
                    
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                            <?php
                                  $stmt = $conn->prepare('SELECT * FROM products');
                                  $stmt->execute();
                                  $result = $stmt->get_result();
                                  while ($row = $result->fetch_assoc()):
                              ?>
                                      <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                          <a href="documents/products/<?php echo $row['image'];?>"><img class="flex-shrink-0 img-fluid rounded" src="documents/products/<?php echo $row['image'];?>" alt="" style="width: 80px;"></a>
                                          <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?= $row['product_name'] ?></span>
                                                <span class="text-primary"><?php echo number_format($row['price'],2) ?></span>
                                            </h5>
                                            <!-- <a href="product_det.php?key=<?php echo $row['id']; ?>"><b class="fst-italic">Read More >></b></a> -->
                                          </div>
                                        </div>
                                      </div>
                                <?php endwhile; ?>
                               
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->      
<?php include('footer.php')?>