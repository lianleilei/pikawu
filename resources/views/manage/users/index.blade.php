<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>内容管理</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="/manage/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/manage/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="/manage/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/manage/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="/manage/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/manage/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/manage/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/manage/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/manage/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/manage/assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="/manage/assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
<link href="/manage/assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="/manage/assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		@include('common.page_top')
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include('common.left_menu')
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE HEADER-->
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="/manage">主页</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="/manage/users">用户管理</a>
							<i class="fa fa-angle-right"></i>
						</li>
					</ul>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-6">
						<!-- <div class="btn-group">
							<a href="/manage/users/add" class="btn green">
							添加用户 <i class="fa fa-plus"></i>
							</a>
						</div> -->
					</div>
					<div class="col-md-6">
						<div id="sample_1_filter" class="dataTables_filter">
						<form action="/manage/users" method="get">
							<label><input type="text" class="form-control input-small input-inline" placeholder="输入姓名或邮箱号" aria-controls="sample_1" name="search"><button type="submit" class="btn green">搜索</button></label>
						</form>
						</div>
					</div>
					<div class="col-md-12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>用户管理
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>
													 Id
												</th>
												<th>
													 姓名
												</th>
												<th>
													 邮箱号
												</th>
												<th>
													 注册时间
												</th>
												<th>
													 操作
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data['users'] as $vo)
											<tr class="odd gradeX" id="tr_{{$vo->id}}">
												<td>{{$vo->id}}</td>
												<td>{{$vo->name}}</td>
												<td>{{$vo->email}}</td>
												<td>{{$vo->created_at}}</td>
				                                <td>
					                                <a href="/manage/users/edit/{{$vo->id}}" class="btn default btn-xs purple">
														<i class="fa fa-edit"></i> 修改 </a>
				                                	<a href="javascript:;" class="btn default btn-xs black" onclick="delete_users('{{$vo->id}}')">
														<i class="fa fa-trash-o"></i> 删除 </a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									{{ $data['users']->appends($data['where'])->links() }}
								</div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	@include('common.page_footer')
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/manage/assets/global/plugins/respond.min.js"></script>
<script src="/manage/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/manage/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/manage/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/manage/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/manage/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/manage/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/manage/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/manage/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/manage/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="/manage/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="/manage/assets/admin/pages/scripts/table-editable.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableEditable.init();
});
</script>
<script type="text/javascript">
function delete_users(id){    
    confirm_ = confirm('此操作将删除此数据！你确定吗？');
    if(confirm_){
        $.ajax({
            type:"get",
            url:'/manage/users/del/'+id,
            success:function(msg){
                alert("删除成功！");
                //all delete is success,this can be execute
                $("#tr_"+id).remove();
            }
        });
    }
};
</script>
</body>
<!-- END BODY -->
</html>