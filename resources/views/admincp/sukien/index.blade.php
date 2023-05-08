@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.event')
<main class="col bg-faded py-3 flex-grow-1">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-12">
                <a href="{{route('sukien.create')}}" class="btn btn-primary mb-3">Thêm sự kiện</a>
                <div class="card">
                    <div class="card-header">Danh sách sự kiện</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sự kiện</th>
                                <th scope="col">Slug sự kiện</th>
                                <th scope="col">Địa điểm</th>
                                <th scope="col">Chi tiết sự kiện</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Giá vé</th>
                                <th scope="col">Ngày bắt đầu</th>
                                <th scope="col">Ngày kết thúc</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($event as $key => $sukien)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$sukien->tensukien}}</td>
                                <td>{{$sukien->slug_sukien}}</td>
                                <td>{{$sukien->diadiem}}</td>
                                <td>{{$sukien->chitietsukien}}</td>
                                <td><img src="{{asset('public/uploads/sukien/' .$sukien->image)}}" height="150" width="150"></td>
                                <td>
                                    @if($sukien->tinhtrang==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                        <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    @if($sukien->kickhoat==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                        <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>{{$sukien->giave}}</td>
                                <td>{{$sukien->ngaybatdau}}</td>
                                <td>{{$sukien->ngayketthuc}}</td>
                                <td>
                                    <a href="{{route('sukien.edit',[$sukien->id])}}" class="btn btn-warning mb-1">Chỉnh sửa</a>

                                    <form action="{{route('sukien.destroy',[$sukien->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn có chắc muốn xóa sự kiện này không?');" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$event->links('pagination::bootstrap-4')}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>    
@endsection