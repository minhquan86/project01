@php
$product = isset($product) ? $product : new App\Models\Product();
@endphp

<div class="form-group">
    <label for="category_ids">Chọn Loại Sản Phẩm:</label><label style="color: red">(*)</label>
    <select class="form-control" id="category_id" name="category_id">
        <option value="" selected>Chọn Loại</option>
        @foreach ($categories as $category)
            <option value={{$category->id}} {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="name">Tên Sản Phẩm:</label><label style="color: red">(*)</label>
    <input type="text" class="form-control" value="{{ old('name', $product->name) }}" name="name" autocomplete="off">
</div>

<img src={{ optional($product)->image ? asset('storage/' . $product->image) : '' }} width="200" height="100" class="image_preview" >
<div class="form-group">
  <label for="image">Attach a photograph</label>
  <input type="file" id="image" class="form-control-file" name="image">
</div>

<div class="form-group">
    <label for="price">Giá:</label><label style="color: red">(*)</label>
    <input type="number" class="form-control" value="{{ old('price', $product->price) }}" name="price" autocomplete="off">
</div>

<div class="form-group">
    <label for="discount">Chiết khấu:</label>
    <input type="number" class="form-control" name="discount" value="{{ old('product', $product->discount) }}" autocomplete="off">
</div>

<div class="form-group">
    <label for="status">Trạng thái:</label><label style="color: red">(*)</label>
    <select class="form-control"  name="status">
        <option value="" selected>Chọn Trạng Thái</option>
          <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Còn Hàng</option>
          <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Hết Hàng</option>
    </select>
</div>

<div class="box-footer text-center pb-2">
    <a href="{{ route('products.index') }}" class="btn btn-primary">Quay Lại</a>
    <button type="summit" class="btn btn-primary">{{ $product->id ? 'Cập Nhật' : 'Tạo Mới' }}</button>
</div>

<style>
    .param_img_holder {
        display: none;  
    }

    .param_img_holder img.img-fluid {
        width: 110px;
        height: 70px;
        margin-bottom: 10px;
    }
</style>

@push('js')
    <script>
        const validExtensions = ['jpeg', 'jpg', 'png', 'gif', 'webp', 'svg']
        $(document).ready(function() {
            $('#image').on('change', function() {
                if (this.files && this.files[0]) {
                let img = document.querySelector('.image_preview');
                img.onload = () =>{
                    URL.revokeObjectURL(img.src);
                }
                img.src = URL.createObjectURL(this.files[0]);
                document.querySelector(".image_preview").files = this.files;
            }
            });
        });
    </script>
@endpush
