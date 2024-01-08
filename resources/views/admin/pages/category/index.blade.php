@extends('admin.layouts.layout')

@section('content')

<div class="col-lg-12">
    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="input-group input-group-sm mb-3 col-lg-6">
            <span class="input-group-text" id="inputGroup-sizing-sm">Ad</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary mb-3 col-lg-6">Kategori Ekle</button>
    </form>
</div>

<div class="col-lg-12">
    @if($categories->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-danger"  href="{{route('category.delete', ['id' => $category->id] ) }}"> Sil</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-danger mb-3" role="alert">
        Kategori Bulunamadi!
    </div>
    @endif
</div>

<div class="col-lg-12">
@include('admin.inc.common')
</div>

@endsection