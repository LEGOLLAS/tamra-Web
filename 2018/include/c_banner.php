


	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>





<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
	
	<!--페이지-->
<!--
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>
	-->
	<!--페이지-->

	

	<div class="carousel-inner">
		<!--슬라이드1-->
		<div class="item active"> 
			<img src="/2018/images/main/banner1.png" style="width:100%" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
				
				</div>
			</div>
		</div>
		<!--슬라이드1-->

		<!--슬라이드2-->
		<div class="item"> 
				<img src="/2018/images/main/banner2.png" style="width:100%" data-src="" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
				
				</div>
			</div>
		</div>
		<!--슬라이드2-->
				<!--슬라이드2-->
		<div class="item"> 
			<img src="/2018/images/main/banner3.png" style="width:100%" data-src="" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
			
				</div>
			</div>
		</div>
		<!--슬라이드2-->
		
		<!--슬라이드3-->
		<div class="item"> 
				<img src="/2018/images/main/banner3.png" style="width:100%" data-src="" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">
				<!--	<h1>Slide 3</h1>
					<p>텍스트 3</p> -->
				</div>
			</div>
		</div>
		<!--슬라이드3-->
	</div>
	
	<!--이전, 다음 버튼-->
	<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>  -->
</div>



<div id="DIV_BANNER">
	<!-- Main Slider S -->
	<div>
	<style>
		.slider_row{  }
		.slider_row:after{ content:""; clear:both; display:block; }
		 
		/* 슬라이더 기본 위치 */
	
	#slider_list{ left:50%; }	 
		/* 슬라이더 이동(우) 위치 */
		



#DIV_BANNER{display:none;}



@media screen and (min-width:1000px) {
#DIV_BANNER { position:relative; width:100%; height:382px; overflow:hidden; }
			#slider_list{ position:absolute; margin-left:-1500px; }
			#DIV_BANNER img { float:left; width:1000px; height:380px }
			#DIV_BANNER>div { position:absolute;   width:4000px; height:380px; left:50%; margin-left:-2000px; }
			#DIV_BANNER{height:382px;}
			#slider_list.animate{ margin-left: -2500px; transition: .5s ease; }
			#slider_list li{ float: left; width: 1000px; list-style: none;}
			#DIV_BANNER{display:block;}
			#myCarousel{display:none;}
}
@media screen and (min-width:600px) and (max-width:1000px) {
#DIV_BANNER { position:relative; width:100%; height:382px; overflow:hidden; }
			#slider_list{ height:254px; }
			#DIV_BANNER img { position:absolute; float:left; width:100%; height:auto; }
			#DIV_BANNER>div { position:absolute;   width:100%; height:254px; }
			#DIV_BANNER { height:382px; }
			#slider_list.animate{ margin-left: -100%; transition: .5s ease; }
			#slider_list li{ float: left; width: auto; list-style: none;}
			
		


@media screen and (max-width:768px) {
			#slider_list{ height:254px; }
			#DIV_BANNER img { position:absolute; float:left; width:100%; height:254px; }
			#DIV_BANNER>div {width:100%; height:254px; }
			#DIV_BANNER { width:100%;height:254px; }
			#slider_list.animate{ margin-left: -100%; transition: .5s ease; }
			#slider_list li{float: left; width: auto; list-style: none;}
		

			}
@media screen and (min-width:480px) and (max-width:600px){
	
}


@media screen and (min-width:320px) and  (max-width:480px) {
	}



@media screen and (min-width:100px) and (max-width:480px) {
	#ct_menu>div>a>img { width:100%; text-align:center; }
		
}







		#slider_list img{ border:1px solid;}
		 
		.active{ background-color:yellow; }
		li[data-roll="2"]{}
	</style>

	<div class="slider_row">
		<ul id="slider_list">
			<li data-roll="1"><img src="/2018/images/main/banner1.png" /></li>
			<li data-roll="2"><img src="/2018/images/main/banner2.png" /></li>
			<li data-roll="3"><img src="/2018/images/main/banner3.png" /></li>
			<li data-roll="4"><img src="/2018/images/main/banner4.png" /></li>
		</ul>
	</div>




	<script>
		// 현재 노드 뒤의 Element Node를 탐색하는 함수
		function setElementNodeNext(node){
			while(node.nodeType !== 1){
				node = node.nextSibling;
			}
			return node;
		}
		// 현재 노드 앞의 Element Node를 탐색하는 함수
		function setElementNodePre(node){
			while(node.nodeType !== 1){
				node = node.previousSibling;
			}
			return node;
		}
		 
		function nodeRotate() {
			
			var list = document.getElementById("slider_list");
			var firstChild = list.firstChild, 
				lastChild = list.lastChild;
		 
			function swapNodes(){
		 
				// Element 노드 선택
				firstChild = setElementNodeNext(list.firstChild);
				lastChild = setElementNodePre(list.lastChild);
		 
				// 마지막 목록을 처음으로 이동하여 목록을 순환시킴
				//list.insertBefore(lastChild, firstChild); 
				// 처음 목록을 마지막으로 이동하여 목록을 순환시킴
				list.appendChild(firstChild);
		 
				// 첫째 elment node 선택
				firstChild = setElementNodeNext(list.firstChild);
		 
				// css 슬라이더 위치 초기화(CSS transition 중단)
				list.className = ""; 
		 
				// transitionend 이벤트 리스너 초기화
				list.removeEventListener("transitionend", swapNodes);
		 
			}
		 
			// 슬라이더 이동 효과(css trasition)를 위란 클래스 지정
			list.className = "animate"; 
		 
			// list 목록의  트랜지션이 끝난 후, 다음 보여줄 목록들의 배치 수행
			list.addEventListener("transitionend", swapNodes);

			setTimeout(function() { nodeRotate(); }, 5000);
		}
		 
		//var btn = document.getElementById("btn_r");
		//btn.addEventListener("click", nodeRotate, false);
		window.onload = function() { nodeRotate(); };
	</script>
	</div>
	<!-- Main Slider E -->
</div>



