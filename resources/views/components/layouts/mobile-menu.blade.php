
<div id="mobile-menu" class="w-full h-full hidden fixed top-0 left-0 bg-bg-3 opacity-100 z-10  animate-fadeLeft ">

  <div class="w-[300px] fixed right-0 z-[3] pt-[20px] bg-white h-full duration-[0.2s] ease-in-out delay-0	transition-all transform translate-x-0 max-w-3xl:hidden top-0  ">
    <div class="w-full float-left my-[20px] px-[20px]">
      <div class="float-left ">
        <a class="inline-block uppercase text-grey text-[20px] px-[10px] tracking-[.2em] border-solid	border-[2px] border-grey " href="{{ route('index') }}">Shoppers</a></li>
      </div>
      <div class="float-right ">
        <i id="close" class="las la-times text-[40px] inline-block px-[10px] cursor-pointer	duration-[0.2s] ease-in-out delay-0	transition-all "></i>
      </div>
    </div>
    <div  class="overflow-y-scroll	relative p-[20px] h-screen pb-[150px]  " >
      <ul class="p-0 m-0 list-none relative ">
        <li class="block relative float-left w-full ">
          <a class=" px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('index') ) text-purple @else  text-grey-2 @endif" href="{{route('index')}}">Anasayfa</a>
        </li>
        <li class="block relative float-left w-full "><a class=" px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('about') ) text-purple @else  text-grey-2 @endif" href="{{ route('about') }}">Hakkımızda</a></li>
        <li class="block relative float-left w-full "><a class="px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('products') ) text-purple @else  text-grey-2 @endif" href="{{ route('products')}}">Shop</a></li>
        <li class="block relative float-left w-full "><a class="px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('index') ) text-purple @else  text-grey-2 @endif" href="#">Catalogue</a></li>
        <li class="block relative float-left w-full "><a class="px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('index') ) text-purple @else  text-grey-2 @endif" href="#">New Arrivals</a></li>
        <li class="block relative float-left w-full "><a class="px-[20px] py-[10px] text-[20px] block relative  @if(Route::is('contact') ) text-purple @else  text-grey-2 @endif " href="{{ route('contact') }}">İletişim</a></li>
      </ul>
    </div>
  </div>
</div>