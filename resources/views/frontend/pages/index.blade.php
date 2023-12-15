@extends('frontend.layouts.layout')
@section('content')

<div class=" h-2/3 w-full max-md:h-2/5">
  <div class=" h-full flex w-full bg-[#c8d0c1] font-poppins my-[20px] ">
    <div class = "relative flex text-center w-1/3 ">
      <img class="" src="{{ asset('images/women.jpg')}}" alt="">
    </div>
    <div class = "flex flex-col text-center justify-center items-center p-[20px] w-1/3 gap-6">
      <h2 class="font-medium leading-[1.5rem] md:text-[26px] text-white  uppercase font-ebgaramond ">Modayı Keşfedin</h2>
      <p class="font-medium md:leading-[1.6rem] md:text-[20px] text-white font-poppins max-md:leading-[1.5rem]">Yeni sezonun en trend giyim ürünleri burada! Stilinizi keşfedin ve tarzınızı yaratın. Sadece bir tık uzaklığınızda unutulmaz bir alışveriş deneyimi sizi bekliyor</p>
    </div>
    <div class = " relative flex justify-end w-1/3" >
      <img class="" src="{{ asset('images/children.jpg') }}" alt="">
    </div>
  </div> 
</div>
<div class="py-[64px] text-left border-solid box-border border-b-[1px] ">
  <x-layouts.container>
    <div class="flex flex-wrap">

      <div class="flex w-full md:w-1/3 px-[15px] my-[15px] animate-fadeIn "  >
        <div class="mr-4 self-start">
          <i class="las la-truck relative text-purple top-[-10px] text-[50px] inline-block"></i>
        </div>
        <div class="text">
          <h2 class="uppercase text-grey">ÜCRETSİZ</h2>
          <p class="capitalize text-grey-1">Ücretsiz kargo hizmeti.</p>
        </div>
      </div>

      <div class="flex w-full md:w-1/3 px-[15px] my-[15px] animate-fadeIn" >
        <div class="mr-4 self-start delay-200">
          <i class="las la-redo-alt relative text-purple top-[-10px] text-[50px] inline-block"></i>
        </div>
        <div class="text">
          <h2 class="uppercase text-grey">GERİ İADE</h2>
          <p class="capitalize text-grey-1">15 gün İçerisinde ücretsiz İade hizmeti.</p>
        </div>
      </div>

      <div class="flex w-full md:w-1/3 px-[15px] my-[15px]  animate-fadeIn" >
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

<div class="p-[2.5em] md:p-[5em] site-blocks-2">
  <x-layouts.container>
    <div class="flex gap-4 flex-col sm:flex-row">
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0" >
        <a class="block relative group before:z-[1] before:content-[''] before:inset-0 before:absolute before:bg-bg-1" href="{{route('women-products')}} ">
          <figure class="image relative mb-0 overflow-hidden">
            <img src="images/women.jpg" alt="" class=" align-middle	transition duration-500 trasform img-fluid group-hover:scale-110 mb-0 ">
          </figure>
          <div class="text z-[2] w-full bottom-0	pl-[20px] absolute	text-white">
            <span class="uppercase text-[12px] tracking-[.1em] font-black">Collections</span>
            <h3 class="text-[40px] leading-line-1 font-medium mb-[8px]	"> Kadın</h3>
          </div>
        </a>
      
      </div>
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0 ">
        <a class="block relative group before:z-[1] before:content-[''] before:inset-0 before:absolute before:bg-bg-1" href="{{route('child-products')}}">
          <figure class="image relative mb-0 overflow-hidden">
            <img src="images/children.jpg" alt="" class=" align-middle	transition duration-500 trasform img-fluid group-hover:scale-110 mb-0">
          </figure>
          <div class="text z-[2] w-full bottom-0	pl-[20px] absolute	text-white">
            <span class="uppercase text-[12px] tracking-[.1em] font-black">Collections</span>
            <h3 class="text-[40px] leading-line-1 font-medium mb-[8px]	">Çocuk</h3>
          </div>
        </a>
      </div>
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 lg:mb-0">
        <a class="block relative group before:z-[1] before:content-[''] before:inset-0 before:absolute before:bg-bg-1" href="{{route('men-products')}}">
          <figure class="image relative mb-0 overflow-hidden">
            <img src="images/men.jpg" alt="" class=" align-middle	transition duration-500 trasform img-fluid group-hover:scale-110 mb-0">
          </figure>
          <div class="text z-[2] w-full bottom-0	pl-[20px] absolute	text-white">
            <span class="uppercase text-[12px] tracking-[.1em] font-black">Collections</span>
            <h3 class="text-[40px] leading-line-1 font-medium mb-[8px]	">Erkek</h3>
          </div>
        </a>
      </div>
    </div>
  </x-layouts.container>
</div>

<div class="site-section block-3 site-blocks-2 bg-bg-2 ">  
  <x-layouts.container>
    <div class="flex flex-wrap justify-center mx-[-15px]">
      <div class="md:w-7/12 text-3xl text-black-1	relative before:content-[''] before:left-50 before:top-0 before:absolute before:w-10	before:h-0.5	before:bg-purple  before:translate-x-[-50%] md:mx-auto text-center pt-4">
        <h2 class="text-[28px] mb-[8px] font-medium leading-line-1 mt-0 text-inherit text-center">Yeni Sezon</h2>
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
  <x-layouts.container>
    <div class="flex flex-wrap justify-center mx-[-15px]">
      <div class="md:w-7/12 text-3xl text-black-1	relative before:content-[''] before:left-50 before:top-0 before:absolute before:w-10	before:h-0.5	before:bg-purple  before:translate-x-[-50%] md:mx-auto text-center pt-4">
        <h2 class="text-[28px] mb-[8px] font-medium	leading-line-1 mt-0 text-inherit text-center	">Kampanyalar</h2>
      </div>
    </div>
    <div class="flex flex-row max-[990px]:flex-wrap mx-[-15px] items-center  py-[40px]">
      <div class="relative w-full mb-12	min-h-[1px] px-[15px] min-w-[992px]:basis-[58.3333%] min-w-[992px]:max-w-[58.3333%] min-w-[768px]:max-w-full min-w-[768px]:basis-full ">
        <a href="#" class="text-purple no-underline	bg-transparent "><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded max-w-full h-auto align-middle border-none"></a>
      </div>
      <div class="text-center	relative w-full min-h-[1px] px-[15px]">
        <h2 class="text-[32px] mb-[12px] font-medium	leading-line-1 mt-0 text-center	"><a class="text-purple no-underline bg-transparent" href="#">Seçili ürünlerde %50 indirim</a></h2>
        <p class="mb-[12px] text-grey-1">Alışverişe başlayın ve indirimi yakalayın</p>
        <p><a href="{{ route('discount-products') }}" class=" inline-block uppercase relative duration-[0.2s] ease-in-out delay-0	transition-all bg-purple hover:bg-violet	 text-white font-bold py-[10px] px-[20px] tracking-[.2em] text-[14px] mb-[12px] rounded">Shop Now</a></p>
      </div>
    </div>
  </x-layouts.container>
</div>Z
@endsection