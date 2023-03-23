@extends('layouts.main')
@section('title', 'V Add New Data Product | page')
@section('content')
    <a class="btn btn-primary" href="{{ Route('product') }}">
        < Back </a>
            <br>
            <p>
            <h4>Welcome to the Add Item Data Page</h4>
            </p>
            <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
            <p>Please fill in the data below!</p>
            <div class="col-lg-8">
                <div class="container">
                    <form method="POST" action="{{ url('/product') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="product_name">
                            @error('name')
                                <div class={{ $message }}>
                                    Name cannot be empty!
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="unsignedInteger" class="form-control @error('price') is-invalid @enderror"
                                id="price" name="product_price">
                            @error('price')
                                <div class="{{ $message }}">
                                    Price is filled with numbers and do not be given the symbol (,) (.)
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                id="description" name="product_description">
                            @error('description')
                                <div class="{{ $message }}">
                                    Description cannot be empty!
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="product_image">
                            @error('image')
                                <div class="{{ $message }}">
                                    Image cannot be empty!
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="select" class="form-label">Select to choose in Category below</label>
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            @endsection
