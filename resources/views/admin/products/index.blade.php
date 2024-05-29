@extends('layouts.admin')

@section('title')
Quản lý sản phẩm
@stop

@section('content_header')
<div class="col-sm-6">
  <h1 class="m-0 text-dark">Quản Lý Sản Phẩm</h1>
</div>
@stop

@section('contents')
<div class="col-md-12 mb-3">
  <a href="{{ route('products.create') }}" class="btn btn-primary">Tạo Sản Phẩm</a>
</div>
<div class="col-md-12" id="results" style="padding-top: 30px;">
  @include('layouts.alert')
  <table class="table table-striped table-hover">
    <thead class="table-info">
      <tr>
        <th scope="col" class="table_width-10">ID</th>
        <th scope="col">Phân Loại</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Chiết khấu</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->discount ? $product->discount . '%' : ''}}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('products.edit', ['id' => $product->id]) }}"><i class="fas fa-edit"></i></a>
        </td>
        <td>
          <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger delete" type="submit"><i class="fas fa-trash"></i></button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="text-center">Không tìm thấy dữ liệu.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@stop