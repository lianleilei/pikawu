  <header class="header">
   <section id="header_main" class="header_main">
    <section class="wrapper"> 
     <a href="https://mnews.pro" class="logo" title="MNews 主题-萨龙网络原创新闻自媒体类的 WordPress 主题！"><img src="/home/images/logo.png" alt="MNews 主题-萨龙网络原创新闻自媒体类的 WordPress 主题！" /></a>
     <nav class="header_menu">
      <ul class="menu">
       <li class="current-menu-item"><a href="/" aria-current="page">首页</a></li>
       @foreach($data['type'] as $vo)
       <li class="menu-item-has"><a href="/type/{{$vo->id}}" target="_blank">{{$vo->name}}</a></li>
       @endforeach
       <li class="menu-item-has"><a href="https://mnews.pro/about">关于我们</a></li>
       <li><a target="" rel="noopener noreferrer" href=""></a></li>
      </ul>
     </nav>
     @guest
     <div class="header_menu header_btn">
      <ul class="menu">
       <li class="login"><a href="/login">登录</a></li>
       <li class="reg"><a href="/register">注册</a></li>
       <li class="contribute_btn"><a href="/login">投稿</a></li>
      </ul>
     </div>
     @else
     <!-- 登录成功之后 -->
      <div class="header_menu header_btn">
        <ul class="menu">
          <li class="center menu-item-has-children">
            <a href="/personal" title="{{ Auth::user()->name }}"><span class="name">{{ Auth::user()->name }}</span></a>
            <ul class="sub-menu">
              <li class="current"> <a href="https://mnews.pro/author/2644?tab=profile"> <svg t="1514097289763" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2398" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M637.953132 548.278251c71.730695-40.298821 120.348995-116.815519 120.348995-204.542536 0-129.46256-105.705484-234.781234-235.641835-234.781234-129.936351 0-235.628532 105.318674-235.628532 234.781234 0 84.393085 45.041846 158.307516 112.302739 199.683878-152.041812 47.787376-262.605953 189.523471-262.605953 356.600721 0 5.058203 0.560772 9.956769 0.762363 14.97404l52.356438 0c-0.230244-4.986571-0.76134-9.914814-0.76134-14.97404 0-177.279612 144.855132-321.502341 322.909387-321.502341 178.054255 0 322.910411 144.222729 322.910411 321.502341 0 5.058203-0.532119 9.987468-0.775666 14.97404l52.371788 0c0.200568-5.016247 0.760317-9.914814 0.760317-14.97404C887.263268 737.931682 783.009855 600.017636 637.953132 548.278251zM339.389222 343.735715c0-100.588953 82.208327-182.423773 183.27107-182.423773 101.06479 0 183.272094 81.83482 183.272094 182.423773 0 100.589976-82.207303 182.423773-183.272094 182.423773C421.597549 526.159488 339.389222 444.325691 339.389222 343.735715z" p-id="2399"></path></svg><h4>资料</h4> </a>
              </li>
              <li> <a href="https://mnews.pro/author/2644?tab=post"> <svg t="1510972892727" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M909.566 64.12H112.792c-27.389 0-49.798 22.409-49.798 49.798v796.774c0 27.39 22.41 49.799 49.798 49.799h796.775c27.389 0 49.798-22.41 49.798-49.799V113.918c-0.001-27.39-22.41-49.799-49.8-49.799z m0 846.572H112.792V113.918h796.775v796.774zM324.436 338.01h-99.597v-49.798h99.596v49.798z m473.084 0H374.233v-49.798H797.52v49.798zM324.435 537.204H224.84v-49.798h99.596v49.798z m473.085 0H374.233v-49.798H797.52v49.798zM324.435 736.398H224.84V686.6h99.596v49.798z m473.085 0H374.233V686.6H797.52v49.798z"></path></svg><h4>文章</h4> <span class="count">（0）</span> </a>
              </li>
              <li> <a href="https://mnews.pro/author/2644?tab=like"> <svg t="1521349270835" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5429" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M987.733333 273.066667C947.2 151.466667 836.266667 64 704 64c-66.133333 0-128 23.466667-179.2 59.733333-8.533333 6.4-19.2 6.4-25.6 0C448 87.466667 386.133333 64 320 64 187.733333 64 74.666667 151.466667 36.266667 273.066667c-10.666667 21.333333-14.933333 53.333333-14.933334 93.866666 0 228.266667 339.2 497.066667 452.266667 580.266667 21.333333 17.066667 53.333333 17.066667 74.666667 0C663.466667 864 1002.666667 595.2 1002.666667 366.933333c0-42.666667-4.266667-72.533333-14.933334-93.866666z m-462.933333 640c-6.4 4.266667-17.066667 4.266667-23.466667 0C352 804.266667 64 556.8 64 366.933333v-2.133333c0-34.133333 4.266667-59.733333 10.666667-74.666667v-4.266666C110.933333 179.2 209.066667 106.666667 320 106.666667c61.866667 0 123.733333 25.6 170.666667 66.133333l8.533333 6.4c8.533333 6.4 19.2 6.4 27.733333 0l12.8-10.666667C584.533333 128 644.266667 106.666667 704 106.666667c110.933333 0 209.066667 72.533333 243.2 179.2v4.266666c6.4 17.066667 10.666667 42.666667 10.666667 76.8 2.133333 189.866667-285.866667 437.333333-433.066667 546.133334z m-192-366.933334C198.4 465.066667 213.333333 334.933333 213.333333 330.666667c2.133333-12.8-6.4-23.466667-17.066666-23.466667-10.666667-2.133333-23.466667 6.4-23.466667 19.2 0 6.4-21.333333 162.133333 138.666667 258.133333 4.266667 2.133333 6.4 2.133333 10.666666 2.133334 6.4 0 14.933333-4.266667 19.2-10.666667 4.266667-10.666667 0-23.466667-8.533333-29.866667z"></path></svg><h4>收藏</h4> </a>
              </li>
              <li> <a href="https://mnews.pro/author/2644?tab=comment"> <svg t="1510555347486" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1861" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256.000712 398.249356C220.653727 398.249356 191.999822 427.354272 191.999822 463.271214 191.999822 499.193736 220.653727 528.300047 256.000712 528.300047 291.343424 528.300047 319.99733 499.193736 319.99733 463.271214 319.99733 427.354272 291.343424 398.249356 256.000712 398.249356L256.000712 398.249356 256.000712 398.249356ZM512.002849 398.249356C476.655863 398.249356 448.000534 427.354272 448.000534 463.271214 448.000534 499.193736 476.660136 528.300047 512.002849 528.300047 547.344137 528.300047 575.999466 499.193736 575.999466 463.271214 575.999466 427.354272 547.344137 398.249356 512.002849 398.249356L512.002849 398.249356 512.002849 398.249356ZM768.003562 398.249356C732.656574 398.249356 704.00267 427.354272 704.00267 463.271214 704.00267 499.193736 732.656574 528.300047 768.003562 528.300047 803.346271 528.300047 832.000176 499.193736 832.000176 463.271214 832.000176 427.354272 803.346271 398.249356 768.003562 398.249356L768.003562 398.249356 768.003562 398.249356ZM127.997507 73.142857C57.313507 73.142857 0 131.37501 0 203.193548L0 690.849809C0 762.673927 58.594009 828.873209 130.907481 828.873209L325.968258 828.873209C359.969221 864.347919 486.312565 990.610739 486.312565 990.610739 500.499343 1004.805435 522.99445 1004.477791 536.759928 989.742775 536.759928 989.742775 626.340718 892.625569 693.469508 828.873209L893.09252 828.873209C965.405989 828.873209 1024 762.668347 1024 690.849809L1024 203.193548C1024 131.37501 966.692191 73.142857 896.002494 73.142857L127.997507 73.142857 127.997507 73.142857ZM893.09252 764.433086 696.781152 764.433086C672.999992 764.433086 651.623156 788.383291 651.623156 788.383291L537.611356 905.884518C523.468162 920.460581 500.404798 920.008528 487.052412 905.884518L375.970511 788.383291C375.970511 788.383291 349.719506 764.433086 327.218848 764.433086L130.907481 764.433086C94.748608 764.433086 64.002315 726.755591 64.002315 690.849809L64.002315 203.193548C64.002315 167.276606 92.656219 138.164715 127.997507 138.164715L896.002494 138.164715C931.343777 138.164715 960.003387 167.276606 960.003387 203.193548L960.003387 690.849809C960.003387 726.755591 929.251394 764.433086 893.09252 764.433086L893.09252 764.433086Z" p-id="1862"></path></svg><h4>评论</h4> </a>
              </li>
              <li> <a href="https://mnews.pro/author/2644?tab=edit-profile"> <svg t="1514098731552" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7869" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M92.066859 908.986523 92.066859 116.203582 473.109248 116.203582l0 65.974597L158.042479 182.178179l0 660.832723 711.998033 0L870.040513 527.944134l65.974597 0 0 381.042389L92.066859 908.986523 92.066859 908.986523 92.066859 908.986523zM300.225759 741.759871l114.312512-228.625024 93.846388 93.846388L300.225759 741.759871 300.225759 741.759871 300.225759 741.759871zM556.722574 558.64332l-93.846388-93.846388 332.704474-332.704474 93.846388 93.846388L556.722574 558.64332 556.722574 558.64332 556.722574 558.64332z"></path></svg><h4>编辑</h4> </a></li>
              <li> 

                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
                <svg t="1514290836906" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M531.42 1023.265c-66.163 0-130.418-12.453-190.857-37.14-58.418-23.73-110.806-57.747-155.83-101.095-45.025-43.348-80.358-93.86-105.083-150.064-25.565-58.19-38.538-120.015-38.538-183.75 0-76.264 19.421-151.975 56.128-219.054 35.485-64.802 87.034-121.705 149.115-164.538 17.246-11.903 41.208-8.045 53.533 8.522 12.324 16.568 8.394 39.601-8.852 51.43-52.465 36.295-96.002 84.271-125.916 138.97-31.403 57.344-47.314 119.464-47.314 184.67 0 106.385 43.04 206.415 121.184 281.613C317.096 908.063 420.958 949.5 531.42 949.5c110.425 0 214.325-41.438 292.469-116.672C902.033 757.63 945.035 657.6 945.035 551.215c0-65.132-15.873-127.362-47.314-184.669-29.914-54.662-73.489-102.675-125.954-138.897-17.208-11.828-21.215-34.862-8.852-51.43 12.363-16.567 36.287-20.46 53.495-8.522 62.119 42.834 113.744 99.737 149.192 164.538 36.744 67.079 56.166 142.79 56.166 219.054 0 63.736-12.973 125.561-38.576 183.787-24.688 56.205-60.058 106.716-105.083 150.064-45.024 43.348-97.413 77.328-155.83 101.17-60.478 24.539-124.695 36.955-190.858 36.955z m11.524-512.238c-21.177 0-38.347-16.458-38.347-36.883V36.92C504.597 16.568 521.767 0 542.944 0s38.385 16.568 38.385 36.92v437.224c0 20.425-17.208 36.883-38.385 36.883z"></path></svg><h4>退出</h4> </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          <li class="contribute_btn"><a href="/personal/contribute">投稿</a></li>
        </ul>
      </div>
     <!-- end -->
     @endguest
     <button class="btn menu">
      <svg t="1514275978476" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
       <path d="M934.48936 203.517183 89.511663 203.517183c-14.813381 0-26.824949-11.998265-26.824949-26.824949s12.010545-26.824949 26.824949-26.824949l844.977697 0c14.813381 0 26.824949 11.998265 26.824949 26.824949S949.302741 203.517183 934.48936 203.517183z" p-id="1857"></path>
       <path d="M934.48936 538.824949 89.511663 538.824949c-14.813381 0-26.824949-11.997242-26.824949-26.824949 0-14.826684 12.010545-26.824949 26.824949-26.824949l844.977697 0c14.813381 0 26.824949 11.998265 26.824949 26.824949C961.313286 526.826684 949.302741 538.824949 934.48936 538.824949z" p-id="1858"></path>
       <path d="M934.48936 874.132714 89.511663 874.132714c-14.813381 0-26.824949-11.997242-26.824949-26.824949s12.010545-26.824949 26.824949-26.824949l844.977697 0c14.813381 0 26.824949 11.997242 26.824949 26.824949S949.302741 874.132714 934.48936 874.132714z"></path>
      </svg>
      <svg t="1514277222979" class="close" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
       <path d="M891.264 901.248a30.784 30.784 0 0 1-21.76-9.024L128.256 150.976a30.72 30.72 0 1 1 43.52-43.52l741.312 741.312a30.848 30.848 0 0 1-21.824 52.48"></path>
       <path d="M150.016 901.248a30.72 30.72 0 0 1-21.76-52.544L869.568 107.456a30.784 30.784 0 0 1 43.456 43.52L171.776 892.224a30.72 30.72 0 0 1-21.76 9.024"></path>
      </svg></button>
     <div class="circle menu"></div> 
    </section>
   </section>
  </header>