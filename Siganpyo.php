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
            
#back {background-color:rgb(0, 0, 0); 
               padding:15px; 
               border:1px solid black; 
               top: 310px;
               left: 0px;
               position: relative;
               z-index: 10;
               margin: 0 auto;
               width: 1050px;
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
              color: bisque;
              border:1px solid wheat;
              text-align: left;
            }
            p{line-height:25px;}
            #col{color:azure;}
            #colf{color:blue;}

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


<div id="listf" style="text-align: center;">
    <h2 id="colf">강의 시간표</h2>
    <div class="tabel">
        
        <table border="2" style="width: 80%; margin: 0 auto;">
        
            <tr class="tabel">
                <th style="width: 10%;"><b> 강의 번호 </b></th>
                <th style="width: 15%;"><b>교수 이름</b></th>
                <th style="width: 20%;"><b>강의명</b></th>
                <th style="width: 15%;"><b>학과</b></th>
                <th style="width: 20%;"><b>강의 시간</b></th>
            </tr>
            
            <?php
            $sqlA = "select * from lecture_tbl"; // 테이블 안에 있는거 전부다  $sqlA넣기
            $result = mysqli_query($connect, $sqlA);
            $count = mysqli_num_fields($result); // $sqlA 테이블 안에 있는 개수  $count에다 넣기
            


                    while ($rows = mysqli_fetch_row($result)) {
                        echo "<tr class='tabel'>";
                        for ($a = 0; $a < $count; $a++) {
                            echo "<td><b>$rows[$a]</b></td>";
                        }
                        echo "</tr>";
                    } // $rows[0] = 강의 넘버를 applied_lecture_no / $rows[4]의 강의 시간을 applied_lecture_time로 명명
                    
                    
                    ?>
                
                </table>        
    </div>
</div>

    

<?php
        mysqli_close($connect);
    ?>



    </div>
  </section>


    </body>

</html>