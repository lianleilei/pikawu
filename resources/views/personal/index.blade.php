<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link media="all" href="/personal/css/autoptimize_0f654417e65decdb49e5f63d441d0006.css" rel="stylesheet" />
  <title>我的主页-皮卡屋</title>
  <link href="https://demo.salongweb.com/mnews/images/favicon.png" rel="shortcut icon" />
  <meta name="baidu-site-verification" content="08FeCJ3bin" />
  <meta name="description" content="当前模块是分类目录列表下的文章，MNews 主题所有类型分类都可以单独设置分类在首页。" />
  <meta name="keywords" content="云计算" />
  <link rel="canonical" href="https://mnews.pro/yjs" />
  <meta name="robots" content="noindex,nofollow" />
    <script type="text/javascript">var salong_vars = {"processing_error":"\u5904\u7406\u8bf7\u6c42\u65f6\u51fa\u73b0\u9519\u8bef\uff01","login_required":"\u547c\uff0c\u60a8\u5fc5\u987b\u767b\u5f55\u624d\u80fd\u5173\u6ce8\u7528\u6237\uff01","logged_in":"true","ajaxurl":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php","nonce":"cc184089c0"};</script> 
  <script type="text/javascript">var salong_ajax = {"nonce":"91f773108b","ajax_url":"https:\/\/mnews.pro\/wp-admin\/admin-ajax.php"};</script>  
 </head>
 <body class="archive category category-yjs category-60">
  @include('home.header')
  <main class="container">
   <article class="crumbs">
    <div class="wrapper"> 
     <a itemprop="breadcrumb" href="https://mnews.pro">
      <svg t="1509593621934" class="icon" viewbox="0 0 1211 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5132" xmlns:xlink="http://www.w3.org/1999/xlink">
       <path d="M701.828861 1021.752916v-303.411936H511.219135v304.062166c-5.836716 0-11.023201 0.650231-15.559455 0.650231H225.962457c-31.11891 0-51.864851-20.09571-51.864851-52.515081a35868.942174 35868.942174 0 0 1 0-374.082275c0-6.481826 5.186485-14.909225 9.72274-19.450599C265.508766 505.689973 347.197185 434.374523 428.885605 362.408843c54.460653-47.328596 108.916186-95.302303 163.376839-142.630899 4.536254-3.891144 8.427398-7.132057 13.613883-11.668311 32.414252 28.528228 64.833623 56.406225 97.247875 84.929333 106.325504 93.356731 212.651007 186.718582 319.621622 279.425082 11.668311 9.72274 16.209686 20.09571 16.209685 36.305395a32353.273295 32353.273295 0 0 0 0 355.276787c0 21.396171-5.186485 40.196539-22.691512 51.86485-6.481826 4.536254-14.909225 7.782288-22.041281 7.782288-95.302303 0.650231-191.254836 0-286.55714 0-1.950692-0.645111-3.246033-1.295341-5.836715-1.940452z m143.276009-839.575708V39.546309c0-29.173338 6.481826-36.305395 34.359824-36.305396h129.017016c22.041282 0 29.823569 8.427398 29.823569 33.064482 0 98.543216 0.650231 197.736663 0 296.279879 0 15.559455 3.891144 25.282195 14.909224 35.010054 47.328596 40.196539 93.356731 81.68842 140.035097 122.53007 22.691512 20.09571 23.341743 29.823569 3.891144 53.810422-11.668311 14.264114-22.691512 29.173338-35.010055 44.087683-14.264114 18.155258-26.582656 18.800368-43.437452 3.891144-165.322411-146.522043-329.994592-292.393855-495.317003-438.910778-5.836716-5.186485-11.668311-9.72274-18.155257-15.559455-36.955626 33.064482-73.906132 65.478734-110.861758 97.898105-134.198381 118.638926-267.751651 237.282971-401.955152 355.927017-18.155258 16.209686-29.173338 14.909225-44.732794-3.891144-12.318542-15.559455-25.282195-31.769141-37.600736-47.328596-14.264114-18.800368-13.613883-30.46868 3.891143-46.033255C88.518043 427.887577 163.724636 361.113502 238.280999 294.984537c99.843677-88.170246 199.682235-175.695381 299.525912-264.515857 45.383024-40.196539 89.465587-40.196539 134.848611 0 53.810422 47.973707 107.620845 95.302303 161.431268 143.281129 2.590683 1.945572 5.831596 4.536254 11.01808 8.427399z"></path>
      </svg>首页</a>&nbsp;-&nbsp;
     <a itemprop="breadcrumb" href="https://mnews.pro/posts">文章</a>&nbsp;-&nbsp;
     <span class="current">云计算</span>
     <span class="count">共<b>46</b>篇</span>
    </div>
   </article>
   <div class="wrapper">
    <section class="ad">
     <!-- <a title="文章列表上的广告" href="#" target="_blank" rel="noopener"><img src="images/ad.jpg" alt="MNews 主题" /></a>
    </section> -->
    <section class="content" id="scroll">
     <section class="content_left">
      <ul class="ajaxposts">
      @foreach($data['news'] as $vo)
       <li class="ajaxpost">
        <article class="post_main simple"> 
         <a href="/news/{{$vo->id}}.html" class="imgeffect" title="{{$vo->title}}" target="_blank"> <img class="thumb" src="{{$vo->thumb}}" data-original="" alt="{{$vo->title}}" /> </a>
         <h2><a href="/news/{{$vo->id}}.html" title="{{$vo->title}}" target="_blank">{{$vo->title}}</a></h2> 
         <div class="excerpt">
           {{$vo->description}}…
         </div>
         <div class="postinfo">
          <div class="left"> 
           <span class="author"><a href="#" title="萨龙龙">{{$data['user']->name}}</a></span> 
           <span class="date">
            <svg t="1521337956805" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3333" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M915.2 966.4h-768c-38.4 0-64-25.6-64-64v-640c0-38.4 25.6-64 64-64h128V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h384V102.4c0-19.2 12.8-32 32-32s32 12.8 32 32v96h128c38.4 0 64 25.6 64 64v640c0 38.4-32 64-64 64z m0-672c0-19.2-12.8-32-32-32h-96v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4h-384v96c0 19.2-12.8 32-32 32s-32-12.8-32-32V262.4H179.2c-19.2 0-32 12.8-32 32v160h768V294.4z m0 224h-768v352c0 19.2 12.8 32 32 32h704c19.2 0 32-12.8 32-32V518.4z"></path>
            </svg><b>{{date('Y-m-d',$vo->created_at)}}</b></span>
          </div>
          <div class="right"> 
           <span class="view">
            <svg t="1509598715318" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3089" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M509.952 199.68c-267.776 0-501.76 219.136-501.76 326.656s232.96 326.656 501.248 326.656 501.248-219.136 501.248-326.656S778.24 199.68 509.952 199.68z m0 608.768c-263.68 0-457.216-217.088-457.216-282.112s193.536-282.112 457.216-282.112 457.216 217.088 457.216 282.112-196.096 282.112-457.216 282.112z" p-id="3090"></path>
             <path d="M509.44 309.248c-119.808 0-216.576 97.28-216.064 217.088 0 119.808 97.28 216.576 217.088 216.064 119.808 0 216.576-97.28 216.064-217.088 0-119.296-96.768-216.064-216.064-216.064h-1.024z m0 365.568c-80.384 0-145.408-65.536-145.408-145.92s65.536-145.408 145.92-145.408 145.408 65.536 145.408 145.92-65.024 145.408-145.408 145.408h-0.512z" p-id="3091"></path>
            </svg><b>{{$vo->click}}</b></span> 
          </div>
         </div>
        </article></li>
        @endforeach

       <nav class="navigation pagination" role="navigation" aria-label="文章">
        <h2 class="screen-reader-text">文章导航</h2>
        <div class="nav-links">
         <span aria-current="page" class="page-numbers current">1</span> 
         <a class="page-numbers" href="https://mnews.pro/yjs/page/2">2</a> 
         <span class="page-numbers dots">…</span> 
         <a class="page-numbers" href="https://mnews.pro/yjs/page/4">4</a> 
         <a class="next page-numbers" href="https://mnews.pro/yjs/page/2">
          <svg t="1510297521288" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1965" xmlns:xlink="http://www.w3.org/1999/xlink">
           <path d="M745.65898437 533.84433594l-416.32822265 416.32822265c-6.66298828 6.66298828-15.86689453 10.78330078-26.03408203 10.78330079-20.33349609 0-36.81738281-16.48388672-36.81738282-36.81738282 0-10.1671875 4.12119141-19.37109375 10.78330079-26.03408203l394.49355468-394.49355469-381.82675781-381.89707031c-6.07763672-6.2859375-9.82265625-14.86054687-9.82265625-24.30878906 0-19.32539062 15.66650391-34.99189453 34.99189453-34.99189453 9.44912109 0 18.02285156 3.74501953 24.31845703 9.83144531l395.88398438 395.88398438c4.78740234 4.87265625 8.14042969 11.16914062 9.36738281 18.19599609-0.759375-4.89814453 0.29003906-5.52919922 0.99052734-4.47978516 6.64277344 6.65859375 10.75078125 15.8484375 10.75078125 25.99892578 0 10.14960938-4.10800781 19.34033203-10.75166015 25.99892578z"></path>
          </svg></a>
        </div>
       </nav>
      </ul>
     </section>
     <aside class="sidebar">
      <section id="slongword-2" class="sidebar_widget widget_salong_word">
       <div class="sidebar_title">
        <h3>作者简介</h3>
       </div>
       <div class="oneword">
        <p>{{$data['user']->intro}}</p> 
        <span>{{$data['user']->name}}</span>
       </div>
      </section>
      <section id="slongposts-3" class="sidebar_widget widget_salong_posts">
       <div class="sidebar_title">
        <h3>热评文章</h3>
       </div>
       <ul>
        <li>
         <article class="list_layout"> 
          <a href="https://mnews.pro/4758.html" class="imgeffect" title="MNews主题更新日志，最新版本3.5"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/default-thumb.jpg&amp;h=280&amp;w=460" alt="MNews主题更新日志，最新版本3.5" /> </a>
          <h3> <a href="https://mnews.pro/4758.html" title="MNews主题更新日志，最新版本3.5">MNews主题更新日志，最新版本3.5</a></h3>
          <div class="info"> 
           <span class="category"><a href="https://mnews.pro/original-theme" rel="category tag">原创主题</a></span> 
           <span class="date">2年前</span> 
           <span class="like">
            <svg t="1521349270835" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5429" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M987.733333 273.066667C947.2 151.466667 836.266667 64 704 64c-66.133333 0-128 23.466667-179.2 59.733333-8.533333 6.4-19.2 6.4-25.6 0C448 87.466667 386.133333 64 320 64 187.733333 64 74.666667 151.466667 36.266667 273.066667c-10.666667 21.333333-14.933333 53.333333-14.933334 93.866666 0 228.266667 339.2 497.066667 452.266667 580.266667 21.333333 17.066667 53.333333 17.066667 74.666667 0C663.466667 864 1002.666667 595.2 1002.666667 366.933333c0-42.666667-4.266667-72.533333-14.933334-93.866666z m-462.933333 640c-6.4 4.266667-17.066667 4.266667-23.466667 0C352 804.266667 64 556.8 64 366.933333v-2.133333c0-34.133333 4.266667-59.733333 10.666667-74.666667v-4.266666C110.933333 179.2 209.066667 106.666667 320 106.666667c61.866667 0 123.733333 25.6 170.666667 66.133333l8.533333 6.4c8.533333 6.4 19.2 6.4 27.733333 0l12.8-10.666667C584.533333 128 644.266667 106.666667 704 106.666667c110.933333 0 209.066667 72.533333 243.2 179.2v4.266666c6.4 17.066667 10.666667 42.666667 10.666667 76.8 2.133333 189.866667-285.866667 437.333333-433.066667 546.133334z m-192-366.933334C198.4 465.066667 213.333333 334.933333 213.333333 330.666667c2.133333-12.8-6.4-23.466667-17.066666-23.466667-10.666667-2.133333-23.466667 6.4-23.466667 19.2 0 6.4-21.333333 162.133333 138.666667 258.133333 4.266667 2.133333 6.4 2.133333 10.666666 2.133334 6.4 0 14.933333-4.266667 19.2-10.666667 4.266667-10.666667 0-23.466667-8.533333-29.866667z"></path>
            </svg><b>140</b></span>
          </div>
         </article></li>
        <li>
         <article class="list_layout"> 
          <a href="https://mnews.pro/151.html" class="imgeffect" title="多云模式并非完美的云生态"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/mnews_1.jpg&amp;h=280&amp;w=460" alt="多云模式并非完美的云生态" /> </a>
          <h3> <a href="https://mnews.pro/151.html" title="多云模式并非完美的云生态">多云模式并非完美的云生态</a></h3>
          <div class="info"> 
           <span class="category"><a href="https://mnews.pro/yjs" rel="category tag">云计算</a></span> 
           <span class="date">3年前</span> 
           <span class="like">
            <svg t="1521349270835" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5429" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M987.733333 273.066667C947.2 151.466667 836.266667 64 704 64c-66.133333 0-128 23.466667-179.2 59.733333-8.533333 6.4-19.2 6.4-25.6 0C448 87.466667 386.133333 64 320 64 187.733333 64 74.666667 151.466667 36.266667 273.066667c-10.666667 21.333333-14.933333 53.333333-14.933334 93.866666 0 228.266667 339.2 497.066667 452.266667 580.266667 21.333333 17.066667 53.333333 17.066667 74.666667 0C663.466667 864 1002.666667 595.2 1002.666667 366.933333c0-42.666667-4.266667-72.533333-14.933334-93.866666z m-462.933333 640c-6.4 4.266667-17.066667 4.266667-23.466667 0C352 804.266667 64 556.8 64 366.933333v-2.133333c0-34.133333 4.266667-59.733333 10.666667-74.666667v-4.266666C110.933333 179.2 209.066667 106.666667 320 106.666667c61.866667 0 123.733333 25.6 170.666667 66.133333l8.533333 6.4c8.533333 6.4 19.2 6.4 27.733333 0l12.8-10.666667C584.533333 128 644.266667 106.666667 704 106.666667c110.933333 0 209.066667 72.533333 243.2 179.2v4.266666c6.4 17.066667 10.666667 42.666667 10.666667 76.8 2.133333 189.866667-285.866667 437.333333-433.066667 546.133334z m-192-366.933334C198.4 465.066667 213.333333 334.933333 213.333333 330.666667c2.133333-12.8-6.4-23.466667-17.066666-23.466667-10.666667-2.133333-23.466667 6.4-23.466667 19.2 0 6.4-21.333333 162.133333 138.666667 258.133333 4.266667 2.133333 6.4 2.133333 10.666666 2.133334 6.4 0 14.933333-4.266667 19.2-10.666667 4.266667-10.666667 0-23.466667-8.533333-29.866667z"></path>
            </svg><b>209</b></span>
          </div>
         </article></li>
        <li>
         <article class="list_layout"> 
          <a href="https://mnews.pro/96.html" class="imgeffect" title="传统B2B如何转型跨境电商？"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=images/mnews_2.jpg&amp;h=280&amp;w=460" alt="传统B2B如何转型跨境电商？" /> </a>
          <h3> <a href="https://mnews.pro/96.html" title="传统B2B如何转型跨境电商？">传统B2B如何转型跨境电商？</a></h3>
          <div class="info"> 
           <span class="category"><a href="https://mnews.pro/qyfw" rel="category tag">企业服务</a></span> 
           <span class="date">3年前</span> 
           <span class="like">
            <svg t="1521349270835" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5429" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M987.733333 273.066667C947.2 151.466667 836.266667 64 704 64c-66.133333 0-128 23.466667-179.2 59.733333-8.533333 6.4-19.2 6.4-25.6 0C448 87.466667 386.133333 64 320 64 187.733333 64 74.666667 151.466667 36.266667 273.066667c-10.666667 21.333333-14.933333 53.333333-14.933334 93.866666 0 228.266667 339.2 497.066667 452.266667 580.266667 21.333333 17.066667 53.333333 17.066667 74.666667 0C663.466667 864 1002.666667 595.2 1002.666667 366.933333c0-42.666667-4.266667-72.533333-14.933334-93.866666z m-462.933333 640c-6.4 4.266667-17.066667 4.266667-23.466667 0C352 804.266667 64 556.8 64 366.933333v-2.133333c0-34.133333 4.266667-59.733333 10.666667-74.666667v-4.266666C110.933333 179.2 209.066667 106.666667 320 106.666667c61.866667 0 123.733333 25.6 170.666667 66.133333l8.533333 6.4c8.533333 6.4 19.2 6.4 27.733333 0l12.8-10.666667C584.533333 128 644.266667 106.666667 704 106.666667c110.933333 0 209.066667 72.533333 243.2 179.2v4.266666c6.4 17.066667 10.666667 42.666667 10.666667 76.8 2.133333 189.866667-285.866667 437.333333-433.066667 546.133334z m-192-366.933334C198.4 465.066667 213.333333 334.933333 213.333333 330.666667c2.133333-12.8-6.4-23.466667-17.066666-23.466667-10.666667-2.133333-23.466667 6.4-23.466667 19.2 0 6.4-21.333333 162.133333 138.666667 258.133333 4.266667 2.133333 6.4 2.133333 10.666666 2.133334 6.4 0 14.933333-4.266667 19.2-10.666667 4.266667-10.666667 0-23.466667-8.533333-29.866667z"></path>
            </svg><b>58</b></span>
          </div>
         </article></li>
        <section class="ad">
         <article class="list_layout">
          <a class="imgeffect" title="MNews 主题" href="https://mnews.pro" target="_blank" rel="noopener"><img class="thumb" src="images/mnews_2.jpg" alt="MNews 主题" /></a>
          <h3><a title="MNews 主题" href="https://mnews.pro" target="_blank" rel="noopener">MNews 主题</a></h3>
          <div class="info">
           <span class="category">广告</span>
           <span class="date">发布于：2年前</span>
           <span class="like">喜欢：120</span>
          </div>
         </article>
        </section>
        <li>
         <article class="list_layout"> 
          <a href="https://mnews.pro/143.html" class="imgeffect" title="群雄逐鹿的云计算时代，谁能独领风骚"> <img class="thumb" src="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/images/thumb-loading.jpg&amp;h=280&amp;w=460" data-original="https://mnews.pro/wp-content/themes/mnews/includes/timthumb.php?src=https://demo.salongweb.com/mnews/mnews_22.jpg&amp;h=280&amp;w=460" alt="群雄逐鹿的云计算时代，谁能独领风骚" /> </a>
          <h3> <a href="https://mnews.pro/143.html" title="群雄逐鹿的云计算时代，谁能独领风骚">群雄逐鹿的云计算时代，谁能独领风骚</a></h3>
          <div class="info"> 
           <span class="category"><a href="https://mnews.pro/yjs" rel="category tag">云计算</a>, <a href="https://mnews.pro/%e5%a4%a7%e6%95%b0%e6%8d%ae" rel="category tag">大数据</a></span> 
           <span class="date">3年前</span> 
           <span class="like">
            <svg t="1521349270835" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5429" xmlns:xlink="http://www.w3.org/1999/xlink">
             <path d="M987.733333 273.066667C947.2 151.466667 836.266667 64 704 64c-66.133333 0-128 23.466667-179.2 59.733333-8.533333 6.4-19.2 6.4-25.6 0C448 87.466667 386.133333 64 320 64 187.733333 64 74.666667 151.466667 36.266667 273.066667c-10.666667 21.333333-14.933333 53.333333-14.933334 93.866666 0 228.266667 339.2 497.066667 452.266667 580.266667 21.333333 17.066667 53.333333 17.066667 74.666667 0C663.466667 864 1002.666667 595.2 1002.666667 366.933333c0-42.666667-4.266667-72.533333-14.933334-93.866666z m-462.933333 640c-6.4 4.266667-17.066667 4.266667-23.466667 0C352 804.266667 64 556.8 64 366.933333v-2.133333c0-34.133333 4.266667-59.733333 10.666667-74.666667v-4.266666C110.933333 179.2 209.066667 106.666667 320 106.666667c61.866667 0 123.733333 25.6 170.666667 66.133333l8.533333 6.4c8.533333 6.4 19.2 6.4 27.733333 0l12.8-10.666667C584.533333 128 644.266667 106.666667 704 106.666667c110.933333 0 209.066667 72.533333 243.2 179.2v4.266666c6.4 17.066667 10.666667 42.666667 10.666667 76.8 2.133333 189.866667-285.866667 437.333333-433.066667 546.133334z m-192-366.933334C198.4 465.066667 213.333333 334.933333 213.333333 330.666667c2.133333-12.8-6.4-23.466667-17.066666-23.466667-10.666667-2.133333-23.466667 6.4-23.466667 19.2 0 6.4-21.333333 162.133333 138.666667 258.133333 4.266667 2.133333 6.4 2.133333 10.666666 2.133334 6.4 0 14.933333-4.266667 19.2-10.666667 4.266667-10.666667 0-23.466667-8.533333-29.866667z"></path>
            </svg><b>48</b></span>
          </div>
         </article></li>
       </ul>
      </section>
      <article id="move" class="move">
       <section id="slongword-4" class="sidebar_widget widget_salong_word">
        <div class="sidebar_title">
         <h3>每日一句</h3>
        </div>
        <div class="oneword">
         <p>萨龙网络始建于2012年8月，是一家新生的优秀互联网综合服务提供商！</p> 
         <span>萨龙龙</span> 
         <img src="images/salongweb.png" alt="每日一句" />
        </div>
       </section>
      </article>
     </aside>
    </section>
   </div>
  </main>
  @include('home.footer')
 </body>
</html>