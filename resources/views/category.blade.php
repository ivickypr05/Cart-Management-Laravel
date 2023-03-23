@extends('layouts.main')
@section('title', 'V Category | Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-tittle">
                            <center>This page is for updating, adding, and deleting Category.</center>
                        </h3>
                    </div>
                    <div class="card-body">
                        <nav>
                            <div class='justify-content-end'>
                                <a class="btn btn-success btn-md" href="/admin/addcategory"><i class="fa fa-plus"></i>+ Add
                                    new Data</a>
                            </div>
                        </nav>

                        <table class="table table-bordered table-striped mt-1">
                            <thread>
                                <tr>
                                    <th colspan="9">
                                        <center>Category</center>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <center>No
                                    </th>
                                    <th>
                                        <center>Category Name
                                    </th>
                                    <th>
                                        <center>Actions
                                    </th>
                                </tr>
                            </thread>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($categories as $item)
                                    <tr>
                                        <th>
                                            <center>{{ $no++ }}.</center>
                                        </th>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <center>
                                                <a href="/admin/{{ $item->id }}/editcategory"
                                                    class="btn btn-xs btn-warning">Edit</a>
                                                <a href="/admin/{{ $item->id }}/deletecategory"
                                                    class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Are u Sure?');">Delete</a>
                                            </center>
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
