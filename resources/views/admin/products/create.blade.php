@extends('layouts.admin')

@section('title')
Tạo Mới Sản Phẩm
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Tạo Mới Sản Phẩm</h1>
</div>
@stop

@section('contents')
<div class="col-md-2"></div>
<div class="col-md-8">
    @include('layouts.alert')
    <form action="{{ route('products.store') }}" method="post" enctype='multipart/form-data'>
        @csrf
        @include('admin.products.form')
    </form>
</div>
@stop