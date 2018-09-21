 <?php
session_start();
  include "connection.php";
  $chapterid = mysqli_real_escape_string($conn,$_POST['chapterid']);
  $quiz = mysqli_real_escape_string($conn,$_POST['quiz']);
  $choice1 = mysqli_real_escape_string($conn,$_POST['choice1']);
  $choice2 = mysqli_real_escape_string($conn,$_POST['choice2']);
  $choice3 = mysqli_real_escape_string($conn,$_POST['choice3']);
  $choice4 = mysqli_real_escape_string($conn,$_POST['choice4']);
  $answer = mysqli_real_escape_string($conn,$_POST['answer']);
  $mark = mysqli_real_escape_string($conn,$_POST['mark']);

  
  $sql="INSERT INTO quiz (chapterID, question, choice1, choice2,choice3,choice4,answer,mark) values ('$chapterid','$quiz','$choice1','$choice2','$choice3','$choice4','$answer','$mark');";
mysqli_query($conn, $sql); // to execute the sql query
    
      if(mysqli_affected_rows($conn)<=0)
        {
          echo ("<script>alert('Insert question Have Problem,please check properly with the data');</script>");
        }
        
      echo ("<script>alert('Question data insert Successfully !');</script>");
      echo ("<script>window.location.href='ad-sub.php'</script>");
?>