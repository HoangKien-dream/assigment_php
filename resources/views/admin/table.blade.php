@extends('admin.layout')
@section('title','Tables')
@section('table')
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Table Apartment</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-none">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Apartment Name</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Detail</th>
                            <th>Description</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th style="width: 80px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->detail}}</td>
                                <td>{{$item->description}}</td>
                                <td><img src="{{$item->thumbnail}}" class="img-thumbnail" alt=""></td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                    <a style="padding-left: 5px"href="#"><i class="fa fa-pencil"></i></a>
                                    <a style="padding-left: 5px" href="#"><i class="fa fa-info"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
