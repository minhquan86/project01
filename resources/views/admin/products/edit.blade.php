@extends('layouts.admin')

@section('title')
Chỉnh Sửa Sản Phẩm
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Chỉnh Sửa Sản Phẩm</h1>
</div>
@stop

@section('contents')
<div class="col-md-2"></div>
<div class="col-md-8">
    @include('layouts.alert')
    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('PATCH')
        @include('admin.products.form')
    </form>
</div>
@stop