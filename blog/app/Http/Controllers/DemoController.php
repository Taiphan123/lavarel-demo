<?php

namespace App\Http\Controllers;

use App\Demo;
use Validator;
use App\DemoCauThu;
use App\Http\Requests\Themrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $info = "Trang demo";
        // $data = DB::table('cauthu')->get()->toArray();
        $data = DemoCauThu::all();
        return view('demo',compact('data'));
        
    }
    // Validation c2
    public function handleForm1(Request $request){
        $validate = Validator::make(
        $request->all(),
            [
                'name'=>'required|min:3|max:255',
                'age'=>'required|integer',
                'positon'=>'required',
                'salary'=>'required|integer',            
            ],
            [
                'required'=>':attribute Không được để trống',
                'min'=>':attribute không được nhỏ hơn:min',
                'max'=>':attribute không được lớn hơn:max',
                'integer'=>':attribute chỉ được nhập số',           
            ],
            [
                'name'=>'Tên cầu thủ',
                'age'=>'Tuổi',
                'positon'=>'Quốc tịch',
                'salary'=>'Lương'       
            ]
        );
        if($validate->fails()){
            return View('ValidatonView')->withErrors($validate);
        }
    }
     // Validation c1
     public function handleForm(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:5|max:255',
                'age'=>'required|integer|max:255',
                'positon'=>'required|min:5|max:255',
                'salary'=>'required|integer|max:255',            
            ],
            [
                'required'=>':attribute Không được để trống',
                'min'=>':attribute không được nhỏ hơn:min',
                'max'=>':attribute không được lớn hơn:max',
                'integer'=>':attribute chỉ được nhập số',   
                'double'=>':attribute chỉ được nhập số',          
            ],
            [
                'name'=>'Tên cầu thủ',
                'age'=>'Tuổi',
                'positon'=>'Quốc tịch',
                'salary'=>'Lương'       
            ]
        );
    }

    


    public function getThem()
    {
        return view('them');       
    }
    public function postThem(Themrequest $request)
    {
    //     DB::table('cauthu')->inserSSt(
    //         [
    //             'name'  =>  $request->name, 
    //             'age'   =>   $request->age,
    //             'positon'   =>  $request->positon,
    //             'salary'   =>   $request->salary
    //         ]
    //    ); 
        // $this->handleForm($request);
        $cauThu= new DemoCauThu();
        $cauThu->name = $request->name;
        $cauThu->age = $request->age;
        $cauThu->positon = $request->positon;
        $cauThu->salary = $request->salary;

        $cauThu->save();
        
    }

    public function getEdit($id)
    {
        $data = DB::table('cauthu')->where('id',$id)->get(); 
        // $data-> DemoCauThu::where('id',$id)->get(); 
        return view('Edit',compact('data'));
    }
    public function postEdit(Request $request,$id)
    {
    //     DB::table('cauthu')->where('id',$id)->update(
    //         [
    //             'name'  =>  $request->name, 
    //             'age'   =>   $request->age,
    //             'positon'   =>  $request->positon,
    //             'salary'   =>   $request->salary
    //         ]
    //    ); 
        DemoCauThu::where('id',$id)->update(
            [
                'name'  =>  $request->name, 
                'age'   =>   $request->age,
                'positon'   =>  $request->positon,
                'salary'   =>   $request->salary
            ]
        ); 
    }

    public function getDelete($id)
    {
        // DB::table('cauthu')->where('id',$id)->delete();
        $cauThu = DemoCauThu::find($id);
        $cauThu->delete();
        return view('Delete');        
    }

   

    // public function GetLogin(Request $request)
    // {        
    //     return view('login');
    // }

    // public function PostLogin(Request $request)
    // {
    //     echo $request->username;
    //     echo $request->password;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo 'Đã thêm sp';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function show(Demo $demo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function edit(Demo $demo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demo $demo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demo $demo)
    {
        
    }
}
