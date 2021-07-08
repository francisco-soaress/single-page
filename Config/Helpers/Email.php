<?php

namespace Config\Helpers;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class Email
{

    /** @var PHPMailer */
    private $mail;

    /** @var stdClass */
    private $data;

    /** @var Exception */
    private $error;

    function __construct()
    {
        $this->mail = new PHPMailer();
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage("br");
        // $this->mail->SMTPDebug = 2;

        $this->mail->SMTPAuth   = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet    = "utf-8";

        // $this->mail->Host     = "smtp.gmail.com";
        // $this->mail->Port     = "587";
        // $this->mail->Username = "contatowebfr@gmail.com";
        // $this->mail->Password = "797birdblack";

        $this->mail->Host     = CONFIG_MAIL["host"];
        $this->mail->Port     = CONFIG_MAIL["port"];
        $this->mail->Username = CONFIG_MAIL["user"];
        $this->mail->Password = CONFIG_MAIL["pass"];
    }

    public function addMessage(string $subject, string $body, string $recipient_name, string $recipient_email)
    {
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;

        return $this;
    }

    public function attach(string $filePath, string $fileName)
    {
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }

    public function send(string $from_name = CONFIG_MAIL["from_name"], string $from_email = CONFIG_MAIL["from_email"])
    {

        try {
            
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
            $this->mail->setFrom($from_email, $from_name);

            if(!empty($this->data->attach)){
                foreach ($this->data->attach as $path => $name){
                    $this->mail->addAttachment($path, $name);
                }
            }

            $this->mail->send();
            return true;

        } catch (Exception $e) {
            $this->error = $e;
            return false;
        }
    }

    public function error()
    {
        return $this->error;
    }
}
