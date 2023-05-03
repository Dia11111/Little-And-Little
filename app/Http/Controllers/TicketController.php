<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::orderBy('id','DESC')->get();
        return view('admincp.ve.index')->with(compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.ve.create');
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
                'tenve' => 'required|unique:ticket|max:255',
                'slug_ve' => 'required|unique:ticket|max:255',
                'mota' => 'required',
                'soluong' => 'required',
                'giave' => 'required',
                'tinhtrang' => 'required',
                'kickhoat'=>'required',

            ],
            [
                'tenve.required' => 'Tên vé chưa được thêm',
                'tenve.unique' => 'Tên vé đã có xin điền tên khác',
                'slug_ve.unique' => 'Slug vé đã có xin điền slug khác',
                'mota.required' => 'Mô tả chưa được thêm',
                'soluong.required' => 'Số lượng chưa được thêm',
                'giave.required' => 'Giá vé chưa được thêm',
            ]
        );
        $data = $request->all();

        $ticket = new ticket();
        $ticket->tenve = $data['tenve'];
        $ticket->slug_ve = $data['slug_ve'];
        $ticket->mota = $data['mota'];
        $ticket->soluong = $data['soluong'];
        $ticket->tinhtrang = $data['tinhtrang'];
        $ticket->kickhoat = $data['kickhoat'];
        $ticket->giave = $data['giave'];
        $ticket->save();
        return redirect()->back()->with('status','Thêm vé thành công');
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
        $ticket = Ticket::find($id);
        return view('admincp.ve.edit')->with(compact('ticket'));
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
                'tenve' => 'required|max:255',
                'slug_ve' => 'required|max:255',
                'mota' => 'required',
                'soluong' => 'required',
                'giave' => 'required',
                'tinhtrang' => 'required',
                'kickhoat'=>'required',

            ],
            [
                'tenve.required' => 'Tên vé chưa được thêm',
                'mota.required' => 'Mô tả chưa được thêm',
                'soluong.required' => 'Số lượng chưa được thêm',
                'giave.required' => 'Giá vé chưa được thêm',
            ]
        );
        // $data = $request->all();

        $ticket = Ticket::find($id);
        $ticket->tenve = $data['tenve'];
        $ticket->slug_ve = $data['slug_ve'];
        $ticket->mota = $data['mota'];
        $ticket->soluong = $data['soluong'];
        $ticket->tinhtrang = $data['tinhtrang'];
        $ticket->kickhoat = $data['kickhoat'];
        $ticket->giave = $data['giave'];
        $ticket->save();
        return redirect()->back()->with('status','Cập nhật vé thành công');
        // $ticket = Ticket::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return redirect()->back()->with('status','Xóa vé thành công');
    }
}
