@extends('frontend.layouts.layout')

@section('content')

<x-layouts.page-nav-bar pageName='{{$product->name}}' />

<x-layouts.container>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 ">
      <div>
        Deneme
      </div>
      <div>
        Deneme
      </div>
    </div>
</x-layouts.container>

  <div class="site-section">
    <x-layouts.container>
      <div class="flex flex-row max-[990px]:flex-wrap mx-[-15px] items-center  py-[40px]">
        <div class="relative w-full mb-12	min-h-[1px] px-[15px] min-w-[992px]:basis-[58.3333%] min-w-[992px]:max-w-[58.3333%] min-w-[768px]:max-w-full min-w-[768px]:basis-full justify-center ">
          <img src="images/women_jacket.jpeg" alt="Image" class="img-fluid">
        </div>
        <div class="text-center	relative w-full min-h-[1px] px-[15px]">
          <h2 class="text-[32px] mb-[12px] font-medium	text-black leading-line-1 mt-0 text-center	max-sm:text-[20px]">{{$product->name ?? ''}}</h2>
          <h2 class="text-[16px] font-light	mb-6">{!! $product->content ?? ''!!}</h2> 
          <p><strong class="text-[16px] font-medium leading-7 text-purple mb-6">{{number_format($product->price,2)}}</strong></p>
          <!-- <div class="mb-1 d-flex">
            <label for="option-sm" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
            </label>
            <label for="option-md" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
            </label>
            <label for="option-lg" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
            </label>
            <label for="option-xl" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
            </label>
          </div> -->
          <div class="flex max-md:flex-wrap">
            <div class="md:w-full  md:flex md:justify-center md:items-center " style="max-width: 120px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
          </div>

          </div>
          <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

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
          <x-layouts.slider-card title="Sweatshirt" content="Finding perfect sweatshirt" image="images/men_sweatshirt.jpeg" price="250₺"/>  
          <x-layouts.slider-card title="T-Shirt" content="Finding perfect t-shirt" image="images/women_jacket.jpeg" price="200₺"/>  
          <x-layouts.slider-card title="Shoes" content="Finding perfect shoes" image="images/bag.jpeg" price="1200₺"/>         
          <x-layouts.slider-card title="Shoes" content="Finding perfect shoes" image="images/bag2.jpeg" price="1200₺"/>         
          <x-layouts.slider-card title="Shoes" content="Finding perfect shoes" image="images/unisex_sweatshirt.jpeg" price="1200₺"/>         
          <x-layouts.slider-card title="Shoes" content="Finding perfect shoes" image="images/unisex_sweatshirt2.jpeg" price="1200₺"/>         

        </div>
      </div>
    </div>
  </x-layouts.container>
</div>
@endsection