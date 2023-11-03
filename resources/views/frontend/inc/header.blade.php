<header class="bg-white">
  <div class="site-navbar-top">
    <x-layouts.container>
      <div class="flex items-center  my-[20px]">
        <div class=" w-1/3 flex justify-start">
          <form action="" class="site-block-top-search">
            <span class="icon icon-search2"></span>
            <input type="text" class="form-control border-0" placeholder="Search">
          </form>
        </div>
        <div class="w-1/3 flex justify-center ">
          <div class="site-logo">
            <a class=" hover:text-gray-600" href="{{route('index')}}" class="js-logo-clone">Shoppers</a>
          </div>
        </div>
        <div class="w-1/3 flex justify-end">
          
            <ul  class="flex gap-[6px]">
              <li>
                <a class=" hover:text-gray-600" href="#"><span class="icon icon-person"></span></a>
              </li>
              <li>
                <a class=" hover:text-gray-600" href="#"><span class="icon icon-heart-o"></span></a>
              </li>
              <li>
                <a class=" hover:text-gray-600" href="{{ route('cart') }}" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count">2</span>
                </a>
              </li> 
              <li><a id="hamburger"  class=" md:hidden hover:text-gray-600" href="#"><span class="las la-bars "></span></a></li>
            </ul>
        </div>
      </div>
    </x-layouts.container>
  </div> 
  <hr>
  <div class="flex justify-between items-center my-[20px]" >
    <x-layouts.container>
      <ul class=" md:flex flex-row gap-[40px] hidden  ">
        <li><a d class=" hover:text-gray-600" href="{{route('index')}}">Anasayfa</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('about') }}">Hakkımızda</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('products')}}">Shop</a></li>
        <li><a class=" hover:text-gray-600" href="#">Catalogue</a></li>
        <li><a class=" hover:text-gray-600" href="#">New Arrivals</a></li>
        <li><a class=" hover:text-gray-600" href="{{ route('contact') }}">İletişim</a></li>
      </ul>
    </x-layouts.container>
  </div>
</header>