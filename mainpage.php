<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="test.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<body>
  <!-- start of myNavbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="mainpage.php">BMStore</a> <!-- here should be the logo of website -->

      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><button class="icon-button" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> ورود</button></li>
        <li><button class="icon-button" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> سبد خرید</button></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">

      </ul> -->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li class="active"> <a href="mainpage.php">خانه</a> </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;محصولات</a>
            <ul class=dropdown-menu>
              <li> <a href="#">میوه</a> </li>
              <li> <a href="#">حبوبات</a> </li>
              <li> <a href="#">سبزیجات</a> </li>
            </ul>
          </li>
          <li > <a href="#">فعالیت ها</a> </li>
          <li > <a href="#">نحوه خرید</a> </li>
          <li > <a href="">تماس با ما</a> </li>
        </ul>
        <!-- <form class="navbar-form navbar-right">
          <div class="form-group">
            <button type="submit" class="btn btn-default">جست و جو</button>
            <input class="form-control" type="text" name="search" placeholder="جست و جو">
          </div>

        </form> -->
        <form class ="navbar-form navbar-left ">
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Search">
             <div class="input-group-btn">
               <button class="btn btn-default" type="submit">
                 <i class="glyphicon glyphicon-search"></i>
               </button>
             </div>
           </div>
        </form>

      </div>
    </div>
    <!-- <nav class="navbar navbar-default navbar-right">
      <div class="container-fluid">
        <ul class="nav navbar-nav ">

        </ul>
      </div>
    </nav> -->
  </nav>
<!-- end of myNavbar -->



<div class="container-fluid">
  <!-- left side bar -->
  <div class="col-md-2"> </div>
  <!-- main content -->
  <div class="col-md-8">
    <div class="row">
      <h3 class="text-center">میوه ها</h3>
      <div class="col-md-3">
        <h4 class="text-center">موز</h4>
        <img src="images/mive/moz.jpg" alt="moz" class="img-thumb" \>
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price" >۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">انبه</h4>
        <img src="images/mive/anbe.png" alt="anbe" class="img-thumb" \>
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">اناناس</h4>
        <img src="images/mive/ananas.jpg" alt="ananas" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">انگور یاقوتی</h4>
        <img src="images/mive/angoor_yaghooti.jpg" alt="angoor_yaghooti" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">انگور عسگری</h4>
        <img src="images/mive/angor_asgari.jpg" alt="anogor_asgari" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">هلو</h4>
        <img src="images/mive/holo.jpg" alt="holo" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">پرتقال</h4>
        <img src="images/mive/porteghal.jpg" alt="porteghal" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">سیب</h4>
        <img src="images/mive/sib.jpeg" alt="sib" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">توت فرنگی</h4>
        <img src="images/mive/tootfarangi.jpg" alt="tootfarangi" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
      <div class="col-md-3">
        <h4 class="text-center">زردآلو</h4>
        <img src="images/mive/zardalo.jpeg" alt="zardalo" class="img-thumb">
        <p class="list-price text-danger">قیمت بازار ۵۰۰۰ تومان</p>
        <p class="price">۲۵۰۰ تومان</p>
        <button type="button " class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" name="button">اطلاعات</button>
      </div>
    </div>
  </div>
  <!-- right side bar -->
  <div class="col-md-2"></div>
</div>
<footer class = "text-center" id="footer">&copy;Copyright 2018-2020 BMStore</footer>

<!-- modal for login  -->
<div class="modal fade bs-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab"> ورود</a></li>
              <li class=""><a href="#signup" data-toggle="tab"> ثبت نام</a></li>

            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid"> نام کاربری</label>
              <div class="controls">
                <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput"> گذر واژه</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="" class="input-medium">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <!-- <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                   <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div> -->
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success"> تایید</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email"> ایمیل:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid"> نام کاربری:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password"> گذرواژه:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="" class="input-large" required="">
                <!-- <em>1-8 Characters</em> -->
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword"> تکرار گذرواژه:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="" class="input-large" required="">
              </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <br>
            <!-- <div class="control-group">
              <label class="control-label" for="humancheck"> Humanity Check:</label>
              <div class="controls">
                <label class="radio inline" for="humancheck-0">
                  <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                <label class="radio inline" for="humancheck-1">
                  <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
              </div>
            </div> -->

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success"> عضویت</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal"> بستن</button>
        </center>
      </div>
    </div>
  </div>
</div>
</body>
</html>
