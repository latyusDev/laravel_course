<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function addData(Request $req)
    {
        # insert data in the database ;

        $user = $req->user;
        $email = $req->email;
        $address = $req->address;
        $password = $req->password;
        DB::insert('insert into members (user ,email, address, password) values(?, ?, ?, ?)', [$user, $email, $address, $password]);
        return redirect('list');
       
    }

       function lists()
       {

        // $data  = Member::all();
        $data = DB::select('select * from members ');

        return view('list', ['members' => $data, 'name' =>'usman']);

       }

        function delete($id)
        {

            $data = DB::delete('delete from members where id = ?', [$id]);
            return redirect('list');
        }

        function showData($id)
        {
            
            $data = DB::select('select * from members where id = ?', [$id]);
            return view('edit', ['data' => $data]);
        }

        function change(){
            return view('edit');
        }

        function update(Request $req, $id)
        {
           
            $password = $req->input('password');
            DB::update('update  members set password = ? where id = ?', [$password, $id]);
            return redirect('list');

        }
}
