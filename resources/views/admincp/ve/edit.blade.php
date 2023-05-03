@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.ticket')
<main class="col bg-faded py-3 flex-grow-1">
    <br>
	<div class="card">
        <div class="card-header">Cập nhật vé</div>
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
            <form method="POST" action="{{route('ve.update', [$ticket->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên vé</label>
                    <input type="text" class="form-control" value="{{$ticket->tenve}}"
                        onkeyup="ChangeToSlug();" name="tenve" id="slug" aria-describedby="emailHelp"
                        placeholder="Tên vé...">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Slug vé</label>
                    <input type="text" class="form-control" value="{{$ticket->slug_ve}}" name="slug_ve"
                        id="convert_slug" aria-describedby="emailHelp" placeholder="Slug vé...">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                    <textarea class="form-control" name="mota" style="resize: none" rows="5">{{$ticket->mota}}</textarea>
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá vé</label>
                    <input type="text" class="form-control" value="{{$ticket->giave}}" name="giave" aria-describedby="emailHelp" placeholder="Giá vé...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" value="{{$ticket->soluong}}" name="soluong" aria-describedby="emailHelp" placeholder="Số lượng...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                        @if ($ticket->kickhoat==0)
                            <option selected value="0">Đang hoạt động</option>
                            <option value="1">Không hoạt động</option>
                        @else
                            <option value="0">Đang hoạt động</option>
                            <option selected value="1">Không hoạt động</option>
                        @endif
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                    <select name="kickhoat" class="form-select" aria-label="Default select example">
                        @if ($ticket->kickhoat==0)
                        <option selected value="0">Đang kích hoạt</option>
                        <option value="1">Không kích hoạt</option>
                    @else
                        <option value="0">Đang kích hoạt</option>
                        <option selected value="1">Không kích hoạt</option>
                    @endif
                    </select>
                </div>

                <button type="submit" name="themve" class="btn btn-primary">Thêm</button>
            </form>
        </div>
      </div>
      
  
</main>



@endsection