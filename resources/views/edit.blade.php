@extends('layout')
@section('content')
    <form action="/products/edit/{{ $product->id }}" method="POST" id="product" class="form-group">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Farbe:</strong>
                    <input type="text" name="color" class="form-control" value="{{ $product->color }}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Preis:</strong>
                    <input type="number" name="price" step="0.01" class="form-control" value="{{ $product->price/100 }}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Geschmack:</strong>
                    <select name="taste_id" form="product" class="form-control">
                        @foreach ($tastes as $taste)
                            <option value="{{ $taste->id }}" @selected($product->taste->id == $taste->id)>{{ $taste->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Speichern</button>
            </div>
        </div>
    </form>
@endsection
