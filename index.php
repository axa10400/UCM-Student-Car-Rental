<?php include('includes/header.php'); ?>

<div class="container">
    <?= alertSuccess(); ?>
</div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="main-heading">Welcome to <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <div class="underline mx-auto"></div>
                <p>
                Welcome to UCM Car Rental Service! Embark on your journey with confidence as you explore our wide range of reliable vehicles, tailored to suit your every need. Whether you're a student in search of convenient transportation or a traveler seeking adventure, UCM is here to make your experience seamless and enjoyable. Browse our diverse fleet, book with ease, and prepare for a hassle-free rental experience. With competitive rates, flexible rental plans, and a commitment to excellence, UCM Car Rental Service is your trusted partner on the road. Welcome aboard, and let's make your journey unforgettable!
                </p>
            </div>
        </div>
    </div>
</div>


<div class="bg-car1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-white">Rent a car in few steps</h2>
                <div class="underline"></div>
                <h4 class="text-white">Drive worry free with <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <h4 class="text-white">24X7 Roadside assistance whenever you need</h4>
            </div>
            <div class="col-md-4 my-auto">
                <a href="cars.php" class="btn btn-web text-white w-100 fw-bold">Book a car now !</a>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="main-heading text-center">Our Testimonials</h4>
                <div class="underline mx-auto"></div>

                <div class="owl-carousel owl-theme car-testi">
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Smith</h4>
                            <p class="testi-para">
                            UCM Car Rental Service exceeded my expectations! The booking process was quick and easy, and the vehicle was in pristine condition. I highly recommend UCM for anyone in need of reliable transportation.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Hammer Jackson</h4>
                            <p class="testi-para">
                            UCM Car Rental Service provided me with a stress-free experience from start to finish. The online booking process was straightforward, and the staff were friendly and helpful when I picked up the vehicle. The car was clean, comfortable, and reliable throughout my entire trip. I will definitely be using UCM for all my future rental needs!
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Stacy Ville</h4>
                            <p class="testi-para">
                            Renting from UCM Car Rental Service was a game-changer for my road trip. The variety of vehicles available allowed me to choose the perfect one for my adventure. The process was seamless, the rates were competitive, and the customer service was top-notch. I can't wait to rent from UCM again for my next journey!
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
