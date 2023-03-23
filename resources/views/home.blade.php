@extends('layouts.main')
@section('title', 'V Home | Page')
@section('content')

    <div class="d-flex row justify-content-start gap-3">
        @foreach ($products as $item)
            <div class="col-3 card mt-3" style="width: 15rem;">
                <img src="{{ url('assets/image/' . $item->image) }}" class="card-img-top" alt="hedset">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->name }}</h4>
                    <h6 class="card-text">Price : Rp.{{ number_format($item->price) }},-</h6>
                    <h6 class="card-text">Category : {{ $item->category->name }}</h6>
                    <p class="card-text">{{ $item->description }}</p>
                    {{--  <a href="#" class=""></a>  --}}

                    <form action="{{ route('tocart.store') }}" class="d-flex justify-content-between" method="POST">
                        @csrf
                        <div class="input-group input-group-sm " style="width:25%">
                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                        </div>
                        <button type="submit" href='{{ route('tocart.store') }}' class="btn btn-primary">Add to
                            cart</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
