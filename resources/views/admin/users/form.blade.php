@php
$user = isset($user) ? $user : new App\Models\User();
@endphp

<div class="form-group">
    <label for="username">Tên Đăng Nhập:</label><label style="color: red">(*)</label>
    <input type="text" class="form-control" value="{{ old('username', $user->username) }}" name="username" autocomplete="off">
</div>

<div class="form-group">
    <label for="display_name">Tên Hiển Thị:</label><label style="color: red">(*)</label>
    <input type="text" class="form-control" value="{{ old('display_name', $user->display_name) }}" name="display_name" autocomplete="off">
</div>

<div class="form-group">
    <label for="email">Địa Chỉ Email:</label><label style="color: red">(*)</label>
    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" autocomplete="off">
</div>

<div class="form-group">
    <label>Password:</label><label style="color: red">(*)</label>
    <input class="form-control" id="password" placeholder="password" name="password" autocomplete="off">
</div>

<div class="form-group">
    <label>Xác Nhận Password:</label><label style="color: red">(*)</label>
    <input class="form-control" id="password_confirm" placeholder="Password Confirmation" name="password_confirmation" autocomplete="off">
</div>

<div class="form-group">
    <label for="roles">Chọn Quyền:</label><label style="color: red">(*)</label>
    <select class="form-control" id="role" name="role">
        <option value="" selected>Chọn quyền</option>
          <option value="1" {{ old('role', $user->role) == 1 ? 'selected' : '' }}>Admin</option>
          <option value="2" {{ old('role', $user->role) == 2 ? 'selected' : '' }}>Nhân viên</option>
    </select>
</div>

<div class="form-group">
    <label for="phone">Số Điện Thoại:</label><label style="color: red">(*)</label>
    <input type="number" class="form-control" value="{{ old('phone', $user->phone) }}" name="phone" autocomplete="off">
</div>

<div class="box-footer text-center pb-2">
    <a href="{{ route('users.index') }}" class="btn btn-primary">Quay Lại</a>
    <button type="summit" class="btn btn-primary">{{ $user->id ? 'Cập Nhật' : 'Tạo Mới' }}</button>
</div>
