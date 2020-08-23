<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>

<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>





  <img width="100%" src="./img/banner/web_main.jpg?image_loading_time=<?php echo time()?>" alt="유니브" class="web_image">
  <img width="100%" src="./img/banner/mobile_main.jpg?image_loading_time=<?php echo time()?>" alt="history" class="mobile_image">
<section>
<div class="blank"></div>
<div class="divider">
  <div>
    <h1 class="title_divider" style="padding-bottom:0px;">What We Do</h1>
    <p class="gomenu" style="color:gray">각 설명을 클릭하시면 해당 페이지로 이동합니다.</p>
  </div>
<div class="blank"></div>

  <div class="wrapping">
    <a href="original.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/symbol/오리지널.png?image_loading_time=<?php echo time()?>" alt="O_O">
            <div>
              <h3 class="center" style="font-weight:900">오리지널</h3>
            </div>
          </div>
          <div class="main_content_normal_text">
            <p class="main_copy">학생들을 대상으로 공부팁, 학교 생활 모습 등을 재미있게 알려주는 채널(Owned & Operated 채널)을 직접 운영합니다. </p>
          </div>
        </div>
      </a>
      <a href="creator.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/symbol/파트너십.png?image_loading_time=<?php echo time()?>" alt="creator">
            <div>
              <h3 class="center" style="font-weight:900">파트너십</h3>
            </div>
          </div>
          <div class="main_content_normal_text">
            <p class="main_copy">교육/러닝 카테고리를 넘어서서 학생 라이프스타일 채널들이 높은 영향력을 얻을 수 있도록 전범위적인 매니지먼트를 지원합니다.</p>
          </div>
        </div>
      </a>
      <a href="class.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
          <img class="image_mini" src="./img/symbol/클래스.png?image_loading_time=<?php echo time()?>" alt="class">
          <div>
            <h3 class="center" style="font-weight:900">클래스</h3>
          </div>
          </div>
          <div class="main_content_normal_text">
            <p class="main_copy">변화하는 뉴미디어 환경에 맞춰 YouTube를 기반으로 유익하면서 동시에 재미있는 교육/학습 콘텐츠를 제공합니다.</p>
          </div>
        </div>
      </a>
  </div>

  <div class="blank_hide"></div>

<div class="wrapping">
  <div class="wrapper_three_hidden">

  </div>
    <a href="business_brand.php">
      <div class="wrapper_three">
        <div class="wrap_image_title">
        <img class="image_mini" src="./img/symbol/광고사업.png?image_loading_time=<?php echo time()?>" alt="BDC">
        <div>
          <h3 class="center" style="font-weight:900">광고사업</h3>
        </div>
        </div>
        <div class="main_content_normal_text">
          <p class="main_copy">오리지널 채널 운영 및 파트너 채널 매니지먼트를 통해 확보한 콘텐츠 역량을 기반으로 브랜드 파워 강화 방안을 제시합니다.</p>
        </div>
      </div>
    </a>
    <a href="business_ip.php">
      <div class="wrapper_three">
        <div class="wrap_image_title">
        <img class="image_mini" src="./img/symbol/아이피.png?image_loading_time=<?php echo time()?>" alt="IP">
        <div>
          <h3 class="center style="font-weight:900"">IP 사업</h3>
        </div>
        </div>
        <div class="main_content_normal_text">
          <p class="main_copy">채널을 기반으로 형성된 강력한 브랜드 아이덴티티를 기반으로 굿즈 출시, 출판 등 다양한 상품화 프로젝트를 진행합니다.</p>
        </div>
      </div>
    </a>
    </div>
</div>

<div class="blank_hide"></div>
<div class="divider">
  <div>
    <h1 class="title_divider">History</h1>
  </div>
  <img width="100%" src="./img/banner/web_history.jpg?image_loading_time=<?php echo time()?>" alt="유니브" class="web_image">
  <img width="100%" src="./img/banner/mobile_history.jpg?image_loading_time=<?php echo time()?>" alt="history" class="mobile_image">
</div>
<div class="divider">
  <div>
    <h1 class="title_divider">Contact Us</h1>
  </div>
  <p> <br></p>
  <div class="wrapping">
    <div class="wrap_contact_map">
        <div id="map"></div>
    </div>
    <div class="wrap_contact_address">
        <div class="contact_address_title">
          <p>&nbsp;주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소<br></p>
          <p><br>&nbsp;대&nbsp;표&nbsp;&nbsp;&nbsp;전&nbsp;화<br></p>
          <p><br>&nbsp;팩&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;스<br></p>
          <p><br>&nbsp;이&nbsp;&nbsp;&nbsp;&nbsp;메&nbsp;&nbsp;&nbsp;&nbsp;일<br></p>
          <p><br>&nbsp;영&nbsp;업&nbsp;&nbsp;&nbsp;시&nbsp;간</p>
        </div>
        <div class="contact_address_text">
          <p>서울시 강남구 테헤란로 501 브이플렉스 411호 (06168)<br></p>
          <p><br>02-508-8866<br></p>
          <p><br>02-508-8867<br></p>
          <p><br>contact@youniv.video<br></p>
          <p><br>평일 10:00-19:00 / 주말, 공휴일 휴무</p>
        </div>
    </div>
  </div>
</div>
<div class="blank"></div>

<script>
var mapOptions = {center: new naver.maps.LatLng(37.507280, 127.056940),zoom: 16};
var map = new naver.maps.Map('map', mapOptions);
var markerOptions = {position:new naver.maps.LatLng(37.507280, 127.056940), map: map};
var marker = new naver.maps.Marker(markerOptions);
</script>

<?php require('./view/bottom.php');?>
