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
 </head>
 <body class="archive author logged-in">
  @include('home.header');
  <main class="container">
    @include('personal.author_nav');
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
          <h2><a href="/news/{{$vo->id}}.html" title="{{$vo->title}}">{{$vo->title}}</a></h2> 
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
             <b>
                @if($vo->status == 0)
                <a href=""  style="color: red">修改文章</a>
                @endif
             </b>
            </span>
           </div>
           <div class="right">
            <span class="view">
             <svg t="1509598715318" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3089" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path d="M509.952 199.68c-267.776 0-501.76 219.136-501.76 326.656s232.96 326.656 501.248 326.656 501.248-219.136 501.248-326.656S778.24 199.68 509.952 199.68z m0 608.768c-263.68 0-457.216-217.088-457.216-282.112s193.536-282.112 457.216-282.112 457.216 217.088 457.216 282.112-196.096 282.112-457.216 282.112z" p-id="3090"></path>
              <path d="M509.44 309.248c-119.808 0-216.576 97.28-216.064 217.088 0 119.808 97.28 216.576 217.088 216.064 119.808 0 216.576-97.28 216.064-217.088 0-119.296-96.768-216.064-216.064-216.064h-1.024z m0 365.568c-80.384 0-145.408-65.536-145.408-145.92s65.536-145.408 145.92-145.408 145.408 65.536 145.408 145.92-65.024 145.408-145.408 145.408h-0.512z" p-id="3091"></path>
             </svg><b>9.98K</b></span> 
            <span class="comment">
             <svg t="1510555347486" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1861" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path d="M256.000712 398.249356C220.653727 398.249356 191.999822 427.354272 191.999822 463.271214 191.999822 499.193736 220.653727 528.300047 256.000712 528.300047 291.343424 528.300047 319.99733 499.193736 319.99733 463.271214 319.99733 427.354272 291.343424 398.249356 256.000712 398.249356L256.000712 398.249356 256.000712 398.249356ZM512.002849 398.249356C476.655863 398.249356 448.000534 427.354272 448.000534 463.271214 448.000534 499.193736 476.660136 528.300047 512.002849 528.300047 547.344137 528.300047 575.999466 499.193736 575.999466 463.271214 575.999466 427.354272 547.344137 398.249356 512.002849 398.249356L512.002849 398.249356 512.002849 398.249356ZM768.003562 398.249356C732.656574 398.249356 704.00267 427.354272 704.00267 463.271214 704.00267 499.193736 732.656574 528.300047 768.003562 528.300047 803.346271 528.300047 832.000176 499.193736 832.000176 463.271214 832.000176 427.354272 803.346271 398.249356 768.003562 398.249356L768.003562 398.249356 768.003562 398.249356ZM127.997507 73.142857C57.313507 73.142857 0 131.37501 0 203.193548L0 690.849809C0 762.673927 58.594009 828.873209 130.907481 828.873209L325.968258 828.873209C359.969221 864.347919 486.312565 990.610739 486.312565 990.610739 500.499343 1004.805435 522.99445 1004.477791 536.759928 989.742775 536.759928 989.742775 626.340718 892.625569 693.469508 828.873209L893.09252 828.873209C965.405989 828.873209 1024 762.668347 1024 690.849809L1024 203.193548C1024 131.37501 966.692191 73.142857 896.002494 73.142857L127.997507 73.142857 127.997507 73.142857ZM893.09252 764.433086 696.781152 764.433086C672.999992 764.433086 651.623156 788.383291 651.623156 788.383291L537.611356 905.884518C523.468162 920.460581 500.404798 920.008528 487.052412 905.884518L375.970511 788.383291C375.970511 788.383291 349.719506 764.433086 327.218848 764.433086L130.907481 764.433086C94.748608 764.433086 64.002315 726.755591 64.002315 690.849809L64.002315 203.193548C64.002315 167.276606 92.656219 138.164715 127.997507 138.164715L896.002494 138.164715C931.343777 138.164715 960.003387 167.276606 960.003387 203.193548L960.003387 690.849809C960.003387 726.755591 929.251394 764.433086 893.09252 764.433086L893.09252 764.433086Z" p-id="1862"></path>
             </svg><b><a href="https://mnews.pro/143.html#comments" class="评论关闭">4</a></b></span> 
            
           </div>
          </div>
         </article>
        </li>
         @endforeach
       </ul>
      </section>
     </section>
    </section>
   </section>
  </main>
    @include('home.footer')
 </body>
</html>