<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = null;
        $data['links'] = DB::table('cms_link')->where('passed',1)->orderBy('id','asc')->get();
        $data['type'] = DB::table('cms_type')->where('display',1)->limit(6)->get();
        return view('home.index',compact('data'));
    }

    /**
     * 栏目路由
     * $id 要访问的栏目id
     * @return \Illuminate\Http\Response
     */
    public function type($id)
    {
        $data = null;
        $data['type'] = DB::table('cms_type')->where('display',1)->limit(6)->get();
        return view('home.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = null;
        $res = DB::table('cms_news');
        $data['type'] = DB::table('cms_type')->where('display',1)->limit(6)->get();
        $data['news'] = $res->where('id',$id)->first();
                //1.先判断当前是否登录
        if (Auth::check()) {
            // 用户已登录...
            $user = Auth::user();
            if(in_array($data['news']->uid, explode(",",$user->follow))){
                $data['follow'] = 1;
            }else{
                $data['follow'] = 0;
            }
        }else{
            // 未登录
            $data['follow'] = 0;
        }

        $data['news_click'] = $res->where('uid',$data['news']->uid)->where('status',1)->orderBy('click','desc')->limit(5)->get();

        $data['news_up'] = $res->where('uid',$data['news']->uid)->where('status',1)->orderBy('id','desc')->limit(5)->get();

        $data['user'] = DB::table('users')->where('id',$data['news']->uid)->first();
        //关注 粉丝数 
        
        //2.检查当前用户是否已关注过作者 是回复1 否回0
        

        //上一篇
        $data['prev'] = $res->where('id','<',$id)
              ->where('status',1)
              ->orderBy('id','desc')
              ->limit(1)
              ->get();
        //下一篇
        $data['next'] = $res->where('id','>',$id)
              ->where('status',1)
              ->orderBy('id','asc')
              ->limit(1)
              ->get();
        $res->where('id',$id)->increment('click');
        return view('home.show',compact('data'));
    }

    /**
     * 点击关注用户
     * $uid参数是被关注者id
     */
    public function follow($uid)
    {
        $res = DB::table('users');
        //获取当前登录者信息
        $user = Auth::user();
        $fans = $res->where('id',$uid)->value('fans');
        if($user->follow == NULL){
            $res->where('id',$user->id)->update(['follow' => $uid.',']);
        }else{
            //检查数据库是否已存在
            $follow = $res->where('id',$user->id)->value('follow');
            if(in_array($uid, explode(",",$follow))){
                //如果存在，则判定用户要取消关注
                $n_follow = str_replace($uid.',','',$follow);
                $res->where('id',$user->id)->update(['follow'=> $n_follow]);
            }else{
                //更新关注者follow字段
                DB::update("update users set follow = CONCAT(follow,'$uid',',') where id='$user->id'");
            }
        }
        //被关注者 代码需改进。。。。
        if($fans == NULL){
            //被关注者
            $res->where('id',$uid)->update(['fans' => $user->id.',']);
        }else{
            if(in_array($user->id, explode(",",$fans))){
                $n_fans = str_replace($user->id.',','',$fans);
                $res->where('id',$uid)->update(['fans'=> $n_fans]);
            }else{
                //更新被关注者fans字段
                DB::update("update users set fans = CONCAT(fans,'$user->id',',') where id='$uid'");
            }
        }

        //更新被关注者数据
        
        return ['msg'=>'success']; 
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
