@extends('layout')
@section('content')
    @if($errors->any())
        <span class="error">Bitte Alle Felder füllen!</span>
    @endif
    <form action="/products/add" method="POST" id="product" class="form-group">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Farbe:</strong>
                    <input type="text" name="color" class="form-control" placeholder="Farbe">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Preis:</strong>
                    <input type="number" name="price" step="0.01" class="form-control" placeholder="Preis">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Geschmack:</strong>
                    <select name="taste_id" form="product" class="form-control">
                        @foreach ($tastes as $taste)
                            <option value="{{ $taste->id }}">{{ $taste->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Hinzufügen</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Farbe</th>
            <th>Geschmack</th>
            <th>Preis</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->color }}</td>
                <td>{{ $product->taste->description }}</td>
{{--                <td>1</td>--}}
                <td>{{ number_format($product->price / 100, 2, ',', '') }}€</td>
                <td>
                    <form action="/products/{{$product->id}}" method="POST">
                        <a class="btn btn-primary" href="/products/edit/{{$product->id}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
@endsection
