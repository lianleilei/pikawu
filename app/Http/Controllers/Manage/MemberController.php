<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    /**
     * 会员管理
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //客户列表页搜索
        $data = ['where'=>[]];
        $result = DB::table('users');
        if($request->has('search')){
            $search = $request->input('search');
            if(is_numeric($search)){
                //查询手机号
                $result->where('email','like',"%{$search}%");
            }else{
                //查询姓名
                $result->where('name','like',"%{$search}%");
            }
            $data['where']['search'] = $search;
        }
        $data['users'] = $result->orderBy('id','desc')->paginate(10);
        return view('manage.users.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.users.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
