<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Payment;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\App;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class IndexController extends Controller
{
    public function home(){
        $ticketCount = Customer::latest()->value('soluongve');

        $itemsPerPage = 4; // Số lượng vé trên mỗi trang
        $totalPages = ceil($ticketCount / $itemsPerPage); // Tổng số trang

        $ticket = Ticket::orderBy('id','DESC')->get();
        return view('pages.home')->with(compact('ticket','totalPages'));
    }

    public function sukien(){
        $event = Event::orderBy('id','DESC')->where('kichhoat', 0)->get();
        return view('pages.event')->with(compact('event'));
    }

    public function lienhe(){
        return view('pages.contact');
    }

    public function sendEmail(Request $req){
        $details = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address'=> $req->address,
            'msg' => $req->msg
        ];

        Mail::to('thocongnghe@gmail.com')->send(new ContactMail($details));
        return back()->with('status','Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!');
    }

    public function xemsukien($slug){
        $event = Event::where('slug_sukien', $slug)->first();
        return view('pages.details')->with(compact('event'));
    }

    public function pay(){
        $customer = Customer::latest('created_at')->first();
        $ticketId = $customer->ve_id;
        $ticket = Ticket::find($ticketId);

        $ticket_name = $ticket->tenve;

        $totalAmount = $ticket->giave * $customer->soluongve;

        return view('pages.pay',['customer' => $customer, 'totalAmount' => $totalAmount, 'ticket_name' => $ticket_name]);   
    }

    public function chitietve(){
        $customer = Customer::latest('created_at')->first();
        $payment = Payment::latest('created_at')->first();
        $ticketId = $customer->ve_id;
        $ticket = Ticket::find($ticketId);
        $ngaysudung = $customer->ngaysudung;
        $orderCode = $payment->order_code;
        $soluongve = $customer->soluongve;
        $tongtien = $payment->tongtien;

        return view('qrcode.index',['ticket'=> $ticket,'customer' => $customer,'payment'=>$payment,'ngaysudung'=>$ngaysudung,'orderCode'=>$orderCode,'soluongve'=>$soluongve,'tongtien'=>$tongtien]);
    }

    public function successpay(){
        $customer = Customer::latest('created_at')->first();
        $payment = Payment::latest('created_at')->first();
        $ticketId = $customer->ve_id;
        $ticket = Ticket::find($ticketId);
        $ngaysudung = $customer->ngaysudung;
        $orderCode = $payment->order_code;
        $soluongve = $customer->soluongve;
        $ticketCount = Customer::latest()->value('soluongve');

        $itemsPerPage = 4; // Số lượng vé trên mỗi trang
        $totalPages = ceil($ticketCount / $itemsPerPage); // Tổng số trang

        $qrcode_url = route('chitietve', ['customer' => $customer]);

        return view('pages.success_pay', compact('qrcode_url','payment','ngaysudung','orderCode','soluongve','ticketCount', 'totalPages'));   

    }

    public function checkout(Request $request){

        $data = new Customer;
        // dd($request->all());
        $data->hoten = $request->hoten;
        $data->soluongve=$request->soluongve;
        $data->diachi = $request->diachi;
        $data->sodienthoai=$request->sodienthoai;
        $data->ngaysudung=$request->ngaysudung;
        $data->ve_id = $request->ve_id;

        $data->save();

        return redirect()->route('pay');
    }

    public function checkout_success(Request $request){
        try{
            $customer = Customer::latest('created_at')->first();
            $customerId = $customer->id; // Lấy ID của khách hàng vừa tìm được

            $foundCustomer = Customer::find($customerId);
            $ticketId = $customer->ve_id;
            $ticket = Ticket::find($ticketId);

            $totalAmount = $ticket->giave * $customer->soluongve;

            $data = new Payment();
            // dd($request->all());
            $data->sothe = $request->sothe;
            $data->hotenthe=$request->hotenthe;
            $data->ngayhethan = $request->ngayhethan;
            $data->cvv = Crypt::encryptString($request->cvv);
            $data->tongtien = $totalAmount;
            $data->customer_id = $request->customer_id;

            $orderCode = strtoupper(bin2hex(random_bytes(5)));

            $data->order_code = $orderCode;

            $foundCustomer->payments()->save($data); 

            return redirect()->route('successpay');
        }catch(Exception $e){
            $request->session()->flash('error', 'Có lỗi xảy ra trong quá trình thanh toán. Vui lòng thử lại sau!');
            
            return redirect()->back();
        }
            
        
    }

    public function indonve($checkout_code){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->indonve_chitiet($checkout_code));
        return $pdf->stream();
    }

    public function indonve_chitiet($checkout_code){
        $customer = Customer::latest('created_at')->first();
        $payment = Payment::latest('created_at')->first();
        $ticketId = $customer->ve_id;
        $ticket = Ticket::find($ticketId);
        
        $ngaysudung = $customer->ngaysudung;
        $orderCode = $payment->order_code;
        $soluongve = $customer->soluongve;

        $output = '';

        $output .= '<style>';
        $output .= 'body { font-family: DejaVu Sans; }';
        $output .= '</style>';
        $output .= '<h1>Chi tiết vé</h1>';
        $output .= '<p>Mã vé: ' . $orderCode . '</p>';
        $output .= '<p>Họ tên: ' . $customer->hoten . '</p>';
        $output .= '<p>Email: ' . $customer->diachi . '</p>';
        $output .= '<p>Số điện thoại: ' . $customer->sodienthoai . '</p>';
        $output .= '<p>Số lượng vé: ' . $soluongve . '</p>';
        $output .= '<p>Ngày sử dụng: ' . $ngaysudung . '</p>';
        $output .= '<p>Tổng tiền: ' . $payment->tongtien . '</p>';

        return $output;
    }
}
