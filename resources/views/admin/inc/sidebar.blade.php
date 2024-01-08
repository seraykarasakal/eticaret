<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark col-lg-2" style=" height: calc(100vh - 60px);">
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="{{ route('admin.products') }}" class="nav-link text-white @if(Request::routeIs('products')) active @endif ">
            Ürünler
        </a>
      </li>
      <li>
        <a href="{{ route('categories') }}" class="nav-link text-white @if(Request::routeIs('categories')) active @endif">
            Kategoriler
        </a>
      </li>
    </ul>
</div>