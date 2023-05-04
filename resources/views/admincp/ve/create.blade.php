@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.ticket')
<main class="col bg-faded py-3 flex-grow-1">
    <a class="btn btn-secondary mb-2" onclick="window.location='{{ route('ve.index') }}'">Back</a>
	<div class="card">
        <div class="card-header">Thêm vé</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{route('ve.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên vé</label>
                    <input type="text" class="form-control" value="{{old('tenve')}}"
                        onkeyup="ChangeToSlug();" name="tenve" id="slug" aria-describedby="emailHelp"
                        placeholder="Tên vé...">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Slug vé</label>
                    <input type="text" class="form-control" value="{{old('slug_ve')}}" name="slug_ve"
                        id="convert_slug" aria-describedby="emailHelp" placeholder="Slug vé...">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="mota" value="{{old('mota')}}" name="mota" style="resize: none" rows="5"></textarea>
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá vé</label>
                    <input type="text" class="form-control" value="{{old('giave')}}" name="giave" aria-describedby="emailHelp" placeholder="Giá vé...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                    {{-- <input type="text" class="form-control" value="{{old('soluong')}}" name="soluong" aria-describedby="emailHelp" placeholder="Số lượng..."> --}}
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" id="minus-btn">-</button>
                        <input type="text" class="form-control text-center" value="1" name="soluong" min="1" max="100" id="quantity-input">
                        <button class="btn btn-outline-secondary" type="button" id="plus-btn">+</button>
                      </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                        <option value="0">Đang hoạt động</option>
                        <option value="1">Không hoạt động</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                    <select name="kickhoat" class="form-select" aria-label="Default select example">
                        <option value="0">Kích hoạt</option>
                        <option value="1">Không kích hoạt</option>
                    </select>
                </div>

                <button type="submit" name="themve" class="btn btn-primary">Thêm</button>
            </form>
        </div>
      </div>
      
  
</main>



@endsection