<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './mails/PHPMailer.php';
require './mails/SMTP.php';
require './mails/Exception.php';

class EmailnitificationsController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function returnMsg($msg, $status, $hide = 0, $id = "") {
        $result = array(
            'msg' => $msg,
            'sts' => $status,
            'hide' => $hide,
            'id' => $id
        );
        echo json_encode($result);
    }

    public function loadmail() {
        try {

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mail.dprglobalbiznetworks.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'noreply@dprglobalbiznetworks.com';
            $mail->Password = 'VC!7Mor+Y?VF';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('noreply@dprglobalbiznetworks.com', 'DPR GLOBAL BUSINESS NETWORK');
            $mail->addReplyTo('bdm@dprglobalbiznetworks.com', 'DPR GLOBAL BUSINESS NETWORK');

            return $mail;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function actionContact() {

        $mail = $this->loadmail();
        $mail->isHTML(true);
        $mail->Subject = "Thank you for your inquery !";

        $mail->addAddress($_POST['email']);
        $mail->addCC('bdm@srilankainvestment.com');
        $mail->addBCC('suranjith.swaris@srilankainvestment.com');       
        
        
        //SEND DATA AND GET THE EMAIL BODY
        ob_start();
        $this->renderPartial("company",array("data" => $_POST));
        $mail->Body = ob_get_contents();
        ob_end_clean();

        
        $mail->send();
        
        $this->returnMsg("Your Request Received!", 1, 0);
    }

}
