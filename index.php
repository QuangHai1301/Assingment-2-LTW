<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['un-session']))
    {
        session_unset("name");
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trang chủ</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/starter-template.css" rel="stylesheet"></head>

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
      <a class="navbar-brand" href="#">MUSIC</a>
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
            <a href="news/news.html">Tin Tức</a>
          </li>
          <li>
            <a href="#contact">Liên Hệ</a>
          </li>
          <li></ul>
          <div class="nav navbar-nav navbar-right">
            <div class="btn-group">
              
                <?php
                  if (isset($_SESSION['name']))
                        {
                            echo '<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['name'].'<span class="caret"></span>'.'</button>';
                        }
                ?>
                
              
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Playlist của tôi</a>
                </li>
                <li>
                  <a href="upload/upload.html">Upload nhạc mới</a>
                </li>
                <li>
                  <a href="#">Thay đổi thông tin</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="logout.php">Đăng xuất</a>
                </li>
              </ul>
            </div>
            <?php
                  if (!isset($_SESSION['name']))
                        {
                        echo '<a class="btn btn-success btn-sm navbar-btn" href="login/login.php">Đăng nhập</a> ';
                        echo '<a class="btn btn-primary btn-sm navbar-btn" href="register/register.html">Đăng ký</a>';
                      }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!--Container-->
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <!--carousel-->
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/cover3.jpg" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>ÂM NHẠC THƯ GIÃN</h1>
                    <p>
                      Cùng thư giãn với những album tuyển tập được Zing Mp3 biên tập cho ngày làm việc - học tập của bạn thêm phần nhẹ nhàng và góp phần giải tỏa những căng thẳng mệt mỏi cho bạn.
                    </p>
                    <p>
                      <a class="btn btn-large btn-primary" href="#">Xem chi tiết</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="images/cover4.jpg"  alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>COFFEE SHOP</h1>
                    <p>
                      Hãy để những bài hát trong chủ đề Coffee Shop cùng bạn bên ly cafe sẽ giúp bạn có những phút giây thư giãn tốt nhất. Chọn cho mình một playlist phù hợp nhất khi đang thưởng thức ly cafe nhé !
                    </p>
                    <p>
                      <a class="btn btn-large btn-primary" href="#">Xem chi tiết</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="images/cover5.jpg"  alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>HÒA ÂM ÁNH SÁNG 2016</h1>
                    <p>
                      The Remix là chương trình được mua bản quyền của Global Agency Thổ Nhĩ Kì và đã đến Việt Nam với tên gọi Hòa âm và ánh sáng. Tham gia chương trình Hòa âm và ánh sáng không chỉ là cá nhân một ca sĩ mà còn là sự phối hợp với một nhà sản xuất âm nhạc và một DJ. Họ sẽ kết hợp với nhau thành một nhóm để cùng nhau thi đấu với nhóm khác qua mỗi đêm thi.
                    </p>
                    <p>
                      <a class="btn btn-large btn-primary" href="#">Xem chi tiết</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
          <!--carousel--> </div>

        <!--Center content -->
        <div class="col-md-8">
          <div class="panel panel-info">
            <div class="panel-heading">
              <a href="#">MV HOT NHẤT</a>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="video.html" class="thumbnail">
                      <img src="images/mv1.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="video.html">See you again</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv2.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Twerk It Like Miley</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv3.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Fancy</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv4.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Timber</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv5.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Me, Myself & I</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv6.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">See You Again</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv7.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Energy Freestyle</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <div class="panel panel-default">
                    <a href="#" class="thumbnail">
                      <img src="images/mv8.jpg" alt="..." onmouseover="hover(this);" onmouseout="unhover(this);" />
                    </a>
                    <div class="panel-footer">
                      <a href="#">Apologize</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!--Right Content -->
        <div class="col-md-4">
          <div class="panel panel-info">

            <div class="panel-heading">
              <a href="#">NHẠC HOT THÁNG 3</a>
            </div>
            <ul class="nav nav-tabs nav-justified">
              <li role="presentation" class="active">
                <a href="#">Việt Nam</a>
              </li>
              <li role="presentation">
                <a href="#">Âu Mỹ</a>
              </li>
              <li role="presentation">
                <a href="#">Hàn Quốc</a>
              </li>
            </ul>
            <ul class="list-group">
            <li class="list-group-item"><a href="Music.html" >1. Found Love In a Graveyard - Veronica Falls</a></li>
            <li class="list-group-item"><a href="#">2. Nếu Em Còn Tồn Tại - Trịnh Đình Quang</a></li>
            <li class="list-group-item"><a href="#">3. Tâm Sự Với Người Lạ - Tiên Cookie</a></li>
            <li class="list-group-item"><a href="#">4. Khi Người Mình Yêu Khóc - Phan Mạnh Quỳnh</a></li>
            <li class="list-group-item"><a href="#">5. Tình Yêu Chắp Vá - Mr. Siro</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-info">
            <div class="panel-heading">
              <a href="#">ALBUM MỚI</a>
              </div>
              <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="images/album1.jpg" alt="...">              
                  <div class="caption">
                    <h3>Sau tất cả <br> <br>  </h3>
                    <p>Sau tất cả mình lại trở về với nhau
                     <br> Tựa như chưa bắt đầu, tựa như ta vừa mới quen
                     <br> Sau tất cả long chẳng hề đổi thay</p>
                    <p>
                      <a href="List.html" class="btn btn-primary" role="button">Nghe album</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="images/album2.jpg" alt="...">              
                  <div class="caption">
                    <h3>Tâm sự với người lạ</h3>
                    <p>Sau tất cả mình lại trở về với nhau
                     <br> Tựa như chưa bắt đầu, tựa như ta vừa mới quen
                     <br> Sau tất cả long chẳng hề đổi thay</p>
                    <p>
                      <a href="List.html" class="btn btn-primary" role="button">Nghe album</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="images/album3.jpg" alt="...">              
                  <div class="caption">
                    <h3>Khi người mình yêu khóc</h3>
                    <p>Sau tất cả mình lại trở về với nhau
                     <br> Tựa như chưa bắt đầu, tựa như ta vừa mới quen
                     <br> Sau tất cả long chẳng hề đổi thay</p>
                    <p>
                      <a href="List.html" class="btn btn-primary" role="button">Nghe album</a>
                    </p>
                  </div>
                </div>
              </div>
              </div>
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
      var x;
      function hover(element) {
        x=element.getAttribute('src');
        element.setAttribute('src', "images/play.png");
      }
      function unhover(element) {
        element.setAttribute('src', x);
      }
    </script>
</body>
  </html>
  