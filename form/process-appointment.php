<?php



    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $phone = $_REQUEST['phone'];
    $from = $_REQUEST['email'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $autoinfo = $_REQUEST['autoinfo'];
    $select = $_REQUEST['select'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";
    $subject = "rendez-vous sur le site  Service-mika";
    
    require './phpMailer/PHPMailerAutoload.php';
    
    $to  = "the.fire.zita@gmail.com";
     
    $username = "contact@domainname.com";
    $password = "password of email" ;
    //$path='../assets/programme.pdf';

    $mail = new PHPMailer(); 
    
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587 ; // or 465
    $mail->SMTPAuth = true;  
    $mail->SMTPSecure='tls';
    $mail->Username = "$username";  
    $mail->Password = "$password"; 
    $mail->setFrom('hamigo70@gmail.com',$_REQUEST['name']);
    $mail->addAddress($to);
    $mail->addReplyTo('hamigo70@gmail.com');
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    $mail->Subject=$subject;
    $mail->Body='<h4 style="algin:center">Rendez-nous client infos</h4><br>
                                                    
                                                       '.' - Nom: '. $name .' '. $lastname.'<br>'
                                                        .' - Email: '. $from .'<br>'
                                                        .' - Phone: '. $phone .'<br>'
                                                        .' - Date '. $date ."".' time '. $time.'<br>'
                                                        .' - Selection:  '. $select .'<br>'
                                                        .' - Auto info: '. $autoinfo .'<br>'
                                                        .' <h4 style="color:Teal" > Message:</h4>'. $message .'<br>'; 
                                                             
   

    
    $mail->send();
         
   
?>