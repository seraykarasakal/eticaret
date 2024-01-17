@extends('frontend.layouts.layout')

@section('content')

<x-layouts.container>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] py-[80px] font-poppins p-[15px]">
      <div class="flex justify-center md:max-h-[500px] max-md:max-h-[390px]">
        <img src="{{asset($product->image)}}" alt="Image placeholder" class="h-full md:h-3/4" >
      </div>
      <div class="flex flex-col gap-[10px]  md:gap-[20px] ">
        <div class="text-[32px] leading-[32px] text-black font-medium">{{$product->name ?? ''}}</div>
        <div class="text-[16px]">{!! $product->description ?? ''!!}</div>
        <div class="text-[24px] text-purple font-medium">{{number_format($product->price,2)}} TL</div>
        <div class="flex gap-[10px]">
          <span>{{ \App\Models\Size::SIZES[$product->size]  }}</span>
        </div>
        <div>
          <button id="decs-btn" class="w-[34px] h-[44px] rounded border-purple border-solid border-[1px] text-[24px]">-</button>
          <input type="number" id="product-counter" class="w-[50px] h-[44px] rounded border-gray1 border-solid text-[20px] text-center" disabled  value='1'></input>
          <button id="inc-btn" class="w-[34px] h-[44px] rounded border-purple border-solid border-[1px] text-[24px]">+</button>
        </div>
        <button id="add-cart" class="w-[150px] h-[44px] bg-purple text-white rounded">Sepete Ekle</button>
      </div>
    </div>
</x-layouts.container>

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
          @foreach($products as $product)
          <x-layouts.slider-card title="{{$product->name}}" content="{{$product->description}} " image="{{ $product->image }}" price="{{ $product->price }}"/>  
          @endforeach
        </div>
      </div>
    </div>
  </x-layouts.container>
</div>

@endsection

@section('js')
<script>
  const incBtn = document.getElementById('inc-btn');
  const decsBtn = document.getElementById('decs-btn');
  const productCounter = document.getElementById('product-counter');

  incBtn.addEventListener('click', () => {
    updateProductCounter('inc');
  });
  decsBtn.addEventListener('click', () => {
    updateProductCounter('dec');
  });

  const updateProductCounter = (type) => {
    if(type === 'inc'){
      productCounter.value = parseInt(productCounter.value) + 1;
    }else{
      if(productCounter.value > 1){
        productCounter.value = parseInt(productCounter.value) - 1;
      }
    }
  }
</script>
@endsection