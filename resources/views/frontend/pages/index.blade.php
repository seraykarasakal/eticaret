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
  <div class="py-[64px] text-left border-solid box-border border-b-[1px] ">
    <x-layouts.container>
      <div class="flex flex-wrap ">
        <div class="flex w-full md:w-1/3 p-x-[15px] mb-15 animate-fadeIn "  >
          <div class="mr-4 self-start">
            <i class="las la-truck relative text-purple top-[-10px] text-[50px] inline-block"></i>
          </div>
          <div class="text">
            <h2 class="uppercase text-grey">ÜCRETSİZ</h2>
            <p class="capitalize text-grey-1">Ücretsiz kargo hizmeti.</p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 p-x-[15px] mb-15 animate-fadeIn" >
          <div class="mr-4 self-start delay-200">
            <i class="las la-redo-alt relative text-purple top-[-10px] text-[50px] inline-block"></i>
          </div>
          <div class="text">
            <h2 class="uppercase text-grey">GERİ İADE</h2>
            <p class="capitalize text-grey-1">15 gün İçerisinde ücretsiz İade hizmeti.</p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 p-x-[15px] mb-15  animate-fadeIn" >
          <div class="mr-4 self-start">
            <i class="lar la-question-circle relative text-purple top-[-10px] text-[50px] inline-block"></i>      
          </div>
          <div class="text">
            <h2 class="uppercase text-grey">DESTEK</h2>
            <p class="capitalize text-grey-1">7/24 bize ulaşabilirsiniz.</p>
          </div>
        </div>
      </div>
    </x-layouts.container>
  </div>
  <div class="site-section site-blocks-2">
    <x-layouts.container>
      <div class="flex gap-4 flex-col sm:flex-row">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0" >
          <a class="block relative group before:z-[1] before:content-[''] before:inset-0 before:absolute before:bg-bg-1" href="{{ route('women-products') }} ">
            <figure class="image relative mb-0 overflow-hidden">
              <img src="images/women.jpg" alt="" class=" align-middle	transition duration-500 trasform img-fluid group-hover:scale-110 mb-0 ">
            </figure>
            <div class="text z-[2] w-full bottom-0	pl-[20px] absolute	text-white">
              <span class="uppercase text-[12px] tracking-[.1em] font-black">Collections</span>
              <h3 class="text-[40px]"> Kadın</h3>
            </div>
          </a>
        
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0 " data-aos="fade" data-aos-delay="100">
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
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0" data-aos="fade" data-aos-delay="200">
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
    </x-layouts.container>
  </div>
  
  <div class="site-section block-3 site-blocks-2 bg-light">  
    <x-layouts.container>
      <div class="flex flex-wrap justify-center">
        <div class="md:w-7/12 text-3xl text-black	relative before:content-[''] before:left-50 before:top-0 before:absolute before:w-10	before:h-0.5	before:bg-purple  before:translate-x-[-50%] md:mx-auto text-center pt-4">
          <h2>Yeni Sezon</h2>
        </div>
      </div>
      <div class="flex flex-wrap mx-[-15px]">
        <div class="w-full md:max-w-full relative min-h-[1px] px-[15px] ">
          <div class="nonloop-block-3 owl-carousel">
            <x-layouts.slider-card title="Sweatshirt" content="Finding perfect sweatshirt" image="images/cloth_1.jpg" price="250₺"/>  
            <x-layouts.slider-card title="T-Shirt" content="Finding perfect t-shirt" image="images/cloth_1.jpg" price="200₺"/>  
            <x-layouts.slider-card title="Shoes" content="Finding perfect shoes" image="images/cloth_1.jpg" price="1200₺"/>         
          </div>
        </div>
      </div>
    </x-layouts.container>
  </div>
  <div class="site-section block-8">
    <div class="container">
      <div class="flex flex-wrap justify-center">
        <div class="md:w-7/12 text-3xl text-black	relative before:content-[''] before:left-50 before:top-0 before:absolute before:w-10	before:h-0.5	before:bg-purple  before:translate-x-[-50%] md:mx-auto text-center pt-4">
          <h2 class="text-[28px] mb-[8px] font-medium	leading-[18px] mt-0 text-center	">Kampanyalar</h2>
        </div>
      </div>
      <div class="flex flex-wrap mx-[-15px]">
        <div class="relative w-full mb-12	min-h-[1px] px-[15px] min-w-[992px]:basis-[58.3333%] min-w-[992px]:max-w-[58.3333%] min-w-[768px]:max-w-full min-w-[768px]:basis-full ">
          <a href="#" class="text-purple no-underline	bg-transparent "><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded max-w-full h-auto align-middle border-none"></a>
        </div>
        <div class="text-center	relative w-full min-h-[1px] px-[15px]">
          <h2 class="text-[28px] mb-[8px] font-medium	leading-[18px] mt-0 text-center	"><a class="text-purple no-underline	bg-transparent" href="#">Seçili ürünlerde %50 indirim</a></h2>
          <p>Alışverişe başlayın ve indirimi yakalayın</p>
          <p><a href="{{ route('discount-products') }}" class="btn btn-primary btn-sm">Shop Now</a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection