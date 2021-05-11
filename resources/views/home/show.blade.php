<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link media="all" href="/home/css/autoptimize_0f654417e65decdb49e5f63d441d0006.css" rel="stylesheet" />
  <link media="screen" href="/home/css/autoptimize_d32f458fc7c9c7d403c4f07b6d597ae9.css" rel="stylesheet" />
  <title>机器学习和面部识别这一左膀右臂令自动售货机越来越聪明了-MNews 主题</title>
  <link href="https://demo.salongweb.com/mnews/images/favicon.png" rel="shortcut icon" />
  <meta name="baidu-site-verification" content="08FeCJ3bin" />
  <meta name="description" content="我们生活在一个技术剧变的时代。当被问到想一想尖端技术时，自动售货机自然不会是第一个涌入脑海的创新产品。不过，如今先进自动售货机背后的技术却是最具颠覆性的。" />
  <meta name="keywords" content="人工智能,新零售,机器学习,自动售货机,行业观察,面部识别" />
  <script type="text/javascript">var salong_vars = {"processing_error":"\u5904\u7406\u8bf7\u6c42\u65f6\u51fa\u73b0\u9519\u8bef\uff01","login_required":"\u547c\uff0c\u60a8\u5fc5\u987b\u767b\u5f55\u624d\u80fd\u5173\u6ce8\u7528\u6237\uff01","logged_in":"true","ajaxurl":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php","nonce":"cc184089c0"};</script> 
  <script type="text/javascript">var salong_ajax = {"nonce":"91f773108b","ajax_url":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php"};</script> 
 </head>
 <body class="post-template-default single single-post postid-103 single-format-standard">
  @include('home.header')
  <main class="container">
   <section class="wrapper">
    <section class="content" id="scroll">
     <section class="content_left">
      <article class="entry">
        <article class="crumbs"> 
          <a itemprop="breadcrumb" href="https://mnews.pro"><svg t="1509593621934" class="icon" viewBox="0 0 1211 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5132" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M701.828861 1021.752916v-303.411936H511.219135v304.062166c-5.836716 0-11.023201 0.650231-15.559455 0.650231H225.962457c-31.11891 0-51.864851-20.09571-51.864851-52.515081a35868.942174 35868.942174 0 0 1 0-374.082275c0-6.481826 5.186485-14.909225 9.72274-19.450599C265.508766 505.689973 347.197185 434.374523 428.885605 362.408843c54.460653-47.328596 108.916186-95.302303 163.376839-142.630899 4.536254-3.891144 8.427398-7.132057 13.613883-11.668311 32.414252 28.528228 64.833623 56.406225 97.247875 84.929333 106.325504 93.356731 212.651007 186.718582 319.621622 279.425082 11.668311 9.72274 16.209686 20.09571 16.209685 36.305395a32353.273295 32353.273295 0 0 0 0 355.276787c0 21.396171-5.186485 40.196539-22.691512 51.86485-6.481826 4.536254-14.909225 7.782288-22.041281 7.782288-95.302303 0.650231-191.254836 0-286.55714 0-1.950692-0.645111-3.246033-1.295341-5.836715-1.940452z m143.276009-839.575708V39.546309c0-29.173338 6.481826-36.305395 34.359824-36.305396h129.017016c22.041282 0 29.823569 8.427398 29.823569 33.064482 0 98.543216 0.650231 197.736663 0 296.279879 0 15.559455 3.891144 25.282195 14.909224 35.010054 47.328596 40.196539 93.356731 81.68842 140.035097 122.53007 22.691512 20.09571 23.341743 29.823569 3.891144 53.810422-11.668311 14.264114-22.691512 29.173338-35.010055 44.087683-14.264114 18.155258-26.582656 18.800368-43.437452 3.891144-165.322411-146.522043-329.994592-292.393855-495.317003-438.910778-5.836716-5.186485-11.668311-9.72274-18.155257-15.559455-36.955626 33.064482-73.906132 65.478734-110.861758 97.898105-134.198381 118.638926-267.751651 237.282971-401.955152 355.927017-18.155258 16.209686-29.173338 14.909225-44.732794-3.891144-12.318542-15.559455-25.282195-31.769141-37.600736-47.328596-14.264114-18.800368-13.613883-30.46868 3.891143-46.033255C88.518043 427.887577 163.724636 361.113502 238.280999 294.984537c99.843677-88.170246 199.682235-175.695381 299.525912-264.515857 45.383024-40.196539 89.465587-40.196539 134.848611 0 53.810422 47.973707 107.620845 95.302303 161.431268 143.281129 2.590683 1.945572 5.831596 4.536254 11.01808 8.427399z"></path></svg>首页</a>&nbsp;-&nbsp;<a href="https://mnews.pro/rgzn" rel="tag">人工智能</a>&nbsp;-&nbsp;<span class="current">正文</span>
        </article>
       <header class="post_header">
        <h1> {{$data['news']->title}} </h1>
        <div class="postinfo">
         <div class="left">
          <span class="category">
           <svg t="1510536983194" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1850" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M157.572414 461.78869V215.181241s-0.370759-30.349241 27.030069-30.349241h247.719724s28.689655-0.229517 28.689655 30.896552v246.077793s3.319172 29.801931-27.595034 29.801931H183.543172s-25.970759-0.017655-25.970758-29.819586zM573.934345 461.78869V215.181241s-0.370759-30.349241 27.030069-30.349241H848.684138s28.689655-0.229517 28.689655 30.896552v246.077793s3.319172 29.801931-27.595034 29.801931H599.905103s-25.970759-0.017655-25.970758-29.819586zM157.554759 855.728552V609.103448s-0.370759-30.349241 27.030069-30.349241h247.719724s28.689655-0.247172 28.689655 30.896552v246.077793s3.319172 29.801931-27.595035 29.801931H183.525517s-25.970759-0.017655-25.970758-29.801931zM573.934345 855.728552V609.103448s-0.370759-30.349241 27.030069-30.349241H848.684138s28.689655-0.247172 28.689655 30.896552v246.077793s3.319172 29.801931-27.595034 29.801931H599.887448s-25.953103-0.017655-25.953103-29.801931z" p-id="1851"></path>
           </svg><a href="https://mnews.pro/rgzn" rel="category tag">人工智能</a>,<a href="https://mnews.pro/%e6%96%b0%e9%9b%b6%e5%94%ae" rel="category tag">新零售</a></span>
          <span class="date">
           <svg t="1521337956805" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3333" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M915.2 966.4h-768c-38.4 0-64-25.6-64-64v-640c0-38.4 25.6-64 64-64h128V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h384V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h128c38.4 0 64 25.6 64 64v640c0 38.4-32 64-64 64z m0-672c0-19.2-12.8-32-32-32h-96v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4h-384v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4H179.2c-19.2 0-32 12.8-32 32v160h768V294.4z m0 224h-768v352c0 19.2 12.8 32 32 32h704c19.2 0 32-12.8 32-32V518.4z"></path>
           </svg><b>{{date("Y-m-d H:i:s",$data['news']->created_at)}}</b></span>
         </div>
         <div class="right">
          <span class="view">
           <svg t="1509598715318" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3089" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M509.952 199.68c-267.776 0-501.76 219.136-501.76 326.656s232.96 326.656 501.248 326.656 501.248-219.136 501.248-326.656S778.24 199.68 509.952 199.68z m0 608.768c-263.68 0-457.216-217.088-457.216-282.112s193.536-282.112 457.216-282.112 457.216 217.088 457.216 282.112-196.096 282.112-457.216 282.112z" p-id="3090"></path>
            <path d="M509.44 309.248c-119.808 0-216.576 97.28-216.064 217.088 0 119.808 97.28 216.576 217.088 216.064 119.808 0 216.576-97.28 216.064-217.088 0-119.296-96.768-216.064-216.064-216.064h-1.024z m0 365.568c-80.384 0-145.408-65.536-145.408-145.92s65.536-145.408 145.92-145.408 145.408 65.536 145.408 145.92-65.024 145.408-145.408 145.408h-0.512z" p-id="3091"></path>
           </svg><b>{{$data['news']->click}}</b></span>
          
         </div>
        </div>
       </header>
       <div id="scroll_post">
        <div class="content_post">
          {!! $data['news']->content !!}
         
        </div>
        <div class="salong_tags">
        <!-- tag标签或关键字 -->
         <svg t="1509677553769" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3178" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path d="M888.264 64v896L511.998 736 135.736 960V64h752.528z"></path>
         </svg>

         <a href="https://mnews.pro/tag/%e4%ba%ba%e5%b7%a5%e6%99%ba%e8%83%bd" title="人工智能">人工智能(50)</a>
         
        </div>
       </div>

       <section class="prevnext">
        @foreach($data['prev'] as $vo)
        <a href="/news/{{$vo->id}}.html" class="prev" title="{{$vo->title}}">上一篇：{{$vo->title}}</a>
        @endforeach
        @foreach($data['next'] as $vo)
        <a href="/news/{{$vo->id}}.html" class="next" title="{{$vo->title}}">下一篇：{{$vo->title}}</a>
        @endforeach
       </section>
      </article>
      <section class="related_posts ">
       <h4> 相关文章</h4>
       <ul class="layout_ul">
        <li class="layout_li"> <a href="https://mnews.pro/28.html" title="一文读懂旷视的产业认知，姚班高材生印奇眼中的未来三大趋势" class="imgeffect"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/mnews_1.jpg&amp;h=280&amp;w=460" alt="一文读懂旷视的产业认知，姚班高材生印奇眼中的未来三大趋势" /><h3>一文读懂旷视的产业认知，姚班高材生印奇眼中的未来三大趋势</h3> </a></li>
        <li class="layout_li"> <a href="https://mnews.pro/133.html" title="后云计算时代，百度、京东、小米、美团为何纷纷发力云计算？" class="imgeffect"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/mnews_12.jpg&amp;h=280&amp;w=460" alt="后云计算时代，百度、京东、小米、美团为何纷纷发力云计算？" /><h3>后云计算时代，百度、京东、小米、美团为何纷纷发力云计算？</h3> </a></li>
        <li class="layout_li"> <a href="https://mnews.pro/49.html" title="百度：还在转身时（多图模式下自定义四张图片）" class="imgeffect"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/mnews_5.jpg&amp;h=280&amp;w=460" alt="百度：还在转身时（多图模式下自定义四张图片）" /><h3>百度：还在转身时（多图模式下自定义四张图片）</h3> </a></li>
       </ul>
      </section>
     </section>
     <aside class="sidebar">
      <section class="sidebar_widget widget_post_author">
       <section class="author_info">
        <div class="avatar">
        </div>
        <h3> {{$data['user']->name}} </h3>
        <div class="author_btn">
         <div class="follow_links">
         @guest
          <a href="/login" title="关注作者" class="follow user-login" data-user-id="0" data-follow-id="1">关注</a>
         @else
          @if($data['follow'] == 0)
          <a href="javascript:;" onclick="follow('{{$data['user']->id}}')" title="关注作者" class="follow user-login" data-user-id="0" data-follow-id="1">关注</a>
          <img src="/home/images/loading_1.gif" class="salong-ajax"/>
          @endif
         @endguest

         @if($data['follow'] == 1)
          <a id="followjs" href="javascript:;" onclick="follow_del('{{$data['user']->id}}')" title="取消关注" class="followed user-login" data-user-id="0" data-follow-id="1" >已关注</a>
         @endif
         <a id="followjs" href="javascript:;" onclick="follow_del('{{$data['user']->id}}')" title="取消关注" class="followed user-login" data-user-id="0" data-follow-id="1" style="display: none;">已关注</a>
         </div>
        </div>
        <p>{{$data['user']->intro}}</p>
       </section>
       <section class="author_post">
          <div class="title">
           <h4> 最新文章</h4>
          </div>
          <ul>
          @foreach($data['news_up'] as $vo)
           <li> <a href="/news/{{$vo->id}}.html" title="{{$vo->title}}" class="imglayout"> {{$vo->title}} </a>
           </li>
          @endforeach
           
          </ul>
       </section>
       <section class="author_count">
          <ul>
           <li> <span>关注</span> <strong>14</strong></li>
           <li> <span>粉丝</span> <strong>91</strong></li>
           <li> <span>总量</span> <strong>1.99K</strong></li>
           <li> <span>浏览</span> <strong>1.33M</strong></li>
          </ul>
       </section> 
      </section>
      <section id="slongposts-4" class="sidebar_widget widget_salong_posts">
       <div class="sidebar_title">
        <h3>文章聚合</h3>
       </div>
       <ul>
       @foreach($data['news_click'] as $vo)
        <li>
         <article class="list_layout">
          <a href="/news/{{$vo->id}}.html" class="imgeffect" title="{{$vo->title}}"> <img class="thumb" src="{{$vo->thumb}}" alt="{{$vo->title}}" /> </a>
          <h3> <a href="/news/{{$vo->id}}.html" title="{{$vo->title}}">{{$vo->title}}</a></h3>
          <div class="info">
           <span class="date">{{date('Y-m-d',$vo->created_at)}}</span>
          <span class="like">点击：{{$vo->click}}</span>
          </div>
         </article>
        </li>
        @endforeach        
       </ul>
      </section>
     </aside>
    </section>
   </section>
  </main>
  @include('home.footer')
<script type="text/javascript">
  function follow(uid){    
  $.ajax({
          type:"get",
          url:'/news/follow/'+uid,
          success:function(msg){
            $("#followjs").css('display','');
            $(".follow").css('display','none');
          }
      });
  };

  function follow_del(uid){    
    $.ajax({
          type:"get",
          url:'/news/followdel/'+uid,
          success:function(msg){
            $("#followjs").css('display','none');
            $(".follow").css('display','');
          }
      });
  };
</script>
  <script src="/manage/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
 </body>
</html>
