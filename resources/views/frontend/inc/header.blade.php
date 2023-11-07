<header class="bg-white">
  <div class="">
    <x-layouts.container>
      <div class="flex justify-between items-center my-[20px] text-grey text-[20px] ">
        <form class=" flex-1 flex justify-start  items-center gap-[2px]">
          <div class="las la-search"></div>
          <input type="text" class="form-control border-0" placeholder="Search">
        </form>
        <div class=" flex-1 flex justify-center">
          <div class="site-logo">
          <a class="inline-block uppercase px-[10px] tracking-[.2em] border-solid	border-[2px] border-grey " href="{{ route('index') }}">Shoppers</a></li>
          </div>
        </div>
        <div class=" flex-1 flex justify-end">
          
            <ul  class="flex gap-[6px]">
              <li>
                <a class=" hover:text-gray-600" href="#"><i class="las la-user"></i></span></a>
              </li>
              <li>
                <a class=" hover:text-gray-600" href="#"><i class="lar la-heart"></i></span></a>
              </li>
              <li>
                <a class=" hover:text-gray-600" href="{{ route('cart') }}" class="site-cart">
                <i class="las la-shopping-cart"></i>
                  
                </a>
              </li> 
              <li><a id="hamburger"  class=" md:hidden hover:text-gray-600" href="#"><span class="las la-bars "></span></a></li>
            </ul>
        </div>
      </div>
    </x-layouts.container>
  </div> 
  <hr>
  <div class="md:flex md:justify-between md:items-center my-[20px] hidden" >
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