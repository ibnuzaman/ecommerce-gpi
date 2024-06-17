<x-my-component.app-layout>
    <x-my-component.navbar />
    <section class="d-flex hero-section">
        <div class="hero-container container-fluid">
            <h1>Ingin Menemukan</h1>
            <h1> Produk Lebih Banyak?</h1>
            <a href="{{ route('produk') }}"><button class="btn btn-light"><span>Cek Disini</span></button></a>
        </div>
    </section>

    <section class="about">
        <div id="carouselExample" class="carousel slide carousel-landing" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item car-item-landing active" id="gpi">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <img class="d-block img-fluid" src="./assets/img/logo.jpg" alt="First slide">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget condimentum risus.
                                Etiam vitae augue neque. Donec ultrices elit augue, eget consectetur felis molestie non.
                                In metus ligula, auctor sit amet rutrum id, eleifend at odio. Donec blandit purus quis
                                augue efficitur congue. Cras tincidunt porta tincidunt. Quisque ultricies ac mauris non
                                hendrerit. Proin congue felis a nisl vulputate, non suscipit ipsum dapibus.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item car-item-landing" id="garish">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <img class="d-block img-fluid" src="./assets/img/carousel-igarish.png" alt="Second slide">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget condimentum risus.
                                Etiam vitae augue neque. Donec ultrices elit augue, eget consectetur felis molestie non.
                                In metus ligula, auctor sit amet rutrum id, eleifend at odio. Donec blandit purus quis
                                augue efficitur congue. Cras tincidunt porta tincidunt. Quisque ultricies ac mauris non
                                hendrerit. Proin congue felis a nisl vulputate, non suscipit ipsum dapibus.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item car-item-landing" id="tridaya">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <img class="d-block img-fluid" src="./assets/img/carousel-tridaya.png" alt="Third slide">
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 py-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget condimentum risus.
                                Etiam vitae augue neque. Donec ultrices elit augue, eget consectetur felis molestie non.
                                In metus ligula, auctor sit amet rutrum id, eleifend at odio. Donec blandit purus quis
                                augue efficitur congue. Cras tincidunt porta tincidunt. Quisque ultricies ac mauris non
                                hendrerit. Proin congue felis a nisl vulputate, non suscipit ipsum dapibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="custom-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="custom-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- <section id="about">
        <div class="container text-center about-content">
          <div class="row">
            <div class="col-5 logo-about">
              <img src="./assets/img/logo.jpg" alt="" width="60%">
            </div>
            <div class="col-6 text-about">
              <h1>Lorem Ipsum</h1>
              <p>Lorem ipsum dolor sit amet consectetur. Fermentum nunc sit faucibus diam faucibus in. Urna condimentum aliquet aliquam metus leo a. Duis facilisi nec at ipsum tincidunt viverra vivamus et. Iaculis volutpat leo dictum lacus interdum.</p>
            </div>
          </div>
        </div>
      </section> -->

    <div class="floating-whatsapp-button">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="#" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </div>

    <x-my-component.footer />

</x-my-component.app-layout>
