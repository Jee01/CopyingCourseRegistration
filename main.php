<?php
include "../5team/session.php"; // Call session declaration file


?>

<html>

    <head>
      <meta charset="utf-8">
        <title>
            수강신청 사이트
        </title>
        <style>
          *{padding:0;margin:0}
          body{
                background-color: rgb(255,255,255);
                background-image: url('Wallpapers/bye2.jpg'), url('Wallpapers/bye2.jpg');
                top: 500px;
                background-size:  100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: 0px 20%;
                

            }

            h1 {
                color:blue;

                text-align: center;
            }
                        
            h2{
                font-size: 35px;
            }
            h3{
                font-size: 25px;
            }

        </style>
        <style>
          .slider-container {
              position: relative;
              overflow: hidden;
              width: 650px; 
              height: 300px; 
          }
  
          .slider-container .slides-container {
              display: flex;
              transition: transform 0.5s ease;
          }
  
          .slider-container .slide {
              flex: 0 0 500px; 
              height: 300px; 
          }
      </style>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script>
          $(document).ready(function() {
              var currentSlide = 0;
              var slideCount = $(".slide").length;
              var slideWidth = $(".slide").outerWidth();
  
              $(".slides-container").css("width", slideCount * slideWidth);
  
              function goToSlide(index) {
                  if (index < 0 || index >= slideCount) return;
  
                  currentSlide = index;
                  var translateX = -currentSlide * slideWidth;
                  $(".slides-container").css("transform", "translateX(" + translateX + "px)");
              }
  
              $("#left-button").click(function() {
                  goToSlide(currentSlide - 1);
              });
  
              $("#right-button").click(function() {
                  goToSlide(currentSlide + 1);
              });
          });
      </script>


      <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

       <script>
        // 이벤트를 연결합니다.
        $(document).ready(function () {
            // 이벤트를 연결합니다.
            $('.eve').hover(function () {
                // 색상을 변경합니다.
                $(this).css({
                    color: 'rgb(66, 66, 66)'
                });
            }, function () {
                // 색상을 제거합니다.
                $(this).css({
                    background: '',
                    color: ''
                });
            });
        });


    </script>


        <style>
          .move{
                       padding:15px;
                       top: 200px;
                       left: 0px;
                       position: relative;
                       z-index: 10;
                       margin: 0 auto;
                       width: 1050px;
          }

          #one {background-color:rgb(255, 255, 255); 
               width:100%;

               padding:15px;
               margin:0 auto; 
               border:1px solid rgba(0, 0, 0, 0); 
               top: 0;
               left: 0px;

              z-index: 60;
              position: fixed;
            }        
                    
            #name{
                color:rgb(0, 0, 0);
                font-size: 50px;
                float:center;
                z-index: 700;
                margin-top: 165px;
                margin-left : 700px;
            }
            #login{
                color:rgb(0, 0, 0);
                font-size: 23px;
                float:right;
                z-index: 700;
                margin-top: 165px;
            }
            #ida {background-color:rgb(255, 255, 255); 
                     
                       padding:15px; 
                      
                       border:1px solid black; 
                       top: 290px;
                       left: 0px;
                       position: relative;
                       z-index: 10;
                       margin: 0 auto;
                       width: 1050px;
            }
                    
            .game {background-color:rgb(255, 255, 255); 
              
               padding:15px; 
              
               border:1px solid black; 
               top: 230px;
               left: 0px;
               position: relative;
               z-index: 10;
               margin: 0 auto;
               width: 1050px;
            }        

            .slidesff {
              background-color:rgb(255, 255, 255);
               padding: 15px; 
               top: 250px;
               position: relative;
               z-index: 10;
               margin: 0 auto;
               width: 1050px;

            }

            
            #listf {background-color:rgba(255, 255, 255, 0); 
                      
                       padding:15px; 
                       margin:0 auto; 

                       top: 400px;
                       right: 100px;
                       z-index: 10;
                       position: fixed;
                       width: 1550px;
            }
            p{line-height:25px;}
            #col{color:azure;}
            #colf{color:blue;}

            .lisub li{list-style:none}
            .asub a{text-decoration:none;font-size:18px}
            .menu {
                width: 100%; height: 300px; margin: 0 auto; line-height: 300px; 
                overflow: hidden;
                margin: 10px auto;
                position: fixed;
                z-index: 50;
                top: 110px;

            }
            .menu > li {
                width: 20%; 
                float: left;
                text-align: center;
                line-height: 40px;
                background-color: rgb(0, 100, 255);
            }
            .menu a {
                color: #fff;
            }
            
            .menu > li:hover {
                background-color: rgb(0, 0, 255);
                transition-duration: 0.5s;
            }
            .submenu > li {
                line-height: 50px;
                background-color: rgb(0, 0, 120);
            }
            .submenu {
                height: 0; 
                overflow: hidden;
            }

            .menu > li:hover .submenu {
                height: 230px; 
                transition-duration: 1s; 
                

              }


</style>

    </head>
    <body>
            <h1 id="no"  style="font-size: 65px" >
                DEU 수강 신청 사이트
                
            </h1>
            <h2 id="name">
                <?php
            if(isset($_SESSION['ses_userid']) && isset($_SESSION['ses_passwd'])){
                 echo "환영합니다 ".$_SESSION['ses_userid'] ."님";
        }
        else{
            echo "로그인하지 않았습니다.";
        }
        ?>
            </h2>
            <div class="lisub asub">
            <ul class="menu">
                <li>
                <a href="Notice.php">공지사항</a>
                </li>
                <li>
                <a href="Siganpyo.php">강의 시간표</a>
                </li>
                <li>
                <a href="enrolment.php">수강신청</a>
                </li>
                <li>
                <a href="main.php">메인메뉴</a>
                </li>
                <li>
                <a>▽로그인</a>
                <ul class="submenu">
                    <br>
                    <li><a class="eve" href="login.php">로그인</a></li>
                    <li><a class="eve" href="add_form.php">회원가입</a></li>
                    <li><a class="eve" href="logout.php">로그아웃</a></li>
                </ul>
                </li>
            </ul>

    </body>

</html>
<?php
        mysqli_close($connect);
    ?>