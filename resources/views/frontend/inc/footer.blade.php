<footer class="site-footer border-top">
  <x-layouts.container>
      <div class="mx-auto flex flex-wrap space-around">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <div class="flex flex-col">
            <div class="w-full">
              <h3 class="footer-heading mb-4">Sayfalar</h3>
            </div>
            <div class="">
              <ul class="list-unstyled">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                <li><a href="{{ route('products')}}">Alışveriş</a></li>
                <li><a href="{{ route('contact') }}">İletişim</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">İletişim</h3>
            <ul class="list-unstyled">
              <li class="address">34716 İstiklal Caddesi, No: 456 Kadıköy İstanbul</li>
              <li class="phone"><a href="tel://23923929210">0534 929 29 20</a></li>
              <li class="email">info@shoppier.com</li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <form action="#" method="post">
            <label for="email_subscribe" class="footer-heading">Subscribe</label>
            <div class="flex flex-nowrap">
              <input type="text" class="w-8/12 border-[1px] border-solid border-purple rounded py-[10px] px-[20px] mr-[10px]" id="email_subscribe" placeholder="Email">
              <input type="submit" class="w-4/12 bg-purple py-[10px] px-[20px] rounded text-white " value="Send">
            </div>
          </form> 
        </div>
      </div>
  </x-layouts.container>
</footer>