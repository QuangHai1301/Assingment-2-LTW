<?php header("Content-Type: text/html;charset=UTF-8");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Video</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/starter-template.css" rel="stylesheet">
  <link href="css/video-player.css" rel="stylesheet"></head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MUSIC</a>
      </div>
      <div class="collapse navbar-collapse">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nội dung"></div>
          <button type="submit" class="btn btn-default">Tìm kiếm</button>
        </form>
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#">Trang Chủ</a>
          </li>
          <li>
            <a href="#about">Giới Thiệu</a>
          </li>
          <li>
            <a href="#contact">Liên Hệ</a>
          </li>
          <li></ul>
          <div class="nav navbar-nav navbar-right">
            <div class="btn-group">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cá nhân
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Playlist của tôi</a>
                </li>
                <li>
                  <a href="#">Upload nhạc mới</a>
                </li>
                <li>
                  <a href="#">Thay đổi thông tin</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="#">Đăng xuất</a>
                </li>
              </ul>
            </div>
            <a class="btn btn-success btn-sm navbar-btn" href="#">Đăng nhập</a>
            <a class="btn btn-primary btn-sm navbar-btn" href="#">Đăng ký</a>
          </div>
        </div>
      </div>
    </div>

    <!--Container-->
    <div class="container" >
      <div class="row">
      
        <!--Center content -->
        <div class="col-md-9">


          <!--Video Player-->

          <div id="instructions">

            <video id="my_video_1" class="video-js vjs-default-skin"
                <? echo 'controls preload="none" poster="video/'.$_GET['video'].'.jpg"'; ?>
                
                data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                <? echo  '<source src="video/'.$_GET['video'].'.mp4" type="video/mp4" />';?>
            </video>
          </div>



          <!--Video Player-->
          <div class="row">
            <div class="col-md-10">
              <h3 style="font-weight: bold "><? echo $_GET["name"].' - '.$_GET['artist'].' '; ?><span class="glyphicon glyphicon-music" aria-hidden="true"></span></h3>
            </div>
            <h4><span class="col-md-2"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>123.222</span></h4>
          </div>
          <div class="row">
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <a href="#">Thêm vào </a> </span></h5>
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> <? echo '<a href="download.php?video='.$_GET['video'].'">';?>Tải về </a> </span></h5>
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> <a href="#">Chia sẻ </a> </span></h5>
          </div>
          <!--Lyric-->
          <div class="panel panel-default">
            <div class="panel-body">
                 <?php
                  error_reporting(E_ALL ^ E_WARNING); 
                  $myfile = fopen('video/'.$_GET["video"].'.txt', "r");
                  if(!$myfile) echo "Chưa có lời bài hát!";
                  else
                  while (($line = fgets($myfile)) !== false) {
                          echo $line.'<br>';
                      }
                  fclose($myfile);
                  ?>
                
            </div>
          </div>

           </div>

        <!--Right Content -->
        <div class="col-md-3">
          <div class="panel panel-primary">

            <div class="panel-heading">Bài hát cùng ca sỹ</div>
            <ul class="list-group">
            <li class="list-group-item"><a href="Music.html" >1. Found Love In a Graveyard - Veronica Falls</a></li>
            <li class="list-group-item"><a href="#">2. Nếu Em Còn Tồn Tại - Trịnh Đình Quang</a></li>
            <li class="list-group-item"><a href="#">3. Tâm Sự Với Người Lạ - Tiên Cookie</a></li>
            <li class="list-group-item"><a href="#">4. Khi Người Mình Yêu Khóc - Phan Mạnh Quỳnh</a></li>
            <li class="list-group-item"><a href="#">5. Tình Yêu Chắp Vá - Mr. Siro</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER-->
    <footer>

      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-lg-3">
            <h4 class="line3 center standart-h4title">
              <span>Thành viên</span>
            </h4>
            <ul class="footer-links">
              <li>
                <a href="#">Phạm Quang Hải</a>
              </li>
              <li>
                <a href="#">Nguyễn Dương Hạnh</a>
              </li>
              <li>
                <a href="#">Nguyễn Văn Dương</a>
              </li>
              <li>
                <a href="#">Nguyễn Đức Thái</a>
              </li>
            </ul>
          </div>

          

          <div class="col-xs-6 col-sm-6 col-lg-3">
            <h4 class="line3 center standart-h4title">
              <span>Thông tin liên hệ:</span>
            </h4>
            <address> <strong>Đại học Bách Khoa TP.HCM</strong>
              <br> <i class="icon-map-marker"></i>
              268 Lý Thường Kiệt
              <br>
              Quận 10 TP.HCM
              <br> <i class="icon-phone-sign"></i>
              + 4 (123) 456-7890
            </address>
          </div>

        </div>

      </div>
      <!-- CONTAINER FOOTER--> </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      

        $(function(){
        var $refreshButton = $('#refresh');
        var $results = $('#css_result');
        
        function refresh(){
          var css = $('style.cp-pen-styles').text();
          $results.html(css);
        }

        refresh();
        $refreshButton.click(refresh);
        
        // Select all the contents when clicked
        $results.click(function(){
          $(this).select();
        });
      });

    </script></body>
  </html>