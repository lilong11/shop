<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title or '用户操作'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
<!-- 引入分页开始 -->
    <link rel="stylesheet" type="text/css" href="/admin_public/css/page_page1.css">
<!-- 引入分页结束 -->

    <!-- 顶部开始 -->
    <div class="container" style="  width: 100%;height: 71px;background-color: rgba(0, 0, 0, 0.25);border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
        <div class="logo"><a href="/Admin_public/index.html">{{$title or '用户操作'}}</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">{{session('admin')}}</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="exit">切换用户</a></dd>
              <dd><a href="exit">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">

          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="/admin">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                
                <!-- 左边管理栏目开始 -->

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        用户管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/user">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表
                            </a>
                        </li>
                        <li>
                            <a href="/user/create">
                                <i class="iconfont">&#xe6a7;</i>
                                用户添加
                            </a>
                        </li> 
                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        背景图片管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/background">
                                <i class="iconfont">&#xe6a7;</i>
                                背景图片列表
                            </a>
                        </li>
                        <li>
                            <a href="/background/create">
                                <i class="iconfont">&#xe6a7;</i>
                                背景图片添加
                            </a>
                        </li> 
                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        问题管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/issue">
                                <i class="iconfont">&#xe6a7;</i>
                                问题列表
                            </a>
                        </li>
                        <li>
                            <a href="/issue/create">
                                <i class="iconfont">&#xe6a7;</i>
                                问题添加
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        文章管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/works">
                                <i class="iconfont">&#xe6a7;</i>
                                文章列表
                            </a>
                        </li>
                        <li>
                            <a href="/works/create">
                                <i class="iconfont">&#xe6a7;</i>
                                文章添加
                            </a>
                        </li>

                    </ul>
                </li>
                
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        订单管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/orders">
                                <i class="iconfont">&#xe6a7;</i>
                                订单列表
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        订单广告管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/orders/adver">
                                <i class="iconfont">&#xe6a7;</i>
                                广告列表
                            </a>
                        </li>
                        <li>
                            <a href="/orders/adver/create">
                                <i class="iconfont">&#xe6a7;</i>
                                广告添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        友情链接管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/links">
                                <i class="iconfont">&#xe6a7;</i>
                                友情链接列表
                            </a>
                        </li>
                        <li>
                            <a href="/links/create">
                                <i class="iconfont">&#xe6a7;</i>
                                友情链接添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        优惠券管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href=" ">
                                <i class="iconfont">&#xe6a7;</i>
                                优惠券列表
                            </a>
                        </li>
                        <li>
                            <a href=" ">
                                <i class="iconfont">&#xe6a7;</i>
                                优惠券添加
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        广告管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/adv">
                                <i class="iconfont">&#xe6a7;</i>
                                广告列表
                            </a>
                        </li>
                        <li>
                            <a href="/adv/create">
                                <i class="iconfont">&#xe6a7;</i>
                                广告添加
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i> 
                        留言管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/admin/mess">
                                <i class="iconfont">&#xe6a7;</i>
                                留言列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/mess/create">
                                <i class="iconfont">&#xe6a7;</i>
                                留言添加
                            </a>
                        </li>
                    </ul>
                </li> 

               <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i> 
                        公告管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/admin/notice">
                                <i class="iconfont">&#xe6a7;</i>
                                公告列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/notice/create">
                                <i class="iconfont">&#xe6a7;</i>
                                公告添加
                            </a>
                        </li>
                    </ul>
                </li>

               <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i> 
                        意见管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/admin/opinion">
                                <i class="iconfont">&#xe6a7;</i>
                                意见列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/opinion/create">
                                <i class="iconfont">&#xe6a7;</i>
                                意见添加
                            </a>
                        </li>
                    </ul>
                </li>  

                 <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i> 
                        投资人管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/admin/investor">
                                <i class="iconfont">&#xe6a7;</i>
                                投资人列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/investor/create">
                                <i class="iconfont">&#xe6a7;</i>
                                投资人添加
                            </a>
                        </li>
                    </ul>
                </li>  

                 <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i> 
                        商品举报管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/admin/report">
                                <i class="iconfont">&#xe6a7;</i>
                                商品举报列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/report/create">
                                <i class="iconfont">&#xe6a7;</i>
                                商品举报添加
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/type">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>  
                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/goods">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a> 
                        </li>  
                        </li>
                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        商品详情
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="/detailsgoods">
                                <i class="iconfont">&#xe6a7;</i>
                                商品详情
                            </a>
                        </li>
                        
                        <li class="current">
                            <a href="/goodssize">
                                <i class="iconfont">&#xe6a7;</i>
                                服饰尺寸详情
                            </a>
                        </li> 
                    </ul>
                </li>

                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        轮播图管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/rotationimg">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播图列表
                            </a>
                        </li> 

                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        最新商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/newgoods">
                                <i class="iconfont">&#xe6a7;</i>
                                最新商品列表
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu">
                        <li  class="current">
                            <a href="/newdetailsgoods">
                                <i class="iconfont">&#xe6a7;</i>
                                最新商品详情列表
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- 左边管理栏目结束 -->
            </ul>
          </div>

        </div>
        <!-- 左侧菜单结束 -->

        <!-- 右侧主体开始 -->
        <div class="page-content">


          <div class="content">
            <!-- 显示问题开始 -->
            @section('issue')

            @show
            <!-- 显示问题结束 -->
            <!-- 读取 跳转信息 开始 -->
            <!-- 右侧内容框架，更改从这里开始 -->
            @section('content')

            @show
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>  
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
    <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/admin_public/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admin_public/images/k.jpg" alt=""></div>
                @if(!empty($background))
                 @foreach($background as $v)
                <div class="swiper-slide"><img class="item" src="/uploads/{{ $v->img }}" alt=""></div>
                @endforeach
                @endif
               
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
</body>
<script>
    // 增加
    function level_add (title,url,id,w,h) {
        x_admin_show(title,url,w,h); 
    }
</script>
</html>