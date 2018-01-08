@extends('admin.layouts.master')

@section('page-header')
    <section class="content-header">
        <h1>
            Edit {!! $product->name !!}
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{!! route('admin.product.index') !!}">
                    <i class="fa fa-dashboard"></i> Products
                </a>
            </li>
        </ol>
    </section>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/select2/dist/css/select2.min.css') }}">
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <form method="post" action="{!! route('admin.product.update', [$product->id]) !!}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control" value="{!! $product->name !!}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="8" class="form-control">
                            {!! $product->description !!}
                        </textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="price">Price</label>
                                <input id="price" type="text" name="price" class="form-control" value="{!! $product->price !!}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="category">Select Category</label>
                        <select id="category" name="categories[]" multiple="multiple" class="form-control select2" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{!! $category->id !!}"
                                        @if(in_array($category->id, $productCategories)) selected @endif>
                                    {!! $category->name !!}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('admin/plugins/select2/dist/js/select2.full.js') }}"></script>
    <script>
        $('.select2').select2();
    </script>
@stop