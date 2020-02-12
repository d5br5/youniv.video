<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>
<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>

<?php
    $sql='select * from recruit where rc_no='.$_GET['rc_no'].';';
    $result= mysqli_query($conn, $sql);


while($row=mysqli_fetch_array($result)){
    $filtered=array('rc_no'=>htmlspecialchars($row['rc_no']),
                   'rc_title'=>htmlspecialchars($row['rc_title']),
                   'rc_group'=>htmlspecialchars($row['rc_group']),
                   'rc_form'=>htmlspecialchars($row['rc_form']),
                   'rc_career'=>htmlspecialchars($row['rc_career']),
                   'rc_deadline'=>htmlspecialchars($row['rc_deadline']),
                   'rc_text'=>htmlspecialchars($row['rc_text']),
                   'rc_directory'=>htmlspecialchars($row['rc_directory']),
                   'rc_imagename'=>htmlspecialchars($row['rc_imagename']),
                 )
    ?>

<div class="divider">
  <div class="board">
    <div class="board_header_wrap">
      <div class="board_header">
      <div>
        <?=$filtered['rc_title']?>
      </div>
      <div style="float:left">
        <div>
          마감기한 : <?=$filtered['rc_deadline']?>
        </div>
      </div>
      <div style="float:right">
        <div class="board_content_status">
          형태 : <?=$filtered['rc_form']?>
        </div>
        <div class="board_content_status">
          직군 : <?=$filtered['rc_group']?>
        </div>
        <div class="board_content_status">
          대상 : <?=$filtered['rc_career']?>
        </div>
      </div>
    </div>
    </div>
    <div class="board_section">
      <div class="blank"></div>
       <div style="width:100%">
         <img style="width:100%" src="<?='./adminpages/recruit/fileupload_recruit/'.$filtered['rc_imagename']?>" alt="구인글">
       </div>
       <div style="padding:5px">
         <?=$filtered['rc_text']?>
       </div>
       <div class="apply_button">
         <a href="apply_recruit_form.php?rc_no=<?=$filtered['rc_no']?>"><div class="apply_text">지원하기</div></a>
       </div>
    </div>
  </div>
</div>
          <?php
         }
              ?>


<?php require('./view/bottom.php');?>