@extends('frontend.layouts.layout')

@section('content')

  <x-layouts.page-nav-bar pageName='Shop' />

  <x-layouts.container>
    <div class="flex flex-col md:flex-row gap-[30px] py-[80px]">
      <div class="flex flex-col gap-[24px]  w-100 md:w-3/12">
        <div class="p-[24px] pt-[24px] border-[1px] boder-grey-6 border-solid rounded">
          <h3 class="text-uppercase text-black d-block text-[16px]">Categories</h3>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#" class="d-flex">
                <span class="text-purple text-[16px]">Men</span>
                <span class="text-black ml-auto">(2,220)</span>
              </a>
            </li>
            <li class="mb-1">
              <a href="#" class="d-flex">
                <span class="text-purple text-[16px]">Women</span>
                <span class="text-black ml-auto">(2,550)</span>
              </a>
            </li>
            <li class="mb-1">
              <a href="#" class="d-flex">
                <span class="text-purple text-[16px]">Children</span> 
                <span class="text-black ml-auto">(2,124)</span>
              </a>
            </li>
          </ul>
        </div>
        
        <div class="flex flex-col gap-[10px] p-[24px] pt-[24px] border-[1px] boder-grey-6 border-solid rounded">

          <div class="flex flex-col gap-[10px] ">
            <div class="flex gap-[10px]">
              <label class="w-6/12 text-black" for="min-price">Min Price</label>
              <input type="number" name="min-price" id="min-price" class=" w-6/12 border-[1px] border-grey-6 border-solid rounded">
            </div>
            <div class="flex gap-[10px]">
              <label class="w-6/12 text-black" for="max-price">Max Price</label>
              <input type="number" name="max-price" id="max-price" class="w-6/12 border-[1px] border-grey-6 border-solid rounded">
            </div>
          </div>

          <div class="flex flex-col gap-[5px]">
            <span class="text-uppercase text-black text-[16px]">SIZE</span>
            <div>
              <input type="checkbox" name="sm" id="sm">
              <label for="sm" class="text-black ">Small</label>
            </div>
            <div>
              <input type="checkbox" name="md" id="md">
              <label for="md" class="text-black ">Medium</label>
            </div>
            <div>
              <input type="checkbox" name="lg" id="lg">
              <label for="lg" class="text-black">Large</label>
            </div>
          </div>
        
          <div class="flex flex-col gap-[5px]">
            <span class="text-uppercase text-black  text-[16px]">COLOR</span>
            <div>
              <input type="checkbox" name="red" id="red">
              <label for="red" class="text-black">Red</label>
            </div>
            <div>
              <input type="checkbox" name="green" id="green">  
              <label for="green" class="text-black">Green</label>
            </div>
            <div>
              <input type="checkbox" name="green" id="blue">  
              <label for="blue" class="text-black">Blue</label>
            </div>
            <div>
              <input type="checkbox" name="purple" id="purple">  
              <label for="purple" class="text-black  ">Purple</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-100 md:w-9/12">
        <div class="flex justify-between mb-[48px]">
          <div>
            <h2 class="text-[20px] text-black">Shop All</h2>
          </div>

          <div class= "flex gap-[10px] ">
            <select name="" id="" class=" flex bg-grey-6 text-black p-[10px]">
              <option value="latest" disabled> Latest</option>
              <option value="men">Men</option>
              <option value="women">Women</option>
              <option value="children">Children</option>
            </select>
            <select name="" id="" class=" flex bg-grey-6 text-black">
              <option value="referance" disabled>Referance</option>
              <option value="men">Relevance</option>
              <option value="women">Name, A to Z</option>
              <option value="children">Name, A to Z</option>
              <option value="men">Price, low to high</option>
              <option value="men">Price, high to low</option>
            </select>
          </div>
        </div>

        <div class= "grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 ">
          @if (!@empty($products) && $products->count() > 0)
            @foreach ($products as $product)
            <div class="flex flex-col  border-solid border-[1px] boder-grey-6">
              <a href="{{route('product-detail',$product->slug)}}">
                <img src="{{asset($product->image)}}" alt="Image placeholder" class="h-[200px] w-full object-center " >
              </a>
              <div class="flex flex-col p-[24px] justify-center content-center text-center gap-[5px] ">
                <h3>
                  <a class="text-purple text-[20px]" href="{{route('product-detail',$product->slug)}}">{{$product->name}}</a>
                </h3>
                <p>{{$product->short_text}}</p>
                <p class="text-purple text-[20px]">{{number_format($product->price,0)}}</p>
              </div>
            </div>
            @endforeach
          @endif
        </div>

      </div>
    </div>
  </x-layouts.container>

@endsection