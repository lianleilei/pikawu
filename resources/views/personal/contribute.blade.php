<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link media="all" href="/personal/css/autoptimize_1f7e9ba7251de94fd1c0e6782a2574d4.css" rel="stylesheet" />
  <title>独舞天涯-投稿-皮卡屋</title>
  <link href="https://demo.salongweb.com/mnews/images/favicon.png" rel="shortcut icon" />
  <meta name="robots" content="noindex,nofollow" /> 
  <meta name="framework" content="Redux 4.1.24" />
  <script src="{!!asset('/laravel-u-editor/ueditor.config.js')!!}"></script>
  <script src="{!!asset('/laravel-u-editor/ueditor.all.min.js')!!}"></script>
  <script src="{!!asset($UeditorLangFile)!!}"></script>
 </head>
 <body class="archive author logged-in">
  @include('home.header')
  <main class="container">
   @include('personal.author_nav')
   <section class="wrapper">
    <section class="author_content">
     <section class="author_subtabs">
      <ul class="tabs">
       <li class="current"> <a href="#"><h5> 投稿</h5> </a></li>
      </ul>
      <section class="salong_message">
       <div class="wrap">
        <form method="post" action="/personal/article/store" id="send-form" enctype="multipart/form-data"> 
          {{ csrf_field() }}
          <input type="hidden" name="type" value="0">
         <table class="form-table">
          <tbody>
           <tr>
            <th width="10%"> 分类</th>
            <td> 
            <option>请选择分类</option>
            
            <select name="typeid">
              @foreach($group as $k=>$vo)
                <option value="{{$vo->id}}">{!! $nbsp[$k] !!}{{$vo->name}}</option>
              @endforeach 
            </select>
            </td>
           </tr>
           <tr>
            <th width="10%"> 标题</th>
            <td><input type="text" name="title" value="" class="large-text" placeholder="请输入主题" required /></td>
           </tr>
           <tr>
            <th width="10%"> 关键字</th>
            <td><input type="text" name="keywords" value="" class="large-text" placeholder="多个关键词请用逗号”,“隔开" required /></td>
           </tr>
           <tr>
            <th width="10%"> 封面图</th>
            <td><input type="file" name="thumb" class="large-text" placeholder="封面图片尺寸： 251*153" required /></td>
           </tr>
           <tr>
            <th width="10%"> 内容</th>
            <td>
             <!-- 加载编辑器的容器 -->
                <script id="container" name="content" type="text/plain" style="width: 100%;height:500px;"></script>

                <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                        ue.ready(function() {
                        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.    
                    });
                </script>
            </td>
           </tr>
          </tbody>
         </table>
         <p class="submit_button"><input type="submit" value="保存" class="button-primary"/></p>
        </form>
       </div>
      </section>
     </section>
    </section>
   </section>
  </main>
  @include('home.footer')
 </body>
</html>