@extends('admin.layouts.layout')

@section('content')

<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Ad</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="name" name="name">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Fiyat</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="price" name="price">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Detay</span>
        <textarea class="form-control" aria-label="With textarea" name="description" id="description"></textarea>
    </div>

    @if($categories->count() > 0)
    <select class="form-select mb-3" aria-label="Default select example" id="category_id" name="category_id">
        <option selected>Kategori</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @else
    <div class="alert alert-danger" role="alert">
        Kategori Bulunamadi!
        <a href="{{ route('categories') }}" class="btn btn-success">
            Kategori Ekle
        </a>
    </div>
    @endif
   
    <select class="form-select mb-3" aria-label="Default select example" id="gender" name="gender">
        <option selected>Cinsiyet</option>
        @foreach(\App\Models\Gender::GENDERS as $key => $gender)
            <option value="{{$key}}">{{$gender}}</option>
        @endforeach
    </select>

    <select class="form-select mb-3" aria-label="Default select example" id="color" name="color">
        <option selected>Renk</option>
        @foreach(\App\Models\Color::COLORS as $key => $color)
            <option value="{{$key}}">{{$color}}</option>
        @endforeach
    </select>

    <select class="form-select mb-3" aria-label="Default select example" id="size" name="size">
        <option selected>Beden</option>
        @foreach(\App\Models\Size::SIZES as $key => $size)
            <option value="{{$key}}">{{$size}}</option>
        @endforeach
    </select>


    <div class="mb-3">
        <input class="form-control form-control-lg" id="file" name="file" type="file" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection