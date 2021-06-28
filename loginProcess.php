<?php
    $id= $_GET['id'];
    $pw= $_GET['pw'];
 
    // 아이디와 비밀번호 입력 여부 확인
    if(!$id){
        echo "
        <script>
            alert('아이디를 입력하세요.');
            history.back();
        </script>
        ";
         exit;
    }
    if(!$pw){
        echo "
        <script>
            alert('비밀번호를 입력하세요.');
            history.back();
        </script>
        ";
         exit;
    }

    // 아이디와 비밀번호가 모두 전달된 경우(exit되지 않은 경우) DB에 접속해서 일치하는지 체크
    $con = mysqli_connect( 'localhost', 'root', '111111', 'practice' );
 
    // 쿼리문: members 테이블에서 열 이름 ID와 PW가 각각 사용자가 입력한 아이디와 비밀번호와 일치하는 행을 select한다.
    $sql= "SELECT * FROM members WHERE ID='$id' and PW='$pw'";
    $result= mysqli_query($con,$sql);
    // 결과표로부터 레코드 수 얻어오기
    $rowNum= mysqli_num_rows($result);
 
    // $rowNum이 0이면 아이디와 패스워드가 맞지 않는 것
    if(!$rowNum){
        echo "
        <script>
            alert('아이디와 비밀번호를 확인하세요.');
            history.back();
        </script>
        ";
        exit;
    }

    $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
 
    // 세션에 저장
    session_start();
    $_SESSION['userid']=$row['ID'];
    $_SESSION['userpw']=$row['PW'];
    $_SESSION['username']=$row['Name'];
    $_SESSION['usernumber']=$row['Number'];
    $_SESSION['useremail']=$row['Email'];
    $_SESSION['useraddress']=$row['Address'];
 
    echo "
        <script>
            alert('로그인 성공.');
            history.back();
        </script>
    ";
?>


