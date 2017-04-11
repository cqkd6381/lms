<?php
namespace App\Mailer;

class UserMailer extends Mailer
{
    /**
     * 注册时发送的验证邮件
     * @param $user
     */
    public function welcome($user)
    {
        $subject = 'ibestservice邮箱确认';//请确保与sendcloud中设置的邮件标题一致

        $view = 'welcome';

        $data = [
            "%username%"=>[$user->username],
            "%code%"=>[$user->code],
            "%url%"=>['http://class.ibestservice.com/code/'.$user->username.'/'.$user->code]
        ];

        $this->sendTo($user,$subject,$view,$data);
    }

    /**
     * 忘记密码时发送邮件
     * @param $user
     */
    public function forgotPassword($user)
    {

    }
}