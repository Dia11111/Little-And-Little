<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('id','DESC')->paginate(5);
        return view('admincp.sukien.index')->with(compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.sukien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tensukien' => 'required|unique:event|max:255',
                'slug_sukien' => 'required|unique:event|max:255',
                'chitietsukien' => 'required',
                'image' => 'required|image|mimes:jpeg,jpg,png,svg,gif,jpeg|max:2048,min_width=100,min_height=100,max_width=1000, max_height=1000',
                'giave' => 'required|numeric|min:0',
                'tinhtrang' => 'required',
                'kichhoat'=>'required',
                'ngaybatdau'=> 'required',
                'ngayketthuc'=> 'required',
                'diadiem'=>'required',

            ],
            [
                'tensukien.required' => 'Tên sự kiện chưa được thêm',
                'tensukien.unique' => 'Tên sự kiện đã có xin điền tên khác',
                'slug_sukien.unique' => 'Slug sự kiện đã có xin điền slug khác',
                'slug_sukien.required' => 'Slug sự kiện chưa được thêm',
                'chitietsukien.required' => 'Chi tiết sự kiện chưa được thêm',
                'giave.required' => 'Giá vé chưa được thêm',
                'image.required'=>'Hình ảnh chưa được thêm',
                'ngaybatdau.required'=>'Ngày bắt đầu chưa được thêm',
                'ngayketthuc.required'=> 'Ngày kết thúc chưa được thêm',
                'diadiem.required'=> 'Địa điểm chưa được thêm',
            ]
        );
        $data = $request->all();

        $event = new Event();
        $event->tensukien = $data['tensukien'];
        $event->slug_sukien = $data['slug_sukien'];
        $event->chitietsukien = $data['chitietsukien'];
        $event->diadiem = $data['diadiem'];
        $event->tinhtrang = $data['tinhtrang'];
        $event->kichhoat = $data['kichhoat'];
        $event->giave = $data['giave'];
        $event->ngaybatdau = $data['ngaybatdau'];
        $event->ngayketthuc = $data['ngayketthuc'];
        $event->image = $data['image'];

        $get_image = $request->image;
        $path = 'public/uploads/sukien/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);

        $event->image = $new_image;


        $event->save();
        return redirect()->back()->with('status','Thêm sự kiện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admincp.sukien.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'tensukien' => 'required|max:255',
                'slug_sukien' => 'required|max:255',
                'chitietsukien' => 'required',
                'giave' => 'required|numeric|min:0',
                'tinhtrang' => 'required',
                'kichhoat'=>'required',
                'ngaybatdau'=> 'required',
                'ngayketthuc'=> 'required',
                'diadiem'=>'required',

            ],
            [
                'tensukien.required' => 'Tên sự kiện chưa được thêm',
                'slug_sukien.required' => 'Slug sự kiện chưa được thêm',
                'chitietsukien.required' => 'Chi tiết sự kiện chưa được thêm',
                'giave.required' => 'Giá vé chưa được thêm',
                'ngaybatdau.required'=>'Ngày bắt đầu chưa được thêm',
                'ngayketthuc.required'=> 'Ngày kết thúc chưa được thêm',
                'diadiem.required'=> 'Địa điểm chưa được thêm',
            ]
        );
        $data = $request->all();

        $event = Event::find($id);
        $event->tensukien = $data['tensukien'];
        $event->slug_sukien = $data['slug_sukien'];
        $event->chitietsukien = $data['chitietsukien'];
        $event->diadiem = $data['diadiem'];
        $event->tinhtrang = $data['tinhtrang'];
        $event->kichhoat = $data['kichhoat'];
        $event->giave = $data['giave'];
        $event->ngaybatdau = $data['ngaybatdau'];
        $event->ngayketthuc = $data['ngayketthuc'];

        $get_image = $request->image;
        if($get_image){
            $path = 'public/uploads/sukien/'.$event->image;
            if(file_exists($path)){
                unlink($path);
            }
        $path = 'public/uploads/sukien/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);

        $event->image = $new_image;
        }

        $event->save();
        return redirect()->back()->with('status','Cập nhật sự kiện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $path = 'public/uploads/sukien/'. $event->image;
        if(file_exists($path)){
            unlink($path);
        }
        Event::find($id)->delete();
        return redirect()->back()->with('status','Xóa sự kiện thành công');
    }
}
