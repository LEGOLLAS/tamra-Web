<?
include_once("_common.php");

include_once("include/header.php");
include_once("include/top.php");

?>

<div id="contBody">

    <div id="contFlash">
        <ul>
            <li class="first">
                <img src="/images/noflash/m_s_1.jpg" class="sm">
                <a href="./intro/01.php" class="mi">
                    <img src="/images/noflash/m_1.jpg">
                </a>
            </li>
            <li>
                <img src="/images/noflash/m_s_2.jpg" class="sm">
                <a href="./busin/busin.php" class="mi">
                    <img src="/images/noflash/m_2.jpg">
                </a>
            </li>
            <li>
                <img src="/images/noflash/m_s_3.jpg" class="sm">
                <a href="./support/01.php" class="mi">
                    <img src="/images/noflash/m_3.jpg">
                </a>
            </li>
            <li>
                <img src="/images/noflash/m_s_4.jpg" class="sm">
                <a href="./busin/busin.php?choiceid=7" class="mi">
                    <img src="/images/noflash/m_4.jpg">
                </a>
            </li>
            <li>
                <img src="/images/noflash/m_s_5.jpg" class="sm">
                <a href="./popup/01.html" target="_blank"  class="mi">
                    <img src="/images/noflash/m_5.jpg">
                </a>
            </li>
        </ul> 
    </div><!-- <div id="contFlash"> //-->
    <script>
        $(document).ready(function(){
            $('#contFlash > ul > li.first > img').hide();
            $('#contFlash > ul > li.first > a').show();
            
            $('#contFlash > ul > li > img').hover(
                function(){
                    $('#contFlash > ul > li > img.sm').show();
                    $('#contFlash > ul > li > a.mi').hide();
                    $(this).parent().find('a.mi').show();
                    $(this).hide();
                },
                function(){
                }
            );
        });
    </script>

	<ul id="contArea">
		<li style="margin-right:22px;"><? include_once("index.notice.php");?></li>

	   <li style="width:160px;height:120px;margin-right:22px;"><div style="width:160px; height:26px;"><a href="/2012/notice/04.php"><img src="/2012/images/main/photo_bg.gif" alt="dot" title="dot"></a></div>
       <div class="main_photogellery" style="padding-top:13px;"><?=latest("tamna_photo_2012", "photogallery", 1, 18);?></div></li>

		<li style="margin-right:22px;">
            <ul>
                <li><a href="./comm/04.php?ConnectId=tamnawel"><img src="./images/main/quick_1.jpg"></a></li>
                <li><a href="./notice/06.php"><img src="./images/main/quick_2.png"></a></li>
            </ul>
        </li>

		<li><img src="/2012/images/main/icon.gif" border="0" usemap="#snsBannerMap" alt="���޴�" title="���޴�" >
          <map name="snsBannerMap" id="snsBannerMap">
            <area shape="rect" coords="3,2,51,63" href="http://www.jejuwel.or.kr " target="_blank" alt="(��)����Ư����ġ��������ѿ���ȸ" title="(��)����Ư����ġ��������ѿ���ȸ" />
            <area shape="rect" coords="55,4,104,62" href="http://www.work.go.kr" target="_blank" alt="�������" title="�������" />
            <area shape="rect" coords="109,3,158,62" href="/2012/rsite/01.php" target="_blank" alt="��õ����Ʈ" title="��õ����Ʈ" />
            <area shape="rect" coords="1,64,53,125" href="//www.facebook.com/%ED%83%90%EB%9D%BC%EC%9E%A5%EC%95%A0%EC%9D%B8%EC%A2%85%ED%95%A9%EB%B3%B5%EC%A7%80%EA%B4%80-520284564730114" target="_blank" alt="���̽���" title="���̽���"/>
            <area shape="rect" coords="54,64,106,124" href="/2012/notice/03.php" target="_blank" alt="�̴������" title="�̴������"/>
            <area shape="rect" coords="110,64,159,124" href="/2012/notice/07.php" alt="��������ó����ħ" title="��������ó����ħ" />
          </map>
        </li>


       
  	</ul>
  <div id="contBanner"> 
<script>
$(document).ready(function(){	
	  var rollingDiv = $("#contBanner");
	  rollingDiv.rolling("left", 108, 30, 9);
	  rollingDiv.addRollingItem("<a href='http://www.jejusi.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/01.png' alt='����Ư����ġ�� ���ֽ�' title='����Ư����ġ�� ���ֽ�' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.seogwipo.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/02.png' alt='����Ư����ġ�� ��������' title='����Ư����ġ�� ��������' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.chest.or.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/03.png' alt='����ǿ���' title='����ǿ���' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.humanrights.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/04.png' alt='�����α�����ȸ' title='�����α�����ȸ' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.jcaf.or.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/05.png' alt='���ֹ�ȭ �������' title='���ֹ�ȭ �������' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.jeju.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/06.png' alt='����Ư����ġ��' title='����Ư����ġ��' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.mw.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/07.png' alt='���Ǻ�����' title='���Ǻ�����' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.hinet.or.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/08.png' alt='�ѱ�����κ�������ȸ' title='�ѱ�����κ�������ȸ' /></a>");
	  rollingDiv.addRollingItem("<a href='http://jejubokji.net/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/09.png' alt='����Ư����ġ�� ��ȸ��������ȸ' title='����Ư����ġ�� ��ȸ��������ȸ' /></a>");
	  rollingDiv.addRollingItem("<a href='https://www.kead.or.kr/index.jsp' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/10.png' alt='�ѱ������ ������' title='�ѱ������ ������' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.129.go.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/11.png' alt='���Ǻ����ݼ���' title='���Ǻ����ݼ���' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.��ȭ����ī��.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/12.png' alt='��ȭ����' title='��ȭ����' /></a>");
	  rollingDiv.addRollingItem("<a href='http://www.sati.or.kr/' target='_blank' title='��â���� ����'><img src='/2012/images/main/banner/13.png' alt='���Ƽ��' title='���Ƽ��' /></a>");

	  rollingDiv.startRolling(9, 0, 548);
	  rollingDiv.bind("mouseover", function() {
		rollingDiv.stopRolling();
	  });
	  rollingDiv.bind("mouseout", function() {
		rollingDiv.resumeRolling();
	  });
	  $("#PageBottom .paging_1").hover(function() {
	  rollingDiv.leftRolling();
	  rollingDiv.setRollingTime(7);
	  rollingDiv.setRollingAnimationFrame(274);
	},function(){
	  rollingDiv.setRollingTime(9);
	  rollingDiv.setRollingAnimationFrame(548);
	});
	  $("#PageBottom .paging_2").hover(function() {
	  rollingDiv.rightRolling();
	  rollingDiv.setRollingTime(7);
	  rollingDiv.setRollingAnimationFrame(274);
	},function(){
	  rollingDiv.setRollingTime(9);
	  rollingDiv.setRollingAnimationFrame(548);
	});
});
</script>
	</div><!-- <div id="contBanner"> //-->

</div><!-- <div id="contBody">//-->


<?

include_once("../board/lib/popup.lib.php");
include_once("include/copyright.php");
?>
