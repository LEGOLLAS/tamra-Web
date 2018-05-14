<div id="MAIN_CONTENT">
	<div id="MAIN_BANNER_1" class="box">
		<style>

			#MAIN_BANNER_1 ul.tabs {
				margin:15px 15px 10px 15px;
				padding: 0;
				float: left;
				list-style: none;
				height: 32px;
				/*border-bottom: 1px solid #eee;*/
				border-left: 1px solid #eee;
				width: 95%;
				font-family:"dotum";
				font-size:12px;
			}
			#MAIN_BANNER_1 ul.tabs li {
				float: left;
				text-align:center;
				cursor: pointer;
				width:100px;
				height: 31px;
				line-height: 31px;
				border: 1px solid #eee;
				border-left: none;
				font-weight: bold;
				font-size: 16px;
				background: #fafafa;
				overflow: hidden;
				position: relative;
			}
			#MAIN_BANNER_1 ul.tabs li.active {
				background: #FFFFFF;
				/*border-bottom: 1px solid #FFFFFF;*/
			}
			#MAIN_BANNER_1 .tab_container {
				margin-left:15px;
				/*border: 1px solid #eee;*/
				border-top: none;
				clear: both;
				float: left;
				width: 95%;
				background: #FFFFFF;
			}
			#MAIN_BANNER_1 .tab_content {
				padding: 5px;
				font-size: 12px;
				display: none;
			}
			#MAIN_BANNER_1 .tab_container .tab_content ul {
				width:100%;
				margin:0px;
				padding:0px;
			}
			#MAIN_BANNER_1 .tab_container .tab_content ul li {
				padding:5px;
				list-style:none
			}
			;
			#MAIN_BANNER_1 #container {
				width:90%;
				margin:15px;
			}
		</style>
		<ul class="tabs">
			<li class="active" rel="tab1">공지사항</li>
			<li rel="tab2">구매랭킹</li>
			<li rel="tab3">공지사항</li>
			<a href="#"><img src="/2018/images/main/main_icon_plus.png" style="float:right; width:40px; margin-top:-2px;" /></a>
		</ul>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<ul>
					<li><a href="#">이것은 두 번째 탭의</a>
					</li>
					<li><a href="#">이것은 두 번째 탭의</a>
					</li>
					<li><a href="#">이것은 두 번째 탭의</a>
					</li>
					<li><a href="#">이것은 두 번째 탭의</a>
					</li>
					<li><a href="#">이것은 두 번째 탭의</a>
					</li>
				</ul>
			</div>
			<!-- #tab1 -->
			<div id="tab2" class="tab_content">2222Mortal Kombat returns after a lengthy hiatus and puts players back into the Tournament for 2D fighting with gruesome combat.</div>
			<!-- #tab2 -->
			<div id="tab3" class="tab_content">3333Halo: Reach is the culmination of the superlative combat, sensational multiplayer, and seamless online integration that are the hallmarks of this superb series.</div>
			<!-- #tab3 -->
		</div>
		<!-- .tab_container -->
		<script>
			$(function () {

				$(".tab_content").hide();
				$(".tab_content:first").show();

				$("ul.tabs li").click(function () {
					$("ul.tabs li").removeClass("active").css("color", "#333");
					//$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
					$(this).addClass("active").css("color", "darkred");
					$(".tab_content").hide()
					var activeTab = $(this).attr("rel");
					$("#" + activeTab).fadeIn()
				});
			});
		</script>
	</div>
	<div id="MAIN_BANNER_2" class="box">
		<a href=""><img src="/2018/images/main/main_lapore.png" alt="탐라라포르" /></a>
	</div>
	<div id="MAIN_BANNER_3" class="box">
		<a href=""><img src="/2018/images/main/main_ablenews.png" alt="에이블뉴스" /></a>
	</div>
	<div id="MAIN_BANNER_4" class="box">
		<a href=""><img src="/2018/images/main/main_photo_title.png" alt="갤러리" /></a><br />
		<div>
			<a href=""><img src="/2018/images/main/tmp01.png" alt="갤러리" /></a>
		</div>
		<div>
			<a href=""><img src="/2018/images/main/tmp01.png" alt="갤러리" /></a>
		</div>
		<div>
			<a href=""><img src="/2018/images/main/tmp01.png" alt="갤러리" /></a>
		</div>
	</div>





	<div id="MAIN_LINK" class="box2">
		
		<div>
			<a href=""><img src="/2018/images/main/main_icon01.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon02.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon03.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon04.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon05.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon06.png" alt="아이콘" /></a>
		</div>
		<img src="/2018/images/main/main_icon_bar.png" alt="bar" />
		<div>
			<a href=""><img src="/2018/images/main/main_icon07.png" alt="아이콘" /></a>
		</div>

	</div>



  
    <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
	
    </style>
 <? /*
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/SRC2/lightslider/js/lightslider.js"></script> 
    <script>
      
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
              	auto:false,
                keyPress:true
            });
        
		});
    </script>

      
        <div class="item">
            <ul id="content-slider" class="content-slider">
                <li>
                    <h3>1</h3>
                </li>
                <li>
                    <h3>2</h3>
                </li>
                <li>
                    <h3>3</h3>
                </li>
                <li>
                    <h3>4</h3>
                </li>
                <li>
                    <h3>5</h3>
                </li>
                <li>
                    <h3>6</h3>
                </li>
            </ul>
    
        </div>
*/ ?>





























	<div id="MAIN_SITES" class="box2">
		<a href=""><img src="/2018/images/main/sites/01.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/02.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/03.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/04.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/05.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/06.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/07.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/08.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/09.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/10.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/11.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/12.png" alt="사이트" /></a>
		<a href=""><img src="/2018/images/main/sites/13.png" alt="사이트" /></a>
	</div>

</div>