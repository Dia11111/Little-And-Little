@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.event')
<main class="col bg-faded py-3 flex-grow-1">
    <a class="btn btn-secondary mb-2" onclick="window.location='{{ route('sukien.index') }}'">Back</a>
	<div class="card">
        <div class="card-header">Thêm sự kiện</div>
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
            <form method="POST" action="{{route('sukien.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sự kiện</label>
                    <input type="text" class="form-control" value="{{old('tensukien')}}"
                        onkeyup="ChangeToSlug();" name="tensukien" id="slug" aria-describedby="emailHelp"
                        placeholder="Tên sự kiện...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Slug sự kiện</label>
                    <input type="text" class="form-control" value="{{old('slug_sukien')}}" name="slug_sukien"
                        id="convert_slug" aria-describedby="emailHelp" placeholder="Slug sự kiện...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa điểm</label>
                    <input type="text" class="form-control" value="{{old('diadiem')}}" name="diadiem" aria-describedby="emailHelp"
                        placeholder="Địa điểm...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">chi tiết sự kiện</label>
                    <textarea class="form-control" id="chitietsukien" value="{{old('chitietsukien')}}" name="chitietsukien" style="resize: none" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hình ảnh sự kiện</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày diễn ra sự kiện</label>
                    <input id="myID" class="form-control" name="ngaybatdau" aria-describedby="emailHelp" placeholder="Ngày bắt đầu sự kiện...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày kết thúc sự kiện</label>
                    <input id="myID" class="form-control" name="ngayketthuc" aria-describedby="emailHelp" placeholder="Ngày kết thúc sự kiện...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá vé</label>
                    <input type="text" class="form-control" value="{{old('giave')}}" name="giave" aria-describedby="emailHelp" placeholder="Giá vé...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                        <option value="0">Đang diễn ra</option>
                        <option value="1">Sự kiện đã kết thúc</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        <option value="0">Kích hoạt</option>
                        <option value="1">Không kích hoạt</option>
                    </select>
                </div>

                <button type="submit" name="themsukien" class="btn btn-primary">Thêm</button>
            </form>
        </div>
      </div>
</main>
@endsection