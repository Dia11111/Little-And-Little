@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.ticket')
<main class="col bg-faded py-3 flex-grow-1">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-12">
                <a href="{{route('ve.create')}}" class="btn btn-primary mb-3">Thêm vé</a>
                <div class="card">
                    <div class="card-header">Danh sách vé</div>

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
                                <th scope="col">Tên vé</th>
                                <th scope="col">Slug vé</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Giá vé</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ticket as $key => $ve)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$ve->tenve}}</td>
                                <td>{{$ve->slug_ve}}</td>
                                <td>{{$ve->mota}}</td>
                                <td>{{$ve->soluong}}</td>
                                <td>
                                    @if($ve->tinhtrang==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                        <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    @if($ve->kickhoat==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                        <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>{{$ve->giave}}</td>
                                <td>
                                    <a href="{{route('ve.edit',[$ve->id])}}" class="btn btn-warning mb-1">Chỉnh sửa</a>

                                    <form action="{{route('ve.destroy',[$ve->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn có chắc muốn xóa vé này không?');" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$ticket->links('pagination::bootstrap-4')}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>    
@endsection