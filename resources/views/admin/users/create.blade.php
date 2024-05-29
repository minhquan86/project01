@extends('layouts.admin')

@section('title')
Tạo Mới Nhân Viên
@stop

@section('content_header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Tạo Mới Nhân Viên</h1>
</div>
@stop

@section('contents')
<div class="col-md-2"></div>
<div class="col-md-8">
    @include('layouts.alert')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.users.form')
    </form>
</div>
@stop