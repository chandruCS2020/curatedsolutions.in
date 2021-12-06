<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['message'];
       $phone=$_POST['phone'];
       $message="$phone\n$Msg";
       $headers = "From:" . $Email;
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)  || empty($phone))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "support@curatedsolutions.in";
           $to2="curatedsolution@gmail.com";

           if(mail($to,$Subject,$message, $headers) && mail($to2,$Subject,$message,$headers) )
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>