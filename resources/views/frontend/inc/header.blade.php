<header class="bg-white">
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
      </div>
    </x-layouts.container>
  </div> 
  <nav class="flex justify-between items-center mx-auto" >
    <x-layouts.container>
      <ul class=" md:flex flex-col items-center hidden">
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