﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="{{asset('/admin')}}/favicon.ico" >
<link rel="Shortcut Icon" href="{{asset('/admin')}}/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="{{asset('/admin')}}/lib/html5shiv.js"></script>
<script type="text/javascript" src="{{asset('/admin')}}/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="{{asset('/admin')}}/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>lamp182-weibo</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">lamp182-微博</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">后台管理系统</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li class="dropDown dropDown_hover">
						<a href="#" class="dropDown_A">{{session('user')->username}} <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">

							<li><a  data-href="{{url('admin/repass')}}" data-title="修改密码" href="javascript:void(0)" onclick="Hui_admin_tab(this);">修改密码</a></li>
							<li><a href="{{url('admin/quit')}}">退出</a></li>
					</ul>

				</li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{url('admin/user')}}" data-title="用户列表" href="javascript:void(0)">用户列表</a></li>
					<li><a data-href="{{url('admin/company')}}" data-title="企业用户" href="javascript:void(0)">企业用户</a></li>
					<li><a data-href="{{url('admin/commerce')}}" data-title="商业用户" href="javascript:void(0)">商业用户</a></li>
					<li><a data-href="{{url('admin/bigv')}}" data-title="大V用户" href="javascript:void(0)">大V用户</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{url('admin/role')}}" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="{{url('admin/permission')}}" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="{{url('admin/manager')}}" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
					<li><a data-href="{{url('admin/log')}}" data-title="管理员日志" href="javascript:void(0)">管理员日志</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 微博管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{url('admin/microblog')}}" data-title="微博列表" href="javascript:void(0)">微博列表</a></li>
					<li><a data-href="{{url('admin/navigation')}}" data-title="导航分类" href="javascript:void(0)">导航分类</a></li>
					<li><a data-href="{{url('admin/hot')}}" data-title="热门" href="javascript:void(0)">热门</a></li>
			</ul>
		</dd>
	</dl>

		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe720;</i> 广告管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{url('admin/ad')}}" data-title="广告列表" href="javascript:void(0)">广告列表</a></li>
					<li><a data-href="{{url('admin/adPosition')}}" data-title="广告位管理" href="javascript:void(0)">广告位管理</a></li>
					<li><a data-href="{{url('admin/audit')}}" data-title="广告审核" href="javascript:void(0)">广告审核</a></li>
					<li><a data-href="{{url('admin/order')}}" data-title="收费管理" href="javascript:void(0)">收费管理</a></li>
					<li><a data-href="{{url('admin/lineChart')}}" data-title="收益统计" href="javascript:void(0)">收益统计</a></li>
					<li><a data-href="{{url('admin/link')}}" data-title="友情链接" href="javascript:void(0)">友情链接</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe720;</i> 网站配置<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{url('admin/config/create')}}" data-title="添加配置" href="javascript:void(0)">添加配置</a></li>
					<li><a data-href="{{url('admin/config')}}" data-title="配置列表" href="javascript:void(0)">配置列表</a></li>

				</ul>
			</dd>
		</dl>

</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="{{url('admin/welcome')}}">我的桌面</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="{{url('admin/welcome')}}"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="{{asset('/admin')}}/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/admin')}}/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="{{asset('/admin')}}/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="{{asset('/admin')}}/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('/admin')}}/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	/*$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}		
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});*/
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div>管理员信息</div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


</script>
</body>
</html>