<?php
namespace App\Mailer;

class Mailer
{
    /**
     * @var string
     */
    protected $url = 'http://api.sendcloud.net/apiv2/mail/sendtemplate';

    /**
     * 发送邮件
     * @param $user
     * @param $subject
     * @param $view
     * @param array $data
     */
    public function sendTo($user,$subject,$view,$datas = [])
    {
        $vars = json_encode(['to'=>[$user->email],'sub'=>$datas]);
        $param = [
            'apiUser' => env('SENDCLOUD_API_USER'),
            'apiKey' => env('SENDCLOUD_API_KEY'),
            'from' => env('SENDCLOUD_FROM_EMAIL'),
            'fromName' => env('SENDCLOUD_FROM_NAME'),
            'xsmtpapi'=>$vars,
            'subject' => $subject,
            'templateInvokeName'=>$view,
            'respEmailId' => 'true'
        ];

        $data = http_build_query($param);

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $data
            ]];
        $context  = stream_context_create($options);

        return file_get_contents($this->url, FILE_TEXT, $context);
    }
}