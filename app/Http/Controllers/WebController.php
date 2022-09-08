<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class WebController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function web()
    {
        $settings = DB::table('settings')->first();
        $products = DB::table('products')->get();
        return view('frontend.ridepharma', ['setting' => $settings, 'products' => $products]);
    }

    public function contact()
    {
        $settings = DB::table('settings')->first();
        return view('frontend.contact', ['setting' => $settings]);
    }

    public function about()
    {
        $settings = DB::table('settings')->first();

        $pages = DB::table('pages')->where('meta_key', 'about')
            ->first();

        return view('frontend.about', ['setting' => $settings,  'pages' => $pages]);
    }

    public function product_detail($id)
    {
        $settings = DB::table('settings')->first();
        $data = DB::table('products')->where('id', $id)->first();

        return view('frontend.product-detail', ['setting' => $settings, 'product' => $data]);
    }

    public function formdata(Request $req)
    {
        $user = new Contact;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->subject = $req->subject;
        $user->message = $req->message;
        $user->save();
        return redirect('contact-us');
    }

}

