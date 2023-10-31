<footer class="site-footer border-top">
  <x-layouts.container>
      <div class="mx-auto flex flex-wrap space-around">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <div class="flex flex-col">
            <div class="w-full">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="">
              <ul class="list-unstyled">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                <li><a href="{{ route('products')}}">Shop</a></li>
                <li><a href="#">Catalogue</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="{{ route('contact') }}">İletişim</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
              <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
              <li class="email">emailaddress@domain.com</li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
          <div class="block-7">
            <form action="#" method="post">
              <label for="email_subscribe" class="footer-heading">Subscribe</label>
              <div class="form-group">
                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                <input type="submit" class="btn btn-sm btn-primary" value="Send">
              </div>
            </form>     
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="w-full">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
  </x-layouts.container>
</footer>