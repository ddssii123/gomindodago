<?php
session_start();
$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $user_id = $_SESSION['user_id'];
    $message = $user_id . ' 님, 로그인 했습니다.';
}
else {
    $message = '로그인이 실패했습니다.';
}

?>
<head>
  <title>You not Lonely</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel= "stylesheet" type="text/css" href="C:\Users\User\Desktop\YNL\bootstrap\join.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="C:\Users\User\Desktop\YNL\bootstrap\main.html">Y N L</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="C:\Users\User\Desktop\YNL\bootstrap\main.html">홈</a></li>
            <li><a href="C:\Users\User\Desktop\YNL\bootstrap\inquiry\inquiry.html">문의</a></li>
            <li><a href="C:\Users\User\Desktop\YNL\bootstrap\list\list.html">상담중인 목록</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="C:\Users\User\Desktop\YNL\bootstrap\main.html">회원 정보</a></li>
            <li><a href="C:\Users\User\Desktop\YNL\bootstrap\join\join.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">
      <hr class="prettyline">
      <br>
      <center>
      <h1><b>안녕하세요</b></h1>
      <h3>바쁘신 시간을 투자하여 YNL에 들려 주신 분들께 감사합니다.</h3>
      <em>아래의 로그인 / 회원가입을 통하여 서비스를 이용해주세요.</em>
      <br>
    <button class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Sign In/Register</button>
    </center>
    <br>
      <hr class="prettyline">
   </div>


   <!-- Modal -->
   <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm">
       <div class="modal-content">
           <br>
           <div class="bs-example bs-example-tabs">
               <ul id="myTab" class="nav nav-tabs">
                 <li class="active"><a href="#signin" data-toggle="tab">로그인</a></li>
                 <li class=""><a href="#signup" data-toggle="tab">회원가입</a></li>
               </ul>
           </div>
         <div class="modal-body">
           <div id="myTabContent" class="tab-content">
           <div class="tab-pane fade in" id="필수체크">
           <p>회원 가입시에만 이용하는 Form입니다</p>               <!--여기서 확인 한번-->
           </div>
           <div class="tab-pane fade active in" id="signin">
               <form class="form-horizontal" method="get" action="C:\Users\User\Desktop\YNL\bootstrap\login_check.php">
               <!-- Sign In Form -->
               <!-- Text input-->
               <div class="control-group">
                 <label class="control-label" for="userid">아이디</label>
                 <div class="controls">
                   <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="Your ID" class="input-medium" required="">
                 </div>
               </div>

               <!-- Password input-->
               <div class="control-group">
                 <label class="control-label" for="pwd">비밀번호</label>
                 <div class="controls">
                   <input required="" id="pwd" name="pwd" class="form-control" type="password" placeholder="********" class="input-medium">
                 </div>
               </div>


               <!-- Button -->
               <div class="control-group">
                 <label class="control-label" for="signin"></label>
                 <div class="controls">
                   <button id="signin" class="btn btn-success">Sign In</button>
                 </div>
               </div>

               </form>
           </div>

           <div class="tab-pane fade" id="signup">
               <form class="form-horizontal">
               <fieldset>
               <!-- Sign Up Form -->
               <!-- Text input-->
               <div class="control-group">
                 <label class="control-label" for="Email">Phone Number</label>
                 <div class="controls">
                   <input id="Email" name="Email" class="form-control" type="text" placeholder="010-0000-0000" class="input-large" required="">
                 </div>
               </div>

               <!-- Text input-->
               <div class="control-group">
                 <label class="control-label" for="userid">아이디</label>
                 <div class="controls">
                   <input id="userid" name="userid" class="form-control" type="text" placeholder="Your ID" class="input-large" required="">
                 </div>
               </div>

               <!-- Password input-->
               <div class="control-group">
                 <label class="control-label" for="password">비밀번호</label>
                 <div class="controls">
                   <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                   <em>1-8 Characters</em>
                 </div>
               </div>

               <!-- Text input-->
               <div class="control-group">
                 <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                 <div class="controls">
                   <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
                 </div>
               </div>

               <!-- Multiple Radios (inline) -->


               <!-- Button -->
               <div class="control-group">
                 <label class="control-label" for="confirmsignup"></label>
                 <div class="controls">
                   <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
                 </div>
               </div>
               </fieldset>
               </form>

         </div>
       </div>
         </div>
         <div class="modal-footer">
         <center>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </center>
         </div>
       </div>
     </div>
   </div>



  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    <a href="#"><i class="fa fa-facebook-official"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-flickr"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <p class="w3-medium">
      © 2018 All Rights Reserved. You Not Lonely Sw Team | 서비스 약관 | 개인정보 보호 | 결제 이용 약관 | 도움말 | 광고 문의 | 대회 개최 문의 | 업데이트 노트
    </p>
    <p class="w3-medium">
      대회 등록 번호: xxx - xxx - xxx
    </p>
    <p class="w3-medium">
      대표자명: You not Lonely Develop Team
    </p>
    <p class="w3-medium">
      주소: 서울시 동작구 상도동 상도로 369 숭실대학교
    </p>
  </footer>

</body>

</html>
