<?php
include "../NotificationExample/Sms.php";
include "../NotificationExample/Email.php";
include "../NotificationExample/PushNotificationAdapter.php";
class NotificationExampleTest extends \PHPUnit\Framework\TestCase{

    public function testCanSendSms(){
        $sms = new Sms();
        $result = $sms->send();
        $this->assertEquals(true,$result);
    }
    public function testCanSendEmail(){
        $mail = new Email();
        $result = $mail->send();
        $this->assertEquals(true,$result);
    }
    public function testCanSendPushNotification(){
        $pushNotification = new PushNotificationAdapter();
      $result =   $pushNotification->send();
      $this->assertEquals(true,$result);
    }

}