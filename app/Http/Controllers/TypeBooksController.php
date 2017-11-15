<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TypeBooks; //นําเอาโมเดล TypeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
    public function index(){
        //$typebooks = TypeBooks::all();
        //$typebooks = TypeBooks::orderBy('id','desc')->get(); 

        $count = TypeBooks::count(); //นับจํานวนแถวทั้งหมด

        //$typebooks = TypeBooks::simplePaginate(3);
        $typebooks = TypeBooks::paginate(3);

        return view('typebooks.index', [
        'typebooks' => $typebooks,
        'count' => $count
        ]); // ส่งไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php

    }//f.index

    public function destroy($id) {
        //TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }//f.destroy

}//class
