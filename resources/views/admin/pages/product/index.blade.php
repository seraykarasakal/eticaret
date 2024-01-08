@extends('admin.layouts.layout')

@section('content')
<div class="row">   
        <div>
            <a href="{{route('product.create') }}" class="btn btn-success mb-3">Urun Ekle</a>
        </div>
    </div>
<div class="container-fluid">
    

    <div class="row">
        @if($products->count() > 0)
            <table class="table mb-3">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Ad</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Cinsiyet</th>
                        <th scope="col">Renk</th>
                        <th scope="col">Beden</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                <img src="{{ asset($product->image) }}" class="rounded  d-block" alt="..." width="100px" height="100px">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ \App\Models\Gender::GENDERS[$product->gender] }}</td>
                            <td>{{ \App\Models\Color::COLORS[$product->color] }}</td>
                            <td>{{ \App\Models\Size::SIZES[$product->size] }}</td>
                            <td>
                                <a class="btn btn-danger"  href="{{route('product.delete', ['id' => $product->id] ) }}"> Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else

        <div class="alert alert-danger mb-3" role="alert">
            Urun Bulunamadi!
        </div>
        @endif
    </div>
    @include('admin.inc.common')
</div>


@endsection