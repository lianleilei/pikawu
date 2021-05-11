<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link media="all" href="/personal/css/autoptimize_b507b161f34af9aa49ddfea33fc7353d.css" rel="stylesheet" />
  <title>独舞天涯-点赞的文章-MNews 主题</title>
  <link href="https://demo.salongweb.com/mnews/images/favicon.png" rel="shortcut icon" />
  <meta name="baidu-site-verification" content="08FeCJ3bin" />
  <meta name="robots" content="noindex,nofollow" /> 
  <script type="text/javascript">var salong_vars = {"processing_error":"\u5904\u7406\u8bf7\u6c42\u65f6\u51fa\u73b0\u9519\u8bef\uff01","login_required":"\u547c\uff0c\u60a8\u5fc5\u987b\u767b\u5f55\u624d\u80fd\u5173\u6ce8\u7528\u6237\uff01","logged_in":"true","ajaxurl":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php","nonce":"cc184089c0"};</script> 
  <script type="text/javascript">var salong_ajax = {"nonce":"91f773108b","ajax_url":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php"};</script> 
  <meta name="framework" content="Redux 4.1.24" />
 </head>
 <body class="archive author logged-in">
  @include('home.header')
  <main class="container">
   @include('personal.author_nav')
   <section class="wrapper">
    <section class="author_content">
     <section class="author_subtabs">
      <ul class="tabs">
       <li class="current"> <a href="https://mnews.pro/author/2644?tab=like"><h5> 文章</h5> <span class="count">（4）</span> </a></li>
      </ul>
      <section class="post_list">
       <ul class="ajaxposts">
      @foreach($data['news'] as $vo)
        <li class="ajaxpost">
         <article class="post_main simple"> 
          <a href="/news/{{$vo->id}}.html" class="imgeffect" title="{{$vo->title}}" target="_blank"> <img class="thumb" src="{{$vo->thumb}}" data-original="" alt="群雄逐鹿的云计算时代，谁能独领风骚" width="226" height="137" /> </a>
          <h2><a href="/news/{{$vo->id}}.html" title="{{$vo->title}}" target="_blank">{{$vo->title}}</a></h2> 
          <span class="is_category"><a href="https://mnews.pro/yjs" rel="category tag">云计算</a> <a href="https://mnews.pro/%e5%a4%a7%e6%95%b0%e6%8d%ae" rel="category tag">大数据</a></span>
          <div class="excerpt">
            {{$vo->description}}…
          </div>
          <div class="postinfo">
           <div class="left"> 
            <span class="date">
             <svg t="1521337956805" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3333" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path d="M915.2 966.4h-768c-38.4 0-64-25.6-64-64v-640c0-38.4 25.6-64 64-64h128V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h384V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h128c38.4 0 64 25.6 64 64v640c0 38.4-32 64-64 64z m0-672c0-19.2-12.8-32-32-32h-96v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4h-384v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4H179.2c-19.2 0-32 12.8-32 32v160h768V294.4z m0 224h-768v352c0 19.2 12.8 32 32 32h704c19.2 0 32-12.8 32-32V518.4z"></path>
             </svg><b>{{date("Y-m-d",$vo->created_at)}}</b>
            </span>
            <span class="date">
             状态：<b>{{$vo->status == 0 ? '文章审核中...' : '已通过'}}</b>
            </span>
            <span class="date">
             
            </span>
           </div>
           <div class="right">
            <span class="view">
              <b>
                @if($vo->status == 0)
                <a href=""  style="color: red">修改文章</a>
                @endif
              </b> 
            </span> 
           </div>
          </div>
         </article>
        </li>
      @endforeach
       </ul>
      </section>
      {{ $data['news']->links() }}
     </section>
    </section>
   </section>
  </main>
  @include('home.footer')
 </body>
</html>