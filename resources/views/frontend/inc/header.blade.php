<header class="bg-white">
  <div class="py-[35px]">
    <x-layouts.container>
      <div class="flex justify-center items-center flex-wrap mx-[-15px] text-[20px] font-light text-grey-3">
        <div class="flex w-full  md:w-1/3 order-2 md:order-1  max-md:w-[50%] text-left px-[15px]" >
          <form class="flex items-center justify-center ">
            <div class="las la-search"></div>
            <input type="text" class="form-control border-0" placeholder="Search">
          </form>
        </div>
        <div class="flex justify-center order-1 md:order-2 items-center w-full md:w-1/3 mb-3 md:mb-0 text-center px-[15px]">
          <div class="site-logo">
          <a class="inline-block uppercase px-[10px] tracking-[.2em] border-solid	border-[2px] border-grey " href="{{ route('index') }}">Shoppers</a></li>
          </div>
        </div>
        <div class="w-full md:w-1/3 max-md:w-[50%] order-3  md:order-3 flex justify-end text-right px-[15px]">
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
    <ul class="md:flex flex-row gap-[40px] hidden">
    <li><a class="hover:text-gray-600" href="{{ route('index') }}">Anasayfa</a></li> 
    <li class="has-children inline-block">
        <a class="hover:text-gray-600 before:absolute before:content-['\e313'] before:text-[16px] before:top-2/4 before:right-0 before:translate-y-2/4" href="#">Kategori</a>
        <ul class="dropdown">
            @if (!empty($categories) && $categories->count() > 0)
                @foreach ($categories as $category)
                    @if ($category->cat_ust == null)
                        <li class="has-children">
                            <a href="#">{{$category->name}}</a>
                            <ul class="dropdown">
                                @foreach ($categories as $subCategory)
                                    @if ($subCategory->cat_ust == $category->id)
                                        <li><a href="#">{{ $subCategory->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </li>
    <li><a class="hover:text-gray-600" href="{{ route('about') }}">Hakkımızda</a></li>
    <li><a class="hover:text-gray-600" href="{{ route('products') }}">Shop</a></li>
    <li><a class="hover:text-gray-600" href="#">Catalogue</a></li>
    <li><a class="hover:text-gray-600" href="#">New Arrivals</a></li>
    <li><a class="hover:text-gray-600" href="{{ route('contact') }}">İletişim</a></li>
</ul>

    </x-layouts.container>
  </div>
</header>