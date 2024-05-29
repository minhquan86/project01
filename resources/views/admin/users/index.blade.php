@extends('layouts.admin')

@section('title')
Quản Lý Nhân Viên
@stop

@section('content_header')
<div class="col-sm-6">
  <h1 class="m-0 text-dark">Quản Lý Nhân Viên</h1>
</div>
@stop

@section('contents')
<div class="col-md-12 mb-3">
  <a href="{{ route('users.create') }}" class="btn btn-primary">Tạo Tài Khoản</a>
</div>
<div class="col-md-12" id="results" style="padding-top: 30px;">
  @include('layouts.alert')
  <table class="table table-striped table-hover">
    <thead class="table-info">
      <tr>
        <th scope="col" class="table_width-10">ID Nhân Viên</th>
        <th scope="col">Tên Nhân Viên</th>
        <th scope="col">Tên Đầy Đủ</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->username }}</td>
        <td>{{ $user->display_name }}</td>
        <td>{{ $user->phone }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}"><i class="fas fa-edit"></i></a>
        </td>
        <td>
          <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
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