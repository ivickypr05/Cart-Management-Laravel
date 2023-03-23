@extends('layouts.main')
@section('title', 'V Edit Product | page')
@section('content')
    <div class="container">

        <a class="btn btn-primary" href="{{ Route('product') }}">
            < Back </a>
                <br>
                <p>
                <h4>Welcome to the Edit Category Page</h4>
                </p>
                <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                <p>Please Edit in the data below!</p>
                <div class="col-lg-8">
                    <form method="post" action="/product/{{ $product->id }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="name" name="product_name"
                                value="{{ $product->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="unsignedInteger" class="form-control" id="price" name="product_price"
                                value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="product_description"
                                value="{{ $product->description }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="text" class="form-control" id="image" name="product_image"
                                value="{{ $product->image }}">
                        </div>
                        <div>
                            <label for="select" class="form-label">Select to choose in Category below</label>
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $product->category_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            @endsection
