@extends('layouts.main')
@section('title', 'V Add New Data Category | page')
@section('content')
    <div class="container">

        <a class="btn btn-primary" href="{{ Route('category') }}">
            < Back </a>
                <br>
                <p>
                <h4>Welcome to the Add Category Page</h4>
                </p>
                <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                <p>Please fill in the data below!</p>
                <div class="col-lg-8">
                    <form method="post" action="{{ url('category') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="name" name="category_name">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            @endsection
