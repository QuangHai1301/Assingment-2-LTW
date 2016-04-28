<?php
error_reporting(E_ALL ^ E_DEPRECATED);
        if (isset($_REQUEST['ok'])) {
 
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            
            mysql_query("SET NAMES 'UTF8'");
            $query = "select * from music where music_name like '%$search%'";
 
            // Kết nối sql
            mysql_connect("localhost", "root", "") or die("");
            // Chọn database
            $bienketnoi = mysql_connect("localhost", "root", "");
            mysql_set_charset('utf8',$bienketnoi);
            mysql_select_db("assignment2");
 
            // Thực thi câu truy vấn
            $sql = mysql_query($query);
            // Đếm số đong trả về trong sql.
            $num = mysql_num_rows($sql);
            $i=0;
            // Nếu $search rỗng thì báo lỗi tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                header("location:index.php");
                //echo "Yêu cầu nhập dữ liệu vào ô trống";
            } else {
                // Ngược lại nếu người dùng nhập liệu thì tiến hành xứ lý show dữ liệu.
                // Nếu $num > 0 hoặc $search khác rỗng tức là có dữ liệu mối show ra nhé, ngược lại thì báo lỗi.
                if ($num > 0 && $search != "") {
                    // Dùng $num để đếm số dòng trả về.
                    //echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($row = mysql_fetch_assoc($sql)) {
                        mysql_query("SET NAMES 'UTF8'");
                        $tenbaihat[$i] = $row['music_name'];
                        $casi[$i] = $row['music_singer'];
                        $link[$i] = $row['music_link'];
                        $i++;
 
                        //echo "<br /><h3>Ten bai hat: $tenbaihat </h3><br />Ca si: $casi</br />";
                    }
                } else {
                    $num=0;
                    //echo "Khong tim thay ket qua!";
                }
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Tim kiem</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Album</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="demo.css">
  <link href="css/starter-template.css" rel="stylesheet">
  <link href="css/list.css" rel="stylesheet"></head>
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
        <div class="col-md-7">


          <!--Music Player-->
          <audio id="audio">
            
            <source src="#"></audio>

          
          <!--Music Player-->

  <div class="track-list music">
    <div class="track-list-header">
    
    </div>
    <h3>
    <?php
      echo $num." kết quả trả về với từ khóa <b>$search</b>";
     ?>
     </h3>
    <div class="row">
    <ul class="discover-list">
      <?php 
              while($i >0) {
       echo '<li style="border-bottom: 1px solid #2e353a;">
     
     
        <a href="#">
          
          <div class="sect-one">
            <span class="artist">';
                echo $tenbaihat[$i-1]; 
        echo  '</span>
            <span class="title">';
              echo $casi[$i-1];
        echo   '</span>
          </div>
          <div class="sect-two">
            <span class="date">26/12/2015</span>
            <span class="genre">Nhạc trẻ</span>
          </div>
        </a>
        
      </li>';
      $i--;
    }
    
    ?>

      

    </ul>

    </div>
  </div> 

         <!--Lyric-->
          

        </div>

        <!--Right Content -->
        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">Bài hát cùng ca sỹ</div>
          </div>
          <div class="media">
            <div class="media-left"><a href="#"><img src="images/ERIKST.jpg" alt="#"></a></div>
            <div class="media-body"><a href="#">1. Sau tất cả - ERIK ST.319</a></div>
          </div>
          <div class="media">
            <div class="media-left"><a href="#"><img src="images/TDQ.jpg" alt="#"></a></div>
            <div class="media-body"><a href="#">2. Nếu Em Còn Tồn Tại - Trịnh Đình Quang</a></div>
          </div>
          <div class="media">
            <div class="media-left"><a href="#"><img src="images/tiencookie.jpg" alt="#"></a></div>
            <div class="media-body"><a href="#">3. Tâm Sự Với Người Lạ - Tiên Cookie</a></div>
          </div>
          <div class="media">
            <div class="media-left"><a href="#"><img src="images/PMQ.jpg" alt="#"></a></div>
            <div class="media-body"><a href="#">4. Khi Người Mình Yêu Khóc - Phan Mạnh Quỳnh</a></div>
          </div>
          <div class="media">
            <div class="media-left"><a href="#"><img src="images/siro.jpg" alt="#"></a></div>
            <div class="media-body"><a href="#">5. Tình Yêu Chắp Vá - Mr. Siro</a></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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