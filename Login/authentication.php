<?php

     include 'connection.php';
     if(isset($_POST['submit']))
     {
         $nm=$_POST['username'];
       
        $pass=$_POST['password'];
        
        if( isset($nm) && isset($pass))
      {
        if(!empty($nm) && !empty($pass) )
        {


    
          $stmt = $conn->prepare("SELECT uid, uname FROM teachers WHERE uname= ? AND password=?"); 
            $stmt->execute(array($nm,$pass));

             
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
              $uid = $result[0]['uid'];
              $uname = $result[0]['uname'];
              $gender = $result[0]['Gender'];
              session_start();
              // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
              
                  $_SESSION['islogin'] ="1";
                  $_SESSION['uid'] = $uid;
                  $_SESSION['uname'] = $uname;
                  $_SESSION['Gender'] = $gender;
              
                header("location:FacultyDashboard.php");
              
            }
            else{
        header("location: index.html");
            }
            

            $stmt2 = $conn->prepare("SELECT sid, name,rollno FROM student WHERE rollno= ? AND password=?"); 
            $stmt2->execute(array($nm,$pass));

             
             $result = $stmt2->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
            $sid = $result[0]['sid'];
						$name = $result[0]['name'];
            $Htno = $result[0]['rollno'];
            // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
            session_start();
                $_SESSION['islogin'] ="1";
								$_SESSION['sid'] = $sid;
								$_SESSION['name'] = $name;
                $_SESSION['rollno'] = $Htno;
        
							header("location:student Dashboard.php");
            }

          }
 $stmt3 = $conn->prepare("SELECT * FROM admin WHERE user= ? AND password=?"); 
            $stmt3->execute(array($nm,$pass));  
             $result = $stmt3->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
       header("Location: Admin.html");
            
            }
            
          }
        }

?>