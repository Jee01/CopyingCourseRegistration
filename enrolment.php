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
        
    <p style="color: rgb(197, 148, 221);">▶ 신청버튼이 클릭이 안될시 제일 위로 드래그 해야 합니다....!!</p>
    <br>
            <tr class="tabel">
                <th style="width: 10%;"><b> 강의 번호 </b></th>
                <th style="width: 15%;"><b>교수 이름</b></th>
                <th style="width: 20%;"><b>강의명</b></th>
                <th style="width: 15%;"><b>학과</b></th>
                <th style="width: 20%;"><b>강의 시간</b></th>
                <th style="width: 10%;"><b>신청 하기</b></th>
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
                        echo "<td>
                                <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                                    <input type='hidden' name='applied_lecture_no' value='$rows[0]'>  
                                    <input type='hidden' name='applied_lecture_time' value='$rows[4]'> 
                                    <input type='submit' name='apply_button' value='신청하기'>
                                </form>
                              </td>";
                        echo "</tr>";
                    } // $rows[0] = 강의 넘버를 applied_lecture_no / $rows[4]의 강의 시간을 applied_lecture_time로 명명
                    $sqlA = "select * from lecture_tbl"; // 테이블 안에 있는거 전부다  $sqlA넣기
                    $result = mysqli_query($connect, $sqlA);
                    $count = mysqli_num_fields($result); // $sqlA 테이블 안에 있는 개수  $count에다 넣기
                    

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['apply_button']) == true) {
                        $applied_lecture_no = $_POST['applied_lecture_no']; // 내가 선택한 강의번호를 변수에다 넣기
                        $applied_lecture_time = $_POST['applied_lecture_time'];  // 
                        $now_id = $_SESSION['ses_userid'];
                            $check_student_no = "select no from student_tbl where userid = '$now_id'";
                            $check_student_no_result = mysqli_query($connect, $check_student_no);
                            $no_row = mysqli_fetch_row($check_student_no_result);
                            $no = $no_row[0];
                    
                        
                        $check_no_query = "SELECT lecture_tbl.lecture_no 
                        FROM lecture_tbl
                        INNER JOIN time_tbl ON lecture_tbl.lecture_no = time_tbl.lecture_no 
                        WHERE lecture_tbl.lecture_no = $applied_lecture_no and no = '$no'";    //강의 중복 걸러주는거
                        
                        $check_no_result = mysqli_query($connect, $check_no_query); // 신청한 강의의 번호인$applied_lecture_no와 조인검색 ㄱㄱ
                        
                        $check_no_query_time = "SELECT lecture_tbl.lecture_time  
                        FROM lecture_tbl
                        INNER JOIN time_tbl ON lecture_tbl.lecture_no = time_tbl.lecture_no
                        WHERE time_tbl.lecture_time = '$applied_lecture_time'and no = '$no'";

                        $check_no_result_time = mysqli_query($connect, $check_no_query_time); // 신청한 강의의 시간을$applied_lecture_time와 조인검색 ㄱㄱ
                        
                        $is_already_applied_time = mysqli_num_rows($check_no_result_time) > 0; // 강의 시간
                        $is_already_applied = mysqli_num_rows($check_no_result) > 0;  // 강의 번호

                        if ($is_already_applied) {
                            
                            echo "<script>alert('이미 신청된 강의가 있습니다.');</script>";
                        }    
                        else if ($is_already_applied_time) {
                            
                            echo "<script>alert('이미 신청된 강의와 시간이 겹칩니다.');</script>";
                        } else {
                
                            // 강의 번호가 중복되지 않은 경우에만 강의를 신청
                            $insert_time_tbl = "INSERT INTO time_tbl (no, lecture_no, lecture_time) 
                                                VALUES ('$no', '$applied_lecture_no', '$applied_lecture_time')";
                            mysqli_query($connect, $insert_time_tbl);
                    
                            echo "<script>alert('강의 신청이 완료되었습니다.');</script>";
                        }
                    }
                    
                    ?>
                
                </table>
        <br>
        
    </div>
</div>

    
<div id="back" style="text-align: center;">
    <h2 id="colf">수강신청 내역</h2>

    <div class="tabel">
    <p style="color: rgb(197, 148, 221);">▶ 수강 취소는 더블클릭 해야 합니다....!!</p>
        <br>
        <table border="2" style="width: 80%; margin: 0 auto;">
            <tr class="tabel">
            <th style="width: 10%;"><b> 순번 </b></th>
            <th style="width: 10%;"><b> 강의 번호 </b></th>
                <th style="width: 15%;"><b>교수 이름</b></th>
                <th style="width: 20%;"><b>강의명</b></th>
                <th style="width: 15%;"><b>학과</b></th>
                <th style="width: 20%;"><b>강의 시간</b></th>
                <th style="width: 10%;"><b>신청 취소</b></th>
            </tr>

            <?php
            $count = 1;
            
            $now_id = $_SESSION['ses_userid'];
            $check_student_no = "select no from student_tbl where userid = '$now_id'";
            $check_student_no_result = mysqli_query($connect, $check_student_no);
            $no_row = mysqli_fetch_row($check_student_no_result);
            $no = $no_row[0];

            $sql_lt = "SELECT * FROM  time_tbl INNER JOIN lecture_tbl ON time_tbl.lecture_no = lecture_tbl.lecture_no WHERE no = '$no'"; // 조인검색하여 동일한것만  $sql_lt넣기
            $result_lt = mysqli_query($connect, $sql_lt);
            while ($row = mysqli_fetch_assoc($result_lt)) {  // 각 행의 데이터에 접근
                $id = $row['lecture_no'];  // 값을 전부 변수에다 넣고 출력
                $professor = $row['professor'];
                $lectureName = $row['lecture_name'];
                $department = $row['type'];
                $lectureTime = $row['lecture_time'];
                echo "<tr class='tabel'>";
                echo "<td>$count</td>";
                echo "<td>$id</td>";
                echo "<td>$professor</td>";
                echo "<td>$lectureName</td>";
                echo "<td>$department</td>";
                echo "<td>$lectureTime</td>";
                echo "<td>
                        <form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
                            <input type='hidden' name='cancel_lecture_no' value='$id'>
                            <input type='submit' name='cancel_button' value='신청 취소'>
                        </form>
                      </td>";
                echo "</tr>";
                $count++;
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel_button']) == true) {
                $cancel_lecture_no = $_POST['cancel_lecture_no']; // 취소번튼 누른거 전달


                $delete_query = "DELETE FROM time_tbl WHERE lecture_no = '$cancel_lecture_no'"; // 타임 테이블에서 삭제
      
                $result_delete = mysqli_query($connect, $delete_query); // mysql에 넣기

            }

            
            ?>

        </table>
        <br>
    </div>
</div>





    </div>
  </section>


    </body>

</html>

<?php
        mysqli_close($connect);
    ?>