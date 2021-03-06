 @extends('Admin.layout.index')
          @section('content')
                <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	            <link rel="stylesheet" href="/Admin_public/css/font.css">
	            <link rel="stylesheet" href="/Admin_public/css/xadmin.css">
	            <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
	            <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	            <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
	            <script src="/Admin_public/lib/layui/layui.js" charset="utf-8"></script>
	            <script type="text/javascript" src="/Admin_public/js/xadmin.js"></script>
	          
	          <div class="content">
	            <!-- 右侧内容框架，更改从这里开始 -->
	            <form class="layui-form xbs" action="">
	                <div class="layui-form-pane" style="text-align: center;">
	                  <div class="layui-form-item" style="display: inline-block;">
	                    <label class="layui-form-label xbs768">日期范围</label>
	                    <div class="layui-input-inline xbs768">
	                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
	                    </div>
	                    <div class="layui-input-inline xbs768">
	                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
	                    </div>
	                    <div class="layui-input-inline">
	                      <input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
	                    </div>
	                    <div class="layui-input-inline" style="width:80px">
	                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
	                    </div>
	                  </div>
	                </div> 
	            </form>

	            <table class="layui-table">
	                <thead>
	                    <tr>
	                        <th>
	                            <input type="checkbox" name="" value="">
	                        </th>
	                        <th>
	                            编号
	                        </th>
	                        <th>
	                            优惠券名
	                        </th>
	                        <th>
	                            商品图片
	                        </th>
	                        <th>
	                            优惠券状态
	                        </th>
	                        <th>
	                            优惠价格
	                        </th>
	                        
	                        <th>
	                            操作
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>
	                    
	                    <tr>
	                        <td>
	                            <input type="checkbox" value="1" name="">
	                        </td>
	                        <td>
	                            1
	                        </td>
	                        <td>
	                            <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
	                                小明
	                            </u>
	                        </td>
	                        <td>
	                            男
	                        </td>
	                        <td>
	                            2017-01-01 11:11:42
	                        </td>
	                        <td class="td-status">
	                            <span class="layui-btn layui-btn-normal layui-btn-mini">
	                                已启用
	                            </span>
	                        </td>
	                        <td class="td-manage">
	                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
	                                <i class="layui-icon"></i>
	                            </a>
	                            <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')" class="ml-5" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>
	                            <a style="text-decoration:none" onclick="member_password('修改密码','member-password.html','10001','600','400')" href="javascript:;" title="修改密码">
	                                <i class="layui-icon"></i>
	                            </a>
	                            <a title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
	                                <i class="layui-icon"></i>
	                            </a>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button><button class="layui-btn" onclick="add('添加优惠券','/ticket/create','500','1200')"><i class="layui-icon"></i>添加</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
	            <!-- 右侧内容框架，更改从这里结束 -->
	          </div> 
				<script>
		            // 增加
		            function add (title,url,id,w,h) {
		                x_admin_show(title,url,w,h); 
		            }
				</script>
          @endsection