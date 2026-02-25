<?php 
include "../5team/session.php"; // Call session declaration file
?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEU 수강 신청 사이트</title>
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
            .custom-button {
        background-color: #4CAF50; /* 버튼의 배경색을 변경할 수 있습니다. 여기서는 초록색 예시 */
        color: white; /* 버튼의 텍스트 색상을 변경할 수 있습니다. 여기서는 흰색 예시 */
        padding: 15px 20px; /* 버튼의 안쪽 여백을 조절하여 크기를 변경할 수 있습니다. */
        font-size: 16px; /* 버튼의 글꼴 크기를 변경할 수 있습니다. */
        border: none; /* 버튼의 테두리를 없애고 싶다면 이 옵션을 사용합니다. */
        cursor: pointer; /* 마우스 커서를 손가락 형태로 변경합니다. */
        width: 1000px;
        transition: background-color 0.3s; /* 배경색이 바뀔 때 부드럽게 전환되도록 설정 */
    }
    .custom-button:hover {
    background-color: #45a049; /* 마우스 호버 시의 배경색 */
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
                font-size: 23px;
                float:right;
                z-index: 700;
                margin-top: 165px;
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
            
#back { 
               padding:15px; 
               border:1px solid black; 
               top: 310px;
               left: 0px;
               position: relative;
               z-index: 10;
               margin: 0 auto;
               width: 1050px;
               font-size: 30px;
            }    

#game {background-color:rgb(0, 0, 0); 
               padding:15px; 
               margin:35px auto; 
               border:1px solid black; 
               top: 360px;
               left: 0px;
               position: relative;
               z-index: 10;
               margin: 10 auto;
               width: 1050px;
            }      
            #mini-screen {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            z-index: 1000;
        }
            #listf {background-color:rgb(0, 0, 0); 
               padding:15px;
               margin:0 auto; 
               border:1px solid black; 
               top: 260px;
               left: 0px;
               position: relative;
               z-index: 10;
               margin: 0 auto;
               width: 1050px;
            }    
                
            .tabel{
              color: black;
              text-align: center;
            }
            p{line-height:25px;}
            #col{color:azure;}
            #colf{color:grey;
            font-size:50;}

            .lisub li{list-style:none}
            .asub a{text-decoration:none;font-size:18px}
            .menu {
                width: 100%; height: 210px; margin: 0 auto; line-height: 210px; 
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
                height: 140px; 
                transition-duration: 1s; 
                

              }

 
</style>
<script src="script.js" defer></script>
    </head>
    <body>
            <h1 id="one"  style="font-size: 65px" >
                DEU 수강 신청 사이트
                
            </h1>
            <h2 id="name">
                5 Team
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
            <button onclick="showMiniScreen()">클릭하여 미니 화면 표시</button>
            <div id="mini-screen">
        <!-- 미니 화면의 내용을 원하는 내용으로 추가 -->
        <p>미니 화면의 내용입니다.</p>
        <button onclick="hideMiniScreen()">닫기</button>
    </div>
            <?php
$host = "localhost";
$user = "root";
$passwd = "";
$connect = mysqli_connect($host, $user, $passwd) or die("접속에러");
$db = mysqli_select_db($connect, '5team_db');

mysqli_query($connect, "set session character_set_connection=utf8;");
mysqli_query($connect, "set session character_set_results=utf8;");
mysqli_query($connect, "set session character_set_client=utf8;");



?>
<script>
    function showMessage(buttonNumber) {
        if (buttonNumber == 1) {
            alert('· 페이지의 버튼을 클릭하여 각 페이지로 이동할 수 있습니다.\n· 페이지에 대한 설명은 아래의 공지사항들을 통해 알 수 있습니다.');
        } else if (buttonNumber == 2) {
            alert('· 강의시간표에서는 본인이    들을 수 있는 강의가 무엇이 있는지 알 수 있습니다.');
        } else if (buttonNumber == 3) {
            alert('· 수강신청에서는 수강 신청 및 수강 취소가 가능합니다.');
        } else if (buttonNumber == 4) {
            alert('· 수강확정에서는 자신이 수강신청한 수업을 확인할 수 있습니다.');
        } else if (buttonNumber == 5) {
            alert('· 로그인 페이지를 통해서 로그인을 할 수 있습니다.\n· 만약 아이디가 없으면 회원가입을 통해 아이디를 만들어 주세요.');
        } else if (buttonNumber == 6) {
            alert('20203190 제경민\n20203182 이정호\n20223400 박무성\n20223402 이지홍');
        }
    }
</script>

<div id='back' style='text-align: center;'>
    <h2 id='colf'>공지사항</h2><hr>
    <div class='tabel'>
    <button class="custom-button" onclick="showMessage(1)">기본 사용법</button></p>
    <button class="custom-button" onclick="showMessage(2)">강의 시간표</button></p>
    <button class="custom-button" onclick="showMessage(3)">수강신청</button></p>
    <button class="custom-button" onclick="showMessage(4)">수강확정</button></p>
    <button class="custom-button" onclick="showMessage(5)">로그인</button></p>
    <button class="custom-button" onclick="showMessage(6)">제작자</button></p>
    </div>
</div>";
    </body>

</html>