<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Notification;
use Illuminate\Support\Facades\Http;
class Controller
{

    public function product (string $slug) {
        $p = Product::where('slug', $slug)->firstOrFail();

        $viewdata = [
            'product' => $p,
            'title' => $p->meta_title,
            'description' => $p->meta_description
        ];

        return view('product',['viewdata'=>$viewdata]);
    }

    public function checkout(Request $request){
        $slug = $request->input('p');
        $p = Product::where('slug', $slug)->firstOrFail();
        return view('checkout',['product'=>$p]);
    }

    public function notification(Request $request){
        $slug = $request->input('p');
        $p = Product::where('slug', $slug)->firstOrFail();
        return view('notification',['product'=>$p]);
    }
    public function addnotification(Request $request)
    {
        $n = New Notification();
        $c = $request->input('contact');
        $n->contact = $c;
        $p = $request->input('product');
        $n->text = $p;
        $n->save();
        $this->notify_me("Нове очікування наявності товару $p $c");
        return view('notificationcomplete');
    }

    public function ordercomplete(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required',
            'username' => 'required',
            'phone' => 'required|digits:10'
        ], $this->messages());

        $order = new Order([
            'data' => json_encode($_POST)
        ]);
        $order->save();

        
        $text = "Нове замовлення №$order->id
        Товар: ".$_POST['product']."
        ПІБ: ".$_POST['username']."
        Телефон: ".$_POST['phone']."
        Доставка: ".$_POST['shipping_address']."
        Оплата: ".$_POST['payment_type']."
        Коментар: ".$_POST['comment'];
        $this->notify_me($text);

        return view('ordercomplete');
    }

    public function messages(): array
    {
        return [
            'phone.digits' => 'Має бути 10 цифр',
        ];
    }

    private function notify_me($message) {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chat_id = env('TELEGRAM_ADMIN_CHAT_ID');
        return Http::post("https://api.telegram.org/bot$token/sendMessage",[
                'chat_id'=>$chat_id,
                'text'=>$message
            ]);
    }
}
