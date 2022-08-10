<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\chefs;

use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {

        if(Auth::id())
        {
        $data=user::all();

        return view("admin.users",compact('data'));
        }

        else
        {
            return redirect('login');
        }

    }

    public function delete($id)
    {
        $data=user::find($id);
        $data->delete;
        return redirect()->back();
    }

    public function foodmenu()
    {
        if(Auth::id())
        {

        $data=food::all();
        return view('admin.foodmenu',compact('data'));
        }

        else
        {
            return redirect('login');
        }
    }

    public function upload(Request $request)
    {
        $data =new food;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }

    public function deletefood($id)
    {
        $data=food::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updatefood($id)
    {
        if(Auth::id())
        {

        $data=food::find($id);

        return view('admin.updatemeal',compact('data'));
        }

        else
        {
            return redirect('login');
        }

    }

    public function update(Request $request, $id)
    {
        $data=food::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data =new reservation;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->guest=$request->guest;

        $data->date=$request->date;

        $data->time=$request->time;

        $data->message=$request->message;

        $data->save();

        return redirect()->back();
    }

    public function reservations()
    {
        if(Auth::id())
        {
            $data=reservation::all();
            return view('admin.reservations',compact('data'));
        }

        else
        {
            return redirect('login');
        }
       
    }

    public function chefview()
    {
        if(Auth::id())
        {

        $data=chefs::all();
        return view('admin.chef',compact("data"));
        }

        else
        {
            return redirect('login');
        }

    }

    public function uploadchef(Request $request)
    {
        $data= new chefs;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('chefimage', $imagename);

        $data->image=$imagename;

        $data->name=$request->name;

        $data->specialty=$request->specialty;

        $data->save();

        return redirect()->back();

    }

    public function updatechef($id)
    {
        if(Auth::id())
        {

        $data=chefs::find($id);

        return view('admin.updatechefview',compact("data"));

        }

        else
        {
            return redirect('login');
        }
    }

    public function updatefoodchef(Request $request, $id)
    {
        $data=chefs::find($id);

        $image=$request->image;

        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
    
            $request->image->move('chefimage', $imagename);
    
            $data->image=$imagename;
        }

        $data->name=$request->name;

        $data->specialty=$request->specialty;

        $data->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data=chefs::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function orders()
    {
        if(Auth::id())
        {

        $data=order::all();

        return view("admin.orders",compact("data"));
        }

        else
        {
            return redirect('login');
        }
    }

    public function search(Request $request)
    {
        $search=$request->search;

        $data=order::where('name','Like','%'.$search.'%')
        ->orWhere('foodname','Like','%'.$search.'%')
        ->orWhere('price','Like','%'.$search.'%')
        ->orWhere('address','Like','%'.$search.'%')
        ->orWhere('quantity','Like','%'.$search.'%')
        ->orWhere('phone','Like','%'.$search.'%')->
        get();

        return view("admin.orders",compact("data"));
    }

}
