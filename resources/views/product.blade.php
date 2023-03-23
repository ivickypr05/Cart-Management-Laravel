@extends('layouts.main')
@section('title', 'V Product | Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-tittle"><center>This page is for updating, adding, and deleting Product.</center></h3>
                    </div>
                    <div class="card-body">
                        <nav>
                            <div class='justify-content-end'>
                            <a class="btn btn-success btn-md" href="/admin/add"><i class="fa fa-plus"></i>+ Add new Data</a>
                        </div>
                        </nav>

                <table class="table table-bordered table-striped mt-1">
                    <thread>
                        <tr>
                            <th colspan="9"><center>Inventory</center></th>
                        </tr>
                        <tr>
                            <th><center>No</th>
                            <th><center>Item Name</th>
                            <th><center>Price</th>
                            <th><center>Description</th>
                            <th><center>Image</th>
                            <th><center>Category</th>
                            <th><center>Actions</th>
                        </tr>
                        </thread>
                        <tbody>
                <?php $no=1;?>
                @foreach ($products as $item)
                    <tr>
                        <th><center>{{ $no++}}.</center></th>
                        <td>{{ $item->name }}</td>
                        <td>Rp.{{ number_format ($item->price) }},-</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{url('assets/image/'.$item->image)}}" width="70px"> </td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            
                                <a href="/admin/{{$item->id}}/edit" class="btn btn-xs btn-warning">Edit</a>
                                <a href="/admin/{{$item->id}}/delete" class="btn btn-xs btn-danger" onclick="return confirm('Are u Sure?');">Delete</a>
                                
                            </td>
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </tfoot>
            </table>
                    </div>
                 </div>
             </div>
         </div>
    </div>
</section>
    </div>
    @endsection