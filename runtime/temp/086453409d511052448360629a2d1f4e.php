<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"E:\75phpStudy\XiangMu\hometpshop75\public/../application/home\view\Index\index.html";i:1570630810;s:68:"E:\75phpStudy\XiangMu\hometpshop75\application\home\view\layout.html";i:1570630639;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>品优购，优质！优质！</title>

    <link rel="stylesheet" type="text/css" href="/static/home/css/all.css" />


    <script type="text/javascript" src="/static/home/js/all.js"></script>

</head>

<body>
    <!-- 头部栏位 -->
    <!--页面顶部-->
    <div id="nav-bottom">
        <!--顶部-->
        <div class="nav-top">
            <div class="top">
                <div class="py-container">
                    <div class="shortcut">
                        <ul class="fl">
                            <li class="f-item">品优购欢迎您！</li>
                            <li class="f-item">请<a href="login.html" target="_blank">登录</a>　<span><a
                                        href="register.html" target="_blank">免费注册</a></span></li>
                        </ul>
                        <ul class="fr">
                            <li class="f-item">我的订单</li>
                            <li class="f-item space"></li>
                            <li class="f-item"><a href="home.html" target="_blank">我的品优购</a></li>
                            <li class="f-item space"></li>
                            <li class="f-item">品优购会员</li>
                            <li class="f-item space"></li>
                            <li class="f-item">企业采购</li>
                            <li class="f-item space"></li>
                            <li class="f-item">关注品优购</li>
                            <li class="f-item space"></li>
                            <li class="f-item" id="service">
                                <span>客户服务</span>
                                <ul class="service">
                                    <li><a href="cooperation.html" target="_blank">合作招商</a></li>
                                    <li><a href="shoplogin.html" target="_blank">商家后台</a></li>
                                </ul>
                            </li>
                            <li class="f-item space"></li>
                            <li class="f-item">网站导航</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--头部-->
            <div class="header">
                <div class="py-container">
                    <div class="yui3-g Logo">
                        <div class="yui3-u Left logoArea">
                            <a class="logo-bd" title="品优购" href="JD-index.html" target="_blank"></a>
                        </div>
                        <div class="yui3-u Center searchArea">
                            <div class="search">
                                <form action="<?php echo url('home/GoodsController/index'); ?>" method="get" class="sui-form form-inline">
                                    <!--searchAutoComplete-->
                                    <div class="input-append">
                                        <input type="text" id="autocomplete" class="input-error input-xxlarge" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" />
                                        <button class="sui-btn btn-xlarge btn-danger" type="submit">搜索</button>
                                    </div>
                                </form>
                            </div>
                            <div class="hotwords">
                                <ul>
                                    <li class="f-item">品优购首发</li>
                                    <li class="f-item">亿元优惠</li>
                                    <li class="f-item">9.9元团购</li>
                                    <li class="f-item">每满99减30</li>
                                    <li class="f-item">亿元优惠</li>
                                    <li class="f-item">9.9元团购</li>
                                    <li class="f-item">办公用品</li>

                                </ul>
                            </div>
                        </div>
                        <div class="yui3-u Right shopArea">
                            <div class="fr shopcar">
                                <div class="show-shopcar" id="shopcar">
                                    <span class="car"></span>
                                    <a class="sui-btn btn-default btn-xlarge" href="cart.html" target="_blank">
                                        <span>我的购物车</span>
                                        <i class="shopnum">0</i>
                                    </a>
                                    <div class="clearfix shopcarlist" id="shopcarlist" style="display:none">
                                        <p>"啊哦，你的购物车还没有商品哦！"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="yui3-g NavList">
                        <div class="all-sorts-list">
                            <div class="yui3-u Left all-sort">
                                <h4>全部商品分类</h4>
                            </div>
                            <div class="sort">
                                <div class="all-sort-list2">
                                    <?php foreach($category as $cateone): ?>
                                    <div class="item bo">
                                        <h3><a href="javascript:"><?php echo $cateone['cate_name']; ?></a></h3>

                                        <div class="item-list clearfix">
                                            <div class="subitem">
                                                <?php foreach($cateone['son'] as $k=>$catetwo): ?>
                                                <dl class="fore<?php echo $k+1; ?>">
                                                    <dt><a href="javascript:"><?php echo $catetwo['cate_name']; ?></a></dt>

                                                    <dd>
                                                        <?php foreach($catetwo['son'] as $catethree): ?>
                                                        <em><a
                                                                href="<?php echo url('home/GoodsController/index',['id'=>$catethree['id']]); ?>"><?php echo $catethree['cate_name']; ?>282</a></em>
                                                        <?php endforeach; ?>
                                                    </dd>

                                                </dl>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <div class="yui3-u Center navArea">
                            <ul class="nav">
                                <li class="f-item">服装城</li>
                                <li class="f-item">美妆馆</li>
                                <li class="f-item">品优超市</li>
                                <li class="f-item">全球购</li>
                                <li class="f-item">闪购</li>
                                <li class="f-item">团购</li>
                                <li class="f-item">有趣</li>
                                <li class="f-item"><a href="<?php echo url('home/SeckillOrderController/index'); ?>" target="_blank">秒杀</a></li>
                            </ul>
                        </div>
                        <div class="yui3-u Right"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
	<title>品优购，优质！优质！</title>


	<link rel="stylesheet" type="text/css" href="/static/home/css/pages-JD-index.css" />


	<script type="text/javascript" src="/static/home/js/pages/index.js"></script>



	<!--列表-->
	<div class="py-container">
		<div class="yui3-g SortList">
			<div class="yui3-u Center banerArea">
				<!--banner轮播-->
				<div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="active item">
							<a href="http://baidu2.wypxj.com/">
								<img src="/static/home/img/banner1.jpg" />
							</a>
						</div>
						<div class="item">
							<a href="http://baidu2.wypxj.com/">
								<img src="/static/home/img/banner2.jpg" />
							</a>
						</div>
						<div class="item">
							<a href="http://baidu2.wypxj.com/">
								<img src="/static/home/img/banner3.jpg" />
							</a>

						</div>
					</div><a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a><a href="#myCarousel"
						data-slide="next" class="carousel-control right">›</a>
				</div>
			</div>
			<div class="yui3-u Right">
				<div class="news">
					<h4><em class="fl">品优购快报</em><span class="fr tip">更多 ></span></h4>
					<div class="clearix"></div>
					<ul class="news-list unstyled">
						<li>
							<span class="bold">[特惠]</span>备战开学季 全民半价购数码
						</li>
						<li>
							<span class="bold">[公告]</span>备战开学季 全民半价购数码
						</li>
						<li>
							<span class="bold">[特惠]</span>备战开学季 全民半价购数码
						</li>
						<li>
							<span class="bold">[公告]</span>备战开学季 全民半价购数码
						</li>
						<li>
							<span class="bold">[特惠]</span>备战开学季 全民半价购数码
						</li>
					</ul>
				</div>
				<ul class="yui3-g Lifeservice">
					<li class="yui3-u-1-4 life-item tab-item">
						<i class="list-item list-item-1"></i>
						<span class="service-intro">话费</span>
					</li>
					<li class="yui3-u-1-4 life-item tab-item">
						<i class="list-item list-item-2"></i>
						<span class="service-intro">机票</span>
					</li>
					<li class="yui3-u-1-4 life-item tab-item">
						<i class="list-item list-item-3"></i>
						<span class="service-intro">电影票</span>
					</li>
					<li class="yui3-u-1-4 life-item tab-item">
						<i class="list-item list-item-4"></i>
						<span class="service-intro">游戏</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-5"></i>
						<span class="service-intro">彩票</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-6"></i>
						<span class="service-intro">加油站</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-7"></i>
						<span class="service-intro">酒店</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-8"></i>
						<span class="service-intro">火车票</span>
					</li>
					<li class="yui3-u-1-4 life-item  notab-item">
						<i class="list-item list-item-9"></i>
						<span class="service-intro">众筹</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-10"></i>
						<span class="service-intro">理财</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-11"></i>
						<span class="service-intro">礼品卡</span>
					</li>
					<li class="yui3-u-1-4 life-item notab-item">
						<i class="list-item list-item-12"></i>
						<span class="service-intro">白条</span>
					</li>
				</ul>
				<div class="life-item-content">
					<div class="life-detail">
						<i class="close">关闭</i>
						<p>话费充值</p>
						<form action="" class="sui-form form-horizontal">
							号码：<input type="text" id="inputphoneNumber" placeholder="输入你的号码" />
						</form>
						<button class="sui-btn btn-danger">快速充值</button>
					</div>
					<div class="life-detail">
						<i class="close">关闭</i> 机票
					</div>
					<div class="life-detail">
						<i class="close">关闭</i> 电影票
					</div>
					<div class="life-detail">
						<i class="close">关闭</i> 游戏
					</div>
				</div>
				<div class="ads">
					<img src="/static/home/img/ad1.png" />
				</div>
			</div>
		</div>
	</div>
	<!--推荐-->
	<div class="show">
		<div class="py-container">
			<ul class="yui3-g Recommend">
				<li class="yui3-u-1-6  clock">
					<div class="time">
						<img src="/static/home/img/clock.png" />
						<h3>今日推荐</h3>
					</div>
				</li>
				<li class="yui3-u-5-24">
					<a href="list.html" target="_blank"><img src="/static/home/img/today01.png" /></a>
				</li>
				<li class="yui3-u-5-24">
					<img src="/static/home/img/today02.png" />
				</li>
				<li class="yui3-u-5-24">
					<img src="/static/home/img/today03.png" />
				</li>
				<li class="yui3-u-5-24">
					<img src="/static/home/img/today04.png" />
				</li>
			</ul>
		</div>
	</div>
	<!-- 商品排行 -->
	<div class="py-container tabbox">
		<div class="py-container tab">
			<div class="tab-tit" style="text-align:center">
				<a href="javascript:;" class="on">
					<p class="img"><i></i></p>
					<p class="text">热卖排行</p>
				</a>
				<a href="javascript:;">
					<p class="img"><i></i></p>
					<p class="text">特价排行</p>
				</a>
				<a href="javascript:;">
					<p class="img"><i></i></p>
					<p class="text">新品排行</p>
				</a>
			</div>

		</div>
		<div class="content">
			<ul>
				<li style="display:block;">
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
				</li>
				<li>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/2.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/2.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>

				</li>
				<li>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>
					<div class="img-item">
						<p class="tab-pic">
							<span><a href="#"><img src="/static/home/img/1.jpg" /></a></span>
						</p>
						<div class="tab-info">
							<div class="info-title">
								<span><a href="#">【官网价直降1100】Apple iPhone 8 Plus 256GB 银色 移动联通电信4G手机</a></span>
							</div>
							<p class="info-price">定金：¥100.00</p>
						</div>
					</div>

				</li>
			</ul>
		</div>
	</div>
	<!--喜欢-->
	<div class="like">
		<div class="py-container">
			<div class="title">
				<h3 class="fl">猜你喜欢</h3>
				<b class="border"></b>
				<a href="javascript:;" class="fr tip changeBnt" id="xxlChg"><i></i>换一换</a>
			</div>
			<div class="bd">
				<ul class="clearfix yui3-g Favourate picLB" id="picLBxxl">
					<li class="yui3-u-1-6">
						<dl class="picDl huozhe">
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_02.png" alt="" /></a>
								<div class="like-text">
									<p>阳光美包新款单肩包女包时尚子母包四件套女</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_01.png" alt="" /></a>
								<div class="like-text">
									<p>爱仕达 30CM炒锅不粘锅NWG8330E电磁炉炒</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
						</dl>
					</li>
					<li class="yui3-u-1-6">
						<dl class="picDl jilu">
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_03.png" alt="" /></a>
								<div class="like-text">
									<p>爱仕达 30CM炒锅不粘锅NWG8330E电磁炉炒</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_02.png" alt="" /></a>
								<div class="like-text">
									<p>阳光美包新款单肩包女包时尚子母包四件套女</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
						</dl>
					</li>
					<li class="yui3-u-1-6">
						<dl class="picDl tuhua">
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_01.png" alt="" /></a>
								<div class="like-text">
									<p>捷波朗 </p>
									<p>（jabra）BOOSI劲步</p>
									<h3>¥236.00</h3>
								</div>
							</dd>
							<dd>
								<a href="" class="pic"><img nsrc="/static/home//static/home/assets/img/like_02.png" alt="" /></a>
								<div class="like-text">
									<p>三星（G5500）</p>
									<p>移动联通双网通</p>
									<h3>¥566.00</h3>
								</div>
							</dd>
						</dl>
					</li>
					<li class="yui3-u-1-6">
						<dl class="picDl huozhe">
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_02.png" alt="" /></a>
								<div class="like-text">
									<p>阳光美包新款单肩包女包时尚子母包四件套女</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
							<dd>
								<a href="" class="pic"><img src="/static/home/img/like_01.png" alt="" /></a>
								<div class="like-text">
									<p>爱仕达 30CM炒锅不粘锅NWG8330E电磁炉炒</p>
									<h3>¥116.00</h3>
								</div>
							</dd>
						</dl>
					</li>
					<li class="yui3-u-1-6">
						<dl class="picDl jilu">
							<dd>
								<a href="http://sc.chinaz.com/" class="pic"><img src="/static/home/img/like_03.png" alt="" /></a>
								<div class="like-text">
									<p>捷波朗 </p>
									<p>（jabra）BOOSI劲步</p>
									<h3>¥236.00</h3>
								</div>
							</dd>
							<dd>
								<a href="http://sc.chinaz.com/" class="pic"><img src="/static/home/img/like_02.png" alt="" /></a>
								<div class="like-text">
									<p>欧普</p>
									<p>JYLZ08面板灯平板灯铝</p>
									<h3>¥456.00</h3>
								</div>
							</dd>
						</dl>
					</li>
					<li class="yui3-u-1-6">
						<dl class="picDl tuhua">
							<dd>
								<a href="http://sc.chinaz.com/" class="pic"><img src="/static/home/img/like_01.png" alt="" /></a>
								<div class="like-text">
									<p>三星（G5500）</p>
									<p>移动联通双网通</p>
									<h3>¥566.00</h3>
								</div>
							</dd>
							<dd>
								<a href="http://sc.chinaz.com/" class="pic"><img nsrc="/static/home//static/home/assets/img/like_02.png"
										alt="" /></a>
								<div class="like-text">
									<p>韩国所望紧致湿润精华露400ml</p>
									<h3>¥896.00</h3>
								</div>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--直播-->
	<div class="live">
		<div class="py-container">
			<div class="title">
				<h3 class="fl">直播</h3>
				<b class="border"></b>
				<!--<a href="javascript:;" class="fr tip changeBnt" id="xxlChg"><i></i>换一换</a>-->
			</div>
			<div class="bd">
				<ul class="clearfix yui3-g" id="">
					<?php foreach($lives as $live): ?>
					<li class="yui3-u-1-3" data-id="<?php echo $live['id']; ?>" style="cursor:pointer;overflow: hidden;height: 250px;">
						<div class="left" style="float:left;width:250px;position: relative;">
							<img width="100%" src="<?php echo $live['image']; ?>">
							<div style="position: absolute;left:0;bottom:0;width:250px;font-size: 18px;"><?php echo $live['title']; ?></div>
						</div>
						<div class="right" style="float:right;">
							<div class="up" style="height: 125px;">
								<img style="height: 125px;" src="<?php echo $live['image']; ?>">
							</div>
							<div class="down" style="height: 125px;">
								<img style="height: 125px;" src="<?php echo $live['image']; ?>">
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<!--有趣-->
	<div class="fun">
		<div class="py-container">
			<div class="title">
				<h3 class="fl">传智播客.有趣区</h3>
			</div>
			<div class="clearfix yui3-g Interest">
				<span class="x-line"></span>
				<div class="yui3-u row-405 Interest-conver">
					<img src="/static/home/img/interest01.png" />
				</div>
				<div class="yui3-u row-225 Interest-conver-split">
					<h5>好东西</h5>
					<img src="/static/home/img/interest02.png" />
					<img src="/static/home/img/interest03.png" />
				</div>
				<div class="yui3-u row-405 Interest-conver-split blockgary">
					<h5>品牌街</h5>
					<div class="split-bt">
						<img src="/static/home/img/interest04.png" />
					</div>
					<div class="x-img fl">
						<img src="/static/home/img/interest05.png" />
					</div>
					<div class="x-img fr">
						<img src="/static/home/img/interest06.png" />
					</div>
				</div>
				<div class="yui3-u row-165 brandArea">
					<span class="brand-yline"></span>
					<ul class="yui3-g brand-list">
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand01.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand02.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand03.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand04.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand05.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand06.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand07.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand08.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand09.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand10.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand11.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand12.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand13.png" /></li>
						<li class="yui3-u-1-2 brand-pit"><img src="/static/home/img/brand03.png" /></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--楼层-->
	<div id="floor-1" class="floor">
		<div class="py-container">
			<div class="title floors">
				<h3 class="fl">家用电器</h3>
				<div class="fr">
					<ul class="sui-nav nav-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab">热门</a>
						</li>
						<li>
							<a href="#tab2" data-toggle="tab">大家电</a>
						</li>
						<li>
							<a href="#tab3" data-toggle="tab">生活电器</a>
						</li>
						<li>
							<a href="#tab4" data-toggle="tab">厨房电器</a>
						</li>
						<li>
							<a href="#tab5" data-toggle="tab">应季电器</a>
						</li>
						<li>
							<a href="#tab6" data-toggle="tab">空气/净水</a>
						</li>
						<li>
							<a href="#tab7" data-toggle="tab">高端电器</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix  tab-content floor-content">
				<div id="tab1" class="tab-pane active">
					<div class="yui3-g Floor-1">
						<div class="yui3-u Left blockgary">
							<ul class="jd-list">
								<li>节能补贴</li>
								<li>4K电视</li>
								<li>空气净化器</li>
								<li>IH电饭煲</li>
								<li>滚筒洗衣机</li>
								<li>电热水器</li>
							</ul>
							<img src="/static/home/img/floor-1-1.png" />
						</div>
						<div class="yui3-u row-330 floorBanner">
							<div id="floorCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
								<ol class="carousel-indicators">
									<li data-target="#floorCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#floorCarousel" data-slide-to="1"></li>
									<li data-target="#floorCarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="active item">
										<img src="/static/home/img/floor-1-b01.png">
									</div>
									<div class="item">
										<img src="/static/home/img/floor-1-b02.png">
									</div>
									<div class="item">
										<img src="/static/home/img/floor-1-b03.png">
									</div>
								</div>
								<a href="#floorCarousel" data-slide="prev" class="carousel-control left">‹</a>
								<a href="#floorCarousel" data-slide="next" class="carousel-control right">›</a>
							</div>
						</div>
						<div class="yui3-u row-220 split">
							<span class="floor-x-line"></span>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-2.png" />
							</div>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-3.png" />
							</div>
						</div>
						<div class="yui3-u row-218 split">
							<img src="/static/home/img/floor-1-4.png" />
						</div>
						<div class="yui3-u row-220 split">
							<span class="floor-x-line"></span>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-5.png" />
							</div>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-6.png" />
							</div>
						</div>
					</div>
				</div>
				<div id="tab2" class="tab-pane">
					<p>第二个</p>
				</div>
				<div id="tab3" class="tab-pane">
					<p>第三个</p>
				</div>
				<div id="tab4" class="tab-pane">
					<p>第4个</p>
				</div>
				<div id="tab5" class="tab-pane">
					<p>第5个</p>
				</div>
				<div id="tab6" class="tab-pane">
					<p>第6个</p>
				</div>
				<div id="tab7" class="tab-pane">
					<p>第7个</p>
				</div>
			</div>
		</div>
	</div>
	<div id="floor-2" class="floor">
		<div class="py-container">
			<div class="title floors">
				<h3 class="fl">手机通讯</h3>
				<div class="fr">
					<ul class="sui-nav nav-tabs">
						<li class="active">
							<a href="#tab8" data-toggle="tab">热门</a>
						</li>
						<li>
							<a href="#tab9" data-toggle="tab">品质优选</a>
						</li>
						<li>
							<a href="#tab10" data-toggle="tab">新机尝鲜</a>
						</li>
						<li>
							<a href="#tab11" data-toggle="tab">高性价比</a>
						</li>
						<li>
							<a href="#tab12" data-toggle="tab">合约机</a>
						</li>
						<li>
							<a href="#tab13" data-toggle="tab">手机卡</a>
						</li>
						<li>
							<a href="#tab14" data-toggle="tab">手机配件</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix  tab-content floor-content">
				<div id="tab8" class="tab-pane active">
					<div class="yui3-g Floor-1">
						<div class="yui3-u Left blockgary">
							<ul class="jd-list">
								<li>节能补贴</li>
								<li>4K电视</li>
								<li>空气净化器</li>
								<li>IH电饭煲</li>
								<li>滚筒洗衣机</li>
								<li>电热水器</li>
							</ul>
							<img src="/static/home/img/floor-1-1.png" />
						</div>
						<div class="yui3-u row-330 floorBanner">
							<div id="floorCarousell" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
								<ol class="carousel-indicators">
									<li data-target="#floorCarousell" data-slide-to="0" class="active"></li>
									<li data-target="#floorCarousell" data-slide-to="1"></li>
									<li data-target="#floorCarousell" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="active item">
										<img src="/static/home/img/floor-1-b01.png">
									</div>
									<div class="item">
										<img src="/static/home/img/floor-1-b02.png">
									</div>
									<div class="item">
										<img src="/static/home/img/floor-1-b03.png">
									</div>
								</div>
								<a href="#floorCarousell" data-slide="prev" class="carousel-control left">‹</a>
								<a href="#floorCarousell" data-slide="next" class="carousel-control right">›</a>
							</div>
						</div>
						<div class="yui3-u row-220 split">
							<span class="floor-x-line"></span>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-2.png" />
							</div>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-3.png" />
							</div>
						</div>
						<div class="yui3-u row-218 split">
							<img src="/static/home/img/floor-1-4.png" />
						</div>
						<div class="yui3-u row-220 split">
							<span class="floor-x-line"></span>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-5.png" />
							</div>
							<div class="floor-conver-pit">
								<img src="/static/home/img/floor-1-6.png" />
							</div>
						</div>
					</div>
				</div>
				<div id="tab2" class="tab-pane">
					<p>第二个</p>
				</div>
				<div id="tab9" class="tab-pane">
					<p>第三个</p>
				</div>
				<div id="tab10" class="tab-pane">
					<p>第4个</p>
				</div>
				<div id="tab11" class="tab-pane">
					<p>第5个</p>
				</div>
				<div id="tab12" class="tab-pane">
					<p>第6个</p>
				</div>
				<div id="tab13" class="tab-pane">
					<p>第7个</p>
				</div>
				<div id="tab14" class="tab-pane">
					<p>第8个</p>
				</div>
			</div>
		</div>
	</div>
	<!--商标-->
	<div class="brand">
		<div class="py-container">
			<ul class="Brand-list blockgary">
				<li class="Brand-item">
					<img src="/static/home/img/brand_21.png" />
				</li>
				<li class="Brand-item"><img src="/static/home/img/brand_03.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_05.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_07.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_09.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_11.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_13.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_15.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_17.png" /></li>
				<li class="Brand-item"><img src="/static/home/img/brand_19.png" /></li>
			</ul>
		</div>
	</div>
	<!-- 楼层位置 -->
	<div id="floor-index" class="floor-index">
		<ul>
			<li>
				<a class="num" href="javascript:;" style="display: none;">1F</a>
				<a class="word" href="javascript;;" style="display: block;">家用电器</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">2F</a>
				<a class="word" href="javascript;;" style="display: block;">手机通讯</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">3F</a>
				<a class="word" href="javascript;;" style="display: block;">电脑办公</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">4F</a>
				<a class="word" href="javascript;;" style="display: block;">家居家具</a>
			</li>
			<li>
				<a class="num" href="javascript:;" style="display: none;">5F</a>
				<a class="word" href="javascript;;" style="display: block;">运动户外</a>
			</li>
		</ul>
	</div>


	<!--侧栏面板开始-->
	<div class="J-global-toolbar">
		<div class="toolbar-wrap J-wrap">
			<div class="toolbar">
				<div class="toolbar-panels J-panel">

					<!-- 购物车 -->
					<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="" class="title"><i></i><em class="title">购物车</em></a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('cart');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div id="J-cart-tips" class="tbar-tipbox hide">
									<div class="tip-inner">
										<span class="tip-text">还没有登录，登录后商品将被保存</span>
										<a href="#none" class="tip-btn J-login">登录</a>
									</div>
								</div>
								<div id="J-cart-render">
									<!-- 列表 -->
									<div id="cart-list" class="tbar-cart-list">
									</div>
								</div>
							</div>
						</div>
						<!-- 小计 -->
						<div id="cart-footer" class="tbar-panel-footer J-panel-footer">
							<div class="tbar-checkout">
								<div class="jtc-number"> <strong class="J-count" id="cart-number">0</strong>件商品 </div>
								<div class="jtc-sum"> 共计：<strong class="J-total" id="cart-sum">¥0</strong> </div>
								<a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
							</div>
						</div>
					</div>

					<!-- 我的关注 -->
					<div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('follow');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div class="tbar-tipbox2">
									<div class="tip-inner"> <i class="i-loading"></i> </div>
								</div>
							</div>
						</div>
						<div class="tbar-panel-footer J-panel-footer"></div>
					</div>

					<!-- 我的足迹 -->
					<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
						<h3 class="tbar-panel-header J-panel-header">
							<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
							<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('history');"></span>
						</h3>
						<div class="tbar-panel-main">
							<div class="tbar-panel-content J-panel-content">
								<div class="jt-history-wrap">
									<ul>
										<!--<li class="jth-item">
											<a href="#" class="img-wrap"> <img src="/static/home//static/home/./static/home/portal/img/like_03.png" height="100" width="100" /> </a>
											<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
											<a href="#" target="_blank" class="price">￥498.00</a>
										</li>
										<li class="jth-item">
											<a href="#" class="img-wrap"> <img src="/static/home//static/home//static/home/portal/img/like_02.png" height="100" width="100" /></a>
											<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
											<a href="#" target="_blank" class="price">￥498.00</a>
										</li>-->
									</ul>
									<a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="tbar-panel-footer J-panel-footer"></div>
					</div>

				</div>

				<div class="toolbar-header"></div>

				<!-- 侧栏按钮 -->
				<div class="toolbar-tabs J-tab">
					<div onclick="cartPanelView.tabItemClick('cart')" class="toolbar-tab tbar-tab-cart" data="购物车" tag="cart">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count " id="tab-sub-cart-count">0</span>
					</div>
					<div onclick="cartPanelView.tabItemClick('follow')" class="toolbar-tab tbar-tab-follow" data="我的关注"
						tag="follow">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count hide">0</span>
					</div>
					<div onclick="cartPanelView.tabItemClick('history')" class="toolbar-tab tbar-tab-history" data="我的足迹"
						tag="history">
						<i class="tab-ico"></i>
						<em class="tab-text"></em>
						<span class="tab-sub J-count hide">0</span>
					</div>
				</div>

				<div class="toolbar-footer">
					<div class="toolbar-tab tbar-tab-top"> <a href="#"> <i class="tab-ico  "></i> <em
								class="footer-tab-text">顶部</em> </a> </div>
					<div class="toolbar-tab tbar-tab-feedback"> <a href="#" target="_blank"> <i class="tab-ico"></i> <em
								class="footer-tab-text ">反馈</em> </a> </div>
				</div>

				<div class="toolbar-mini"></div>

			</div>

			<div id="J-toolbar-load-hook"></div>

		</div>
	</div>
	<!--购物车单元格 模板-->
	<script type="text/template" id="tbar-cart-item-template">
		<div class="tbar-cart-item" >
			<div class="jtc-item-promo">
				<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
				<div class="promo-text">已购满600元，您可领赠品</div>
			</div>
			<div class="jtc-item-goods">
				<span class="p-img"><a href="#" target="_blank"><img src="{2}" alt="{1}" height="50" width="50" /></a></span>
				<div class="p-name">
					<a href="#">{1}</a>
				</div>
				<div class="p-price"><strong>¥{3}</strong>×{4} </div>
				<a href="#none" class="p-del J-del">删除</a>
			</div>
		</div>
	</script>
	<!--侧栏面板结束-->
	<script>
		$(function(){
			$('.live li').click(function(){
				var id = $(this).attr('data-id');
				location.href = "<?php echo url('home/room/index'); ?>" + '?id=' + id;
			});
		});
	</script>
</body>

</html>


    <!-- 底部栏位 -->
    <!--页面底部-->
    <div class="clearfix footer">
        <div class="py-container">
            <div class="footlink">
                <div class="Mod-service">
                    <ul class="Mod-Service-list">
                        <li class="grid-service-item intro  intro1">

                            <i class="serivce-item fl"></i>
                            <div class="service-text">
                                <h4>正品保障</h4>
                                <p>正品保障，提供发票</p>
                            </div>

                        </li>
                        <li class="grid-service-item  intro intro2">

                            <i class="serivce-item fl"></i>
                            <div class="service-text">
                                <h4>正品保障</h4>
                                <p>正品保障，提供发票</p>
                            </div>

                        </li>
                        <li class="grid-service-item intro  intro3">

                            <i class="serivce-item fl"></i>
                            <div class="service-text">
                                <h4>正品保障</h4>
                                <p>正品保障，提供发票</p>
                            </div>

                        </li>
                        <li class="grid-service-item  intro intro4">

                            <i class="serivce-item fl"></i>
                            <div class="service-text">
                                <h4>正品保障</h4>
                                <p>正品保障，提供发票</p>
                            </div>

                        </li>
                        <li class="grid-service-item intro intro5">

                            <i class="serivce-item fl"></i>
                            <div class="service-text">
                                <h4>正品保障</h4>
                                <p>正品保障，提供发票</p>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="clearfix Mod-list">
                    <div class="yui3-g">
                        <div class="yui3-u-1-6">
                            <h4>购物指南</h4>
                            <ul class="unstyled">
                                <li>购物流程</li>
                                <li>会员介绍</li>
                                <li>生活旅行/团购</li>
                                <li>常见问题</li>
                                <li>购物指南</li>
                            </ul>

                        </div>
                        <div class="yui3-u-1-6">
                            <h4>配送方式</h4>
                            <ul class="unstyled">
                                <li>上门自提</li>
                                <li>211限时达</li>
                                <li>配送服务查询</li>
                                <li>配送费收取标准</li>
                                <li>海外配送</li>
                            </ul>
                        </div>
                        <div class="yui3-u-1-6">
                            <h4>支付方式</h4>
                            <ul class="unstyled">
                                <li>货到付款</li>
                                <li>在线支付</li>
                                <li>分期付款</li>
                                <li>邮局汇款</li>
                                <li>公司转账</li>
                            </ul>
                        </div>
                        <div class="yui3-u-1-6">
                            <h4>售后服务</h4>
                            <ul class="unstyled">
                                <li>售后政策</li>
                                <li>价格保护</li>
                                <li>退款说明</li>
                                <li>返修/退换货</li>
                                <li>取消订单</li>
                            </ul>
                        </div>
                        <div class="yui3-u-1-6">
                            <h4>特色服务</h4>
                            <ul class="unstyled">
                                <li>夺宝岛</li>
                                <li>DIY装机</li>
                                <li>延保服务</li>
                                <li>品优购E卡</li>
                                <li>品优购通信</li>
                            </ul>
                        </div>
                        <div class="yui3-u-1-6">
                            <h4>帮助中心</h4>
                            <img src="/static/home/img/wx_cz.jpg">
                        </div>
                    </div>
                </div>
                <div class="Mod-copyright">
                    <ul class="helpLink">
                        <li>关于我们<span class="space"></span></li>
                        <li>联系我们<span class="space"></span></li>
                        <li>关于我们<span class="space"></span></li>
                        <li>商家入驻<span class="space"></span></li>
                        <li>营销中心<span class="space"></span></li>
                        <li>友情链接<span class="space"></span></li>
                        <li>关于我们<span class="space"></span></li>
                        <li>营销中心<span class="space"></span></li>
                        <li>友情链接<span class="space"></span></li>
                        <li>关于我们</li>
                    </ul>
                    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</p>
                    <p>京ICP备08001421号京公网安备110108007702</p>
                </div>
            </div>
        </div>
    </div>
    <!--页面底部END-->
    <!--购物车单元格 模板-->
    <script type="text/template" id="tbar-cart-item-template">
    <div class="tbar-cart-item" >
        <div class="jtc-item-promo">
            <em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
            <div class="promo-text">已购满600元，您可领赠品</div>
        </div>
        <div class="jtc-item-goods">
            <span class="p-img"><a href="#" target="_blank"><img src="{2}" alt="{1}" height="50" width="50" /></a></span>
            <div class="p-name">
                <a href="#">{1}</a>
            </div>
            <div class="p-price"><strong>¥{3}</strong>×{4} </div>
            <a href="#none" class="p-del J-del">删除</a>
        </div>
    </div>
</script>
    <!--侧栏面板结束-->


</body>

</html>