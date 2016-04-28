<?php header("Content-Type: text/html;charset=UTF-8");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nghe nhạc</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/starter-template.css" rel="stylesheet">
  <link href="css/player.css" rel="stylesheet"></head>

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
            <a href="index.php">Trang Chủ</a>
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


          <!--Music Player-->
          <audio id="audio">
            
            <source src=<? echo '"'.$_GET["music_link"].'"' ?>></audio>

          <div class="audio-player">
            <div class="cover-art">
              <a href="#" target="_blank"></a>
            </div>
            <div class="info">
              <h2> <? echo $_GET["music_singer"];?> </h2>
              <h3><? echo $_GET["music_name"];?></h3>
              <p id="timeleft">00:00</p>
              <div class="progressbar_slide">
                <div class="progressbar_range"></div>
              </div>
            </div>
            <div class="controls">
              <div class="controls_plays">

                <svg id="prev_btn" viewBox="0 0 24.5 23.6">
                  <polygon points="0,11.8 13.5,0 13.5,10.7 24.5,0 24.5,23.6 13.5,12.9 13.5,23.6 "/>
                </svg>

                <svg id="plays_btn" viewBox="0 0 24.5 30.9">
                  <g id="play_btn">
                    <path d="M0,30.9L0,0l24.5,15.4L0,30.9z"/>
                  </g>
                  <g id="pause_btn">
                    <rect x="0" y="0" width="8.2" height="30.9"/>
                    <rect x="16.2" y="0" width="8.2" height="30.9"/>
                  </g>
                </svg>

                <svg id="next_btn" viewBox="0 0 24.5 23.6">
                  <polygon points="25,11.8 11.5,0 11.5,10.7 0.5,0 0.5,23.6 11.5,12.9 11.5,23.6 "/>
                </svg>

              </div>
              <div class="controls_player">

                <svg id="volume_btn" viewBox="0 0 23 23">
                  <path d="M17.5,6.6v9.9L11.4,13H5.5v-3h6L17.5,6.6z M10.7,7H2.5v9h8.2l9.8,5.3V1.2L10.7,7z"/>
                </svg>

                <svg id="shuffle_btn" viewBox="0 0 23 23">
                  <path d="M7.3,6l0.4,2.8l3.6-5l-5-3.6l0.5,3C3.6,4.4,1.1,7.4,1.1,11c0,4.4,2.4,8,7.4,8.3v-2.7
              c-3-0.3-4.7-2.7-4.7-5.6C3.8,8.8,5.5,7,7.3,6z"/>
                  <path d="M21.5,11c0-4.4-4-8-8-8.3v2.7c2,0.3,5.2,2.7,5.2,5.6c0,2.2-1.2,4-3,5l-0.4-2.8l-3.6,5l5,3.6l-0.6-3
              C19.4,17.6,21.5,14.6,21.5,11z"/>
                </svg>

                <svg id="playlist_btn" viewBox="0 0 23 23">
                  <rect x="1.5" y="2" width="20" height="3"/>
                  <rect x="1.5" y="9" width="20" height="3"/>
                  <rect x="1.5" y="17" width="20" height="3"/>
                </svg>

              </div>
            </div>

          </div>
          <!--Music Player-->
          <div class="row">
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <a href="#">Thêm vào </a> </span></h5>
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> 
            <? echo '<a href="download.php?music='.$_GET['music_link'].'">';?>
            Tải về </a> </span></h5>
            <h5 style="color: blue"><span class="col-md-2"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> <a href="#">Chia sẻ </a> </span></h5>
          </div>

          <!--Lyric-->
          <div class="panel panel-default">
            <div class="panel-body">
              <?php
              error_reporting(E_ALL ^ E_WARNING); 
              $txtname = str_replace("mp3","txt",$_GET["music_link"]);
              $myfile = fopen('lyric/'.$txtname, "r");
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
            <li class="list-group-item"> <a href="#">1. Sau tất cả - ERIK ST.319</a> </li>
            <li class="list-group-item"> <a href="#">2. Nếu Em Còn Tồn Tại - Trịnh Đình Quang</a> </li>
            <li class="list-group-item"> <a href="#">3. Tâm Sự Với Người Lạ - Tiên Cookie</a> </li>
            <li class="list-group-item"> <a href="#">4. Khi Người Mình Yêu Khóc - Phan Mạnh Quỳnh</a> </li>
            <li class="list-group-item"> <a href="#">5. Tình Yêu Chắp Vá - Mr. Siro</a> </li>
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
      

        var audio = document.getElementById('audio');

        // html5 function - toggle play/pause btn and audio

        $("#plays_btn").click(function() {

            if (audio.paused == false) {
                audio.pause();
                $("#play_btn").show();
                $("#pause_btn").hide();
            } else {
                audio.play();
                $("#play_btn").hide();
                $("#pause_btn").show();
            }
        });


        // function for timeline

        audio.addEventListener("timeupdate", function() {
            var currentTime = audio.currentTime,
                duration = audio.duration,
                currentTimeMs = audio.currentTime * 1000;
            $('.progressbar_range').stop(true, true).animate({'width': (currentTime + .25) / duration * 100 + '%'}, 250, 'linear');
        });


        // count function for timeleft

        audio.addEventListener("timeupdate", function() {
            var timeleft = document.getElementById('timeleft'),
                duration = parseInt( audio.duration ),
                currentTime = parseInt( audio.currentTime ),
                timeLeft = duration - currentTime,
                s, m;
            
            s = timeLeft % 60;
            m = Math.floor( timeLeft / 60 ) % 60;
            
            s = s < 10 ? "0"+s : s;
            m = m < 10 ? "0"+m : m;
            
            $('#timeleft').text("-"+m+":"+s);
            
        });
    </script></body>
  </html>