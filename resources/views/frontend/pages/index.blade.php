@extends('frontend.layouts.layout')
@section('content')

<div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
    <div class="container">
      <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
          <h1 class="mb-2">Finding Your Perfect Shoes</h1>
          <div class="intro-text text-center text-md-left">
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
            <p>
              <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
  <div class="site-section site-section-sm site-blocks-1">
    <div class="container">
      <div class=" flex justify-center">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-2" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Ücretsiz Kargo</h2>
            <p>Ücretsiz kargo hizmeti.</p>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-2" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Geri İade</h2>
            <p>15 gün içerisinde ücretsiz iade hizmeti.</p>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-2" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="icon-help"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Destek</h2>
            <p>7/24 bize ulaşabilirsiniz.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
          <a class="block-2-item" href="{{ route('women-products') }}">
            <figure class="image">
              <img src="images/women.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Kadın</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <a class="block-2-item" href="{{ route('child-products') }}">
            <figure class="image">
              <img src="images/children.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Çocuk</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <a class="block-2-item" href="{{ route('men-products') }}">
            <figure class="image">
              <img src="images/men.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Erkek</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Yeni Sezon</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Tank Top</a></h3>
                  <p class="mb-0">Finding perfect t-shirt</p>
                  <p class="text-primary font-weight-bold">50₺ </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Polo Shirt</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">T-Shirt Mockup</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section block-8">
    <div class="container">
      <div class="row justify-content-center  mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Kampanyalar</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
          <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 text-center pl-md-5">
          <h2><a href="#">Seçili ürünlerde %50 indirim</a></h2>
         
          <p>Alışverişe başlayın ve indirimi yakalayın</p>
          <p><a href="{{ route('discount-products') }}" class="btn btn-primary btn-sm">Shop Now</a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection