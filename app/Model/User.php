<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

	const STATUS_OPEN = '开启';
    const STATUS_CLOSE = '关闭';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['username','email','password','mobilephone','telephone','realname','qq','sex','reg_ip','last_login_ip','type','active','code','credential_no','description','imgpath','last_login_time'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function belongsToManyCourse()
    {
    	return $this->belongsToMany('App\Model\Course','teacher_id','id');
    }

    public function getActiveAttribute($value)
    {
        switch ($value) {
            case '1':
                $attr = self::STATUS_OPEN;
                break;
            case '2':
                $attr = self::STATUS_CLOSE;
                break;
        }
        return $attr;
    }
}
