@extends('frontend.layouts.layout')

@section('content')

  <x-layouts.page-nav-bar pageName='Shop' />

  <x-layouts.container>
    <div class="flex flex-col md:flex-row gap-[30px] py-[80px]">
      <form action="{{ route('products') }}" method="get" class="flex flex-col gap-[24px]  w-100 md:w-3/12">
        @csrf
        <div class="p-[24px] pt-[24px] border-[1px] boder-grey-6 border-solid rounded">
          <div class="flex flex-col gap-[5px]">
            <h3 class="text-uppercase text-black d-block text-[16px]">Cinsiyet</h3>
            @foreach(\App\Models\Gender::GENDERS as $key => $gender)
            <div>
              <input type="radio" name='gender' id="gender-{{$key}}" value="{{$key}}">
              <label class="text-black" for="gender-{{$key}}">{{$gender}}</label>
            </div>
            @endforeach
          </div>

          <div class="flex flex-col gap-[5px]">
            <h3 class="text-uppercase text-black d-block text-[16px]">Kategori</h3>
            @foreach( $categories as $category )
            <div>
              <input type="radio" name='category' id="category-{{$category->id}}" value="{{$category->id}}" >
              <label class="text-purple text-[16px]" for="category-{{$category->id}}">{{$category->name}}</label>
              <span class="text-black ml-auto">({{ $category->categoryProductCount() }})</span>
            </div>
            @endforeach
          </div>
        </div>
        
        <div class="flex flex-col gap-[10px] p-[24px] pt-[24px] border-[1px] boder-grey-6 border-solid rounded">

          <div class="flex flex-col gap-[10px] ">
            <div class="flex gap-[10px]">
              <label class="w-6/12 text-black" for="min-price">Min Price</label>
              <input type="number" name="min_price" id="min_price" class=" w-6/12 border-[1px] border-grey-6 border-solid rounded">
            </div>
            <div class="flex gap-[10px]">
              <label class="w-6/12 text-black" for="max-price">Max Price</label>
              <input type="number" name="max_price" id="max_price" class="w-6/12 border-[1px] border-grey-6 border-solid rounded">
            </div>
          </div>

          <div class="flex flex-col gap-[5px]">
            <span class="text-uppercase text-black text-[16px]">Beden</span>
            @foreach(\App\Models\Size::SIZES as $key => $size)
            <div>
              <input type="checkbox" name="size[]" id="size-{{$key}}" value="{{$key}} ">
              <label for="size-{{$key}}" class="text-black ">{{$size}}</label>
            </div>
            @endforeach
          </div>
        
          <div class="flex flex-col gap-[5px]">
            <span class="text-uppercase text-black  text-[16px]">Renk</span>
            @foreach(\App\Models\Color::COLORS as $key => $color)
            <div>
              <input type="checkbox" id="color-{{$key}}" name="color[]" value="{{$key}}" >
              <label for="color-{{$key}}" class="text-black">{{$color}}</label>
            </div>
            @endforeach
          </div>
        </div>

        <button type="submit" class="bg-purple rounded text-white py-[10px]">Filtre</button>
      </form>

      <div class="w-100 md:w-9/12">
        <div class="flex justify-between mb-[48px]">
          <div>
            <h2 class="text-[20px] text-black">Shop All</h2>
          </div>
        </div>

        <div class= "grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 ">
          @if (!@empty($products) && $products->count() > 0)
            @foreach ($products as $product)
            <div class="flex flex-col  border-solid border-[1px] boder-grey-6">
              <a href="{{route('product',$product->id)}}">
                <img src="{{asset($product->image)}}" alt="Image placeholder" class="h-[300px] w-full object-center " >
              </a>
              <div class="flex flex-col p-[24px] justify-center content-center text-center gap-[5px] ">
                <h3>
                  <a class="text-purple text-[20px]" href="{{route('product',$product->id)}}">{{$product->name}}</a>
                </h3>
                <p>{{$product->description}}</p>
                <p class="text-purple text-[20px]">{{number_format($product->price,0)}} TL</p>
              </div>
            </div>
            @endforeach
          @endif
        </div>

      </div>
    </div>
  </x-layouts.container>
@endsection

@section('js')
<script>
  const filters = @json($filter);
  console.log(filters);
  if(filters.min_price){
    document.getElementById('min_price').value = filters.min_price;
  }
  if(filters.max_price){
    document.getElementById('max_price').value = filters.max_price;
  }
  if(filters.color){
    filters.color.forEach(color => {
      document.getElementById('color-'+color).checked = true;
    });
  }
  if(filters.size){
    filters.size.forEach(size => {
      document.getElementById('size-'+size).checked = true;
    });
  }
  if(filters.category){
    document.getElementById('category-'+filters.category).checked = true;
  }
  if(filters.gender){
    document.getElementById('gender-'+filters.gender).checked = true;
  }
</script>
@endsection