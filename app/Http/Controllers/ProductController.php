<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function product()
    {
        $product = Product::latest()->where('deleted_at', null)->get();

        // return $product;
        return view('admin.product.index', ['products' => $product]);

    }
    public function add(Request $req)
    {
        return view('admin.product.add');
    }

    public function save(Request $req)
    {

        // return $req->file('image');
        $fileName = null;
        if ($req->hasFile('image'))
        {
            $filePath = $req->file('image');
            $fileName = time() . '.' . $filePath->getClientOriginalExtension();
            $filePath->move('uploads/products', $fileName);
        };

        $user = new Product;
        $user->id = $req->id;
        $user->name = $req->name;
        $user->image = $fileName;

        $user->description = $req->description;
        $user->save();
        return redirect('admin/product')->with('success','Product created successfully!');

        // return view('admin.product.add');
        
    }

    public function edit($id)
    {
        // return view('admin.product.edit');
        $product = Product::findOrFail($id);
        return view('admin.product.edit')->with('product', $product);

    }
    public function view($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.view')->with('product', $product);
        // return view('admin.product.view');
        
    }
    public function update(Request $req)
    {
        $fileName = null;
        if ($req->hasFile('image'))
        {
            $filePath = $req->file('image');
            $fileName = time() . '.' . $filePath->getClientOriginalExtension();
            $filePath->move('uploads/products', $fileName);

        };

        $id = $req->id;
        $name = $req->name;
        $image = $req->image;
        $description = $req->description;

        Product::where('id', '=', $id)->update(['name' => $name, 'description' => $description, 'image' => $fileName ]);
        return redirect('admin/product')->with('success','Product is updated successfully.');
    }
    public function delete($id)
    {
        Product::where('id', '=', $id)->update(['deleted_at'=>Carbon::now()]);

        // $result = ['status' => true, 'message' => 'Product is deleted successfully.'];
        // return $result;

        return redirect('admin/product')->with('error','Product is deleted successfully.');
    }


    
    public function archive() {
        return view('admin.product.archive');

    }
}



