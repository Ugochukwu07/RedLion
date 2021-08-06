<?php 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mailer{
    public $contents;   public $email_subject;
    public $email_to;
    public $mailerName;

    /* private function GetTemplate($path){
        if (file_exists($path)) {
            $EmailMessage = file_get_contents($path);
        } else {
            die("Unable to locate your template file");
        }
        return $EmailMessage;
    } */

    private function getMail($id){
        $database = new Database();
        $body = $database->selectOne('templates', ['id' => $id]);
        $top = $database->selectOne('templates', ['id' => 1]);
        $bottom = $database->selectOne('templates', ['id' => 2]);
        return $top['code'] . $body['code'] . $bottom['code'];
    }

    private function DevMode($EmailMessage){
        if (DEMO) {
            echo $EmailMessage;
            die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. Thank You. </center>");
        }
    }

    /* private function prepare($swap_var, $template_file){
        $this->email_to = $swap_var['{TO_EMAIL}'];
        $this->email_subject = $swap_var['{EMAIL_TITLE}'];
        $EmailMessage = $this->getTemplate($template_file);
    
        foreach (array_keys($swap_var) as $key) {
            if (strlen($key) > 2 && trim($swap_var[$key]) != '') {
                $EmailMessage = str_replace($key, $swap_var[$key], $EmailMessage);
            }
        }
        return $EmailMessage;
    } */

    private function swapMail($data, $templateId){
        $template = $this->getMail($templateId);
        foreach (array_keys($data) as $key) {
            if (strlen($key) > 2 && trim($data[$key]) != '') {
                $template = str_replace($key, $data[$key], $template);
            }
        }
        return $template;
    }

    private function mailer($data, $templateId){
        // Load Composer's auto loader
        require 'vendor/autoload.php';
        
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $body = $this->swapMail($data, $templateId);
        $this->DevMode($body);
        
        try{
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = MHOST;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = MUSER;                     // SMTP username
            $mail->Password   = MPASS;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption PHPMailer::ENCRYPTION_STARTTLS; `` encouraged 
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_STARTTLS` above 587
        
            //Recipients
            $mail->setFrom(MUSER, MNAME);
            $mail->addAddress($data['{EMAIL}'], $data['{FIRSTNAME}'] . ' ' . $data['{LASTNAME}']);
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $data['{EMAIL_TITLE}'];
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);
            $mail->send();
        
        } catch (Exception $e) {
            die("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            $mail->getSMTPInstance()->reset();
        }
        $mail->clearAddresses();
        $mail->clearAttachments();
    }

    public function addUser($data){
        $mails = array('admin' =>'3', '4');
        foreach($mails as $key => $value){
            $this->mailer($data, $value);
            if($key === 'admin'){
                $data['{EMAIL}'] = ADMIN_EMAIL;
                $this->mailer($data, $value);
            }
        }
        return true;
    }
}

?>