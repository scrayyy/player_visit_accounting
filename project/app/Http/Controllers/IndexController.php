<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Models\Xe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Product_history;
use App\Models\Realization_statistic;
use Carbon\Carbon;
use App\Models\Nisia;
use App\Models\Salaro_real;
use App\Models\Salaro_virtual;
use App\Models\Player;
use App\Models\Player_enter;
use Intervention\Image\Facades\Image; // სურატის ზომის შესაცვლელად



class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }


    public function settings()
    {
        return view('settings');
    }


    public function updatepassword(Request $request)
    {
        if($request->enter_password == $request->retry_password AND !empty($request->enter_password)) {
            $User = User::findOrFail(Auth::user()->id);
            $User->password = Hash::make($request->enter_password);
            $User->save();
            return redirect()->back()->with('Success', 'წარმატებით შეიცვალა მომხმარებლის პაროლი');
        }
        else {
            return back()->with('Error', 'შეცდომა, პაროლები არ ემთხვევა ერთმანეთს');
        }
    }


    public function add_player()
    {
        return view('add_player');
    }

    public function add_player_insert(Request $request)
    {
        $this->validateRequest($request);
        $insert = new Player;
        $insert->player_saxeli = $request->player_saxeli;
        $insert->player_piradi_nomeri = $request->player_piradi_nomeri;
        $insert->passport_type = $request->passport_type;
        $insert->piradobis_nomeri = $request->piradobis_nomeri;
        $insert->player_shemosvla_date = Carbon::now("GMT+4"); 
        $insert->save();
        //$this->storeImage($insert);
        return redirect()->back()->with('Success', "მოთამაშე წარმატებით დაემატა");
    }


    public function player_search()
    {
        $info = Player::orderBy('id', 'desc')->get();
        return view('player_search', compact('info'));
    }

    public function search(Request $request)
    {
        $info = Player::where('player_piradi_nomeri', "{$request->player_piradi_nomeri}")
                        ->where('player_saxeli', 'LIKE', "%{$request->player_saxeli}%")->get();
        if($info == "")
        {
            return back()->with('Error', 'მოთამაშე ასეთი პირადი ნომრით არ არსებობს');
        }
        return view('player_search', compact('info'));
    }

    public function search_bydate(Request $request)
    {
        $result = Player_enter::where('date', $request->date)->orderBy('id', 'desc')
                                                            ->get();
        $resulttwo = Player::where('player_shemosvla_date', "LIKE", "%{$request->date}%")->orderBy('id', 'desc')
                                                                                        ->get();
        return view('player_enter_details', compact('result', 'resulttwo'));
    }

    public function shemosvlis_gatareba($id)
    {
        $shemosvlis_gatareba = new Player_enter();
        $shemosvlis_gatareba->player_id = $id;
        $shemosvlis_gatareba->shemosvlis_dro = Carbon::now("GMT+4");
        $shemosvlis_gatareba->date = Date('Y-m-d');
        $shemosvlis_gatareba->save();
        return redirect()->back()->with('Success', 'მოთამაშე წარმატებით გატარდა');
    }

    public function player_enter_details($id)
    {
        $result = Player_enter::where('player_id', $id)->orderBy('id', 'desc')->get();
        $resulttwo = "";
        return view('player_enter_details', compact('result', 'resulttwo'));
    }

    public function edit_player($id)
    {
        $info = Player::where('id', $id)->firstOrFail();
        return view('edit_player', compact('info'));
    }

    public function update_player(Request $request, $id)
    {
        $update_player = Player::findOrFail($id);
        $update_player->player_saxeli = $request->player_saxeli;
        $update_player->player_piradi_nomeri = $request->player_piradi_nomeri;
        $update_player->passport_type = $request->passport_type;
        $update_player->piradobis_nomeri = $request->piradobis_nomeri;
        $update_player->save();
        return redirect()->back()->with('Success', 'მოთამაშის ინფორმაცია წარმატებით განახლდა');
    }

    // public function storeImage($createdObject)
    // {
    //     if(request()->has('image'))
    //     {
    //         $createdObject->update([
    //             'image' => request()->image->store('photos', 'public'),  //
    //         ]);
    //         $image = Image::make(public_path('storage/'. $createdObject->image))->resize(640, 480);
    //         $image->save();
    //     }
    // }
    public function validateRequest(Request $request) // ჩემს მიერ შექმნილი ფუნქცია
    {
        $request->validate([
            'player_saxeli' => 'required',
            'player_piradi_nomeri' => 'required|unique:players',
            'passport_type' => 'required',
            'piradobis_nomeri' => 'sometimes',
        ]);
    }

}



// თარიღით ძებნა, ედითი.