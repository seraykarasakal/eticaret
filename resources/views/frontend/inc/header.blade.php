<header class="bg-white">
  <div class="w-[300px] fixed right-0 z-[3] pt-[20px] bg-white h-full duration-[0.2s] ease-in-out delay-0	transition-all transform translate-x-0">
    <div class="w-full float-left my-[20px] px-[20px] ">
      <div class="float-left ">
        <a class="inline-block uppercase text-grey text-[20px] px-[10px] tracking-[.2em] border-solid	border-[2px] border-grey " href="{{ route('index') }}">Shoppers</a></li>
      </div>
      <div class="float-right ">
        <i class="las la-times text-[40px] inline-block px-[10px] cursor-pointer	duration-[0.2s] ease-in-out delay-0	transition-all "></i>
      </div>
    </div>
    <div class="overflow-y-scroll	relative p-[20px] h-screen pb-[150px]" >
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
  <div class="site-navbar-top">
    <x-layouts.container>
      <div class="row align-items-center">
        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          <form action="" class="site-block-top-search">
            <span class="icon icon-search2"></span>
            <input type="text" class="form-control border-0" placeholder="Search">
          </form>
        </div>
        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a class=" hover:text-gray-600" href="{{route('index')}}" class="js-logo-clone">Shoppers</a>
          </div>
        </div>
        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <li><a class=" hover:text-gray-600" href="#"><span class="icon icon-person"></span></a></li>
              <li><a class=" hover:text-gray-600" href="#"><span class="icon icon-heart-o"></span></a></li>
              <li>
                <a class=" hover:text-gray-600" href="{{ route('cart') }}" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count">2</span>
                </a>
              </li> 
              <button class="block relative w-[35px] h-[35px] cursor-pointer appearance-none bg-none outline-none border-none">
                <div class="before:"></div>
              </button>
            </ul>
          </div> 
        </div>
      </div>
    </x-layouts.container>
  </div> 
  <nav class="flex justify-between items-center mx-auto" >
    <x-layouts.container>
      <ul class="flex md:flex flex-col items-center">
        <li><a d class=" hover:text-gray-600" href="{{route('index')}}">Anasayfa</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('about') }}">Hakkımızda</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('products')}}">Shop</a></li>
        <li><a class=" hover:text-gray-600" href="#">Catalogue</a></li>
        <li><a class=" hover:text-gray-600" href="#">New Arrivals</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('contact') }}">İletişim</a></li>
      </ul>
      
    </x-layouts.container>
  </nav>
</header>