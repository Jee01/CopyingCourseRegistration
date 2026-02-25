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

## 🧰 사용 기술
- PHP
- MySQL
- Apache (XAMPP)
- HTML / CSS

## 📂 구조

- 사용자 인증 및 세션 관리
- 수강 신청 로직 처리
- DB 연동 및 중복 검사 기능
  
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

※ 학습 목적 프로젝트로 보안 요소는 기본 수준으로 구현

**1. 회원가입**
<p>
<img src="https://github.com/user-attachments/assets/52e9d320-101e-4b1d-84ce-fa756f79b386">
</p>

회원 가입 페이지에서 정보 기입 후 student_tbl에 삽입 

**2. 수강신청**
<p>
  <img src="https://github.com/user-attachments/assets/e64e329c-004f-4929-80fd-73240b056e39">
</p>

수강 신청 시 time_tbl에 사용자 학번 기반으로 삽입

**3. 로그인**
<p>
<img src="https://github.com/user-attachments/assets/bad70e63-c352-4faa-8aff-2299cd0edd97">
</p>

수강신청 페이지에서 세션 기반 로그인 구동을 확인

## 🚀 실행 방법

1. XAMPP 설치 후 Apache, MySQL 실행
2. phpMyAdmin에서 데이터베이스 생성
3. 프로젝트에 포함된 .sql 파일 실행하여 테이블 생성
4. connect_db.php에서 DB 정보 수정
5. http://localhost/CopyingCourseRegistration/main.php 접속

## 🔧 개선하고 싶은 점

- UI/UX 개선
- 안정성 고려한 구조 설계
- 재사용성 향상
