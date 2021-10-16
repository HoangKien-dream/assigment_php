@extends('admin.layout')
@section('title','Form')
@section('form-layout')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                        </div>
                        <h2 class="panel-title">Form Elements</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <h4 class="text-danger">List Errors</h4>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="post" action="">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name Apartment</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" id="name">
                                    @error('name')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="address">Address</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="address" id="address" type="text">
                                    @error('address')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="price">Price</label>
                                <div class="col-md-6">
                                    <input type="text" name="price" id="price"
                                           class="form-control">
                                    @error('price')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="detail">Detail</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="detail" id="detail">
                                    @error('detail')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-3 control-label" for="description">Description</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                                        @error('description')
                                        <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                        @enderror
                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="thumbnail">Thumbnail</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="thumbnail"
                                           id="thumbnail">
                                    @error('thumbnail')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Status</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="status" id="status" type="number">
                                    @error('status')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-primary">Button</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- col-md-6 -->
    </div>
@endsection
