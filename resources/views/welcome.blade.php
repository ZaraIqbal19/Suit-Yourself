@extends('layout')
@section ('content')

    <!-- Hero Slider -->
    <div id="heroCarousel"
         class="carousel slide carousel-fade hero-carousel"
         data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide"
                    style="background-image:url('{{ asset('User/images/textile.png') }}')">

                    <div class="overlay"></div>

                    <div class="hero-content">
                        <h1>Choose Your Own Fabric</h1>
                        <p>
                            Select your favorite fabric from our premium collection and create an outfit that matches your style perfectly.
                        </p>

                        <a href="#" class="btn btn-hero">
                            Explore Collection
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide"
                    style="background-image:url('{{ asset('User/images/measurement.png') }}')">

                    <div class="overlay"></div>

                    <div class="hero-content">
                        <h1>Custom Styling & Perfect Measurements</h1>

                        <p>
                           Get personalized styling and accurate measurements to ensure the perfect fit for every occasion.
                        </p>

                        <a href="#" class="btn btn-hero">
                            View Products
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide"
                    style="background-image:url('{{ asset('User/images/tailor.png') }}')">

                    <div class="overlay"></div>

                    <div class="hero-content">
                        <h1> Choose Your Tailor & Get Your Dress At Dashboard</h1>

                        <p>
                          Select your preferred tailor and enjoy doorstep fabric delivery from the comfort of your home.
                        </p>

                        <a href="#" class="btn btn-hero">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    <section class="about-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="about-heading">About <span>Suit Yourself</span></h2>
      <p class="about-intro mx-auto">
        Suit Yourself delivers premium custom tailoring crafted with modern designs, perfect fitting,
        and the finest quality fabrics. Every stitch reflects our commitment to elegance, comfort,
        and timeless style — tailored exclusively for you.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4 h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-scissors"></i>
          </div>
          <h5>Premium Fabrics</h5>
          <p>Hand-selected, high-quality materials sourced for durability and luxury feel.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4 h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-rulers"></i>
          </div>
          <h5>Perfect Fitting</h5>
          <p>Precision measurements ensure a flawless, comfortable, and confident fit.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4 h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-person-badge"></i>
          </div>
          <h5>Skilled Tailors</h5>
          <p>Expert craftsmen with years of experience in premium custom tailoring.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-card text-center p-4 h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-truck"></i>
          </div>
          <h5>Fast Delivery</h5>
          <p>Timely delivery without compromising on quality or attention to detail.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn btn-cta px-5 py-3">Explore Our Collection</a>
    </div>
  </div>
  

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection