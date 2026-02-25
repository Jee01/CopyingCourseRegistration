# Copying a course registration site
웹프로그래밍 수강을 통해 습득한 php, sql을 활용한 수강신청 사이트를 모방하여 구동.
## 💭 intro
**DATE : 2023.12.01 ~ 2023.12.22**

**배경** : 함께 수업을 수강한 팀원들과 상의 후 로그인 및 세션 기능이 필요하며 DB를 가장 잘 활용하고 대학생에게 친숙한 구조를 가지고 있는 웹 사이트 중 수강신청 사이트를 제작하는 것으로 결정.

**담당 역할** 
- 사용자 인증 시스템 구축

- PHP 세션 기반 로그인 유지 기능 구현

- MySQL 데이터베이스 설계 및 연동

- 회원 정보 관리 로직 구현
  
## 🛠 기능 구현
| .php | 역할 | .php | 역할 |
|-------|-------|-------|-------|
|add_form|회원가입 양식|login|로그인 양식|
|add_db|회원가입 DB 입력|logout|세션 해제|
|connect_db|DB와 연결|main|메인 페이지|
|enrolment|수강 신청 페이지|Notice|공지사항|
|id_chk|아이디 중복 체크|session|세션 연결|
|no_chk|학번 중복 체크|Siganpyo|강의 시간표|

 **student_tbl**
|no|userid|name|type|passwd|
|-------|-------|-------|-------|-------|
|학번|아이디|이름|학과|비밀번호|

 **lecture**
|lecture_no|professor|lecture_name|type|lecture_time|
|-------|-------|-------|-------|-------|
|강의번호|교수명|강의명|학과|강의시간|

 **time_tbl**
|no|lecture_no|lecture_time|
|-------|-------|-------|
|학번|강의번호|강의시간|

1. 회원가입


2. 수강신청

3. 로그인
