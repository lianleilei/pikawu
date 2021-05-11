<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					@php
						$url_path = Request::getPathInfo();
					@endphp
					<li class="start {{Request::getPathInfo() == '/manage'?'active':''}}">
						<a href="/manage">
						<i class="icon-home"></i>
						<span class="title">主页</span>
						<span class="selected"></span>
						</a>
					</li>
					<li class="{{Request::getPathInfo() == '/manage/service'?'active':''}}">
						<a href="/manage/service">
						<i class="icon-settings"></i>
						<span class="title">系统设置</span>
						<span class="selected "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/manage/links">
								管理员</a>
							</li>	
							<li>
								<a href="/manage/links">
								友链管理</a>
							</li>	
							<li>
								<a href="/manage/ads">
								广告位管理</a>
							</li>						
						</ul>
					</li>
					<li class="{{strpos($url_path,'type')?'active':''}}">
						<a href="/manage/type">
						<i class="icon-handbag"></i>
						<span class="title">栏目管理</span>
						<span class="selected "></span>
						</a>
					</li>
					<li class="{{strpos($url_path,'article')?'active':''}}">
						<a href="/manage/article">
						<i class="icon-docs"></i>
						<span class="title">内容管理</span>
						<span class="selected "></span>
						</a>
					</li>
					
					<li class="{{strpos($url_path,'users')?'active':''}}">
						<a href="/manage/users">
						<i class="icon-user"></i>
						<span class="title">用户管理</span>
						<span class="selected "></span>
						</a>
					</li>

					<li class="{{Request::getPathInfo() == '/manage/company'?'active':''}}">
						<a href="/manage/company">
						<i class="icon-user"></i>
						<span class="title">商家管理</span>
						<span class="selected "></span>
						</a>
					</li>
					<li class="{{Request::getPathInfo() == '/manage/tongji'?'active':''}}">
						<a href="/manage/tongji">
						<i class="icon-puzzle"></i>
						<span class="title">评论管理</span>
						<span class="selected "></span>
						</a>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->