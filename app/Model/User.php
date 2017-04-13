<?php

namespace App\Model;

use App\Events\UserRegistered;
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses()
    {
    	return $this->belongsToMany(Course::class,'teacher_id','id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseComments()
    {
        return $this->hasMany(CourseComment::class);
    }

    /**
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if(is_string($role)){

            return $this->roles->contains('name',$role);
        }

        return !!$role->intersect($this->roles)->count();
    }
    //$user->roles()->attach($role);//
    //$role->permissions()->save($role)

    /**
     * 测试-分析用户是否有查看post的权限
     * @param $post
     * @return bool
     */
    public function owns($post)
    {
        return $this->id == $post->user_id;
    }

    /**
     * 分析用户是否有看视频的权限
     * 权限规则：1.不是注册会员则通过 2.是注册会员则满足下面两个条件（1）本人已购买过Vip会员（2）.会员在有效期内
     * @return bool
     */
    public function isVipToVideo($usergoods)
    {
        if($this->type==2){
            if($usergoods->user_id==$this->id && strtotime($usergoods->expire_time)<time()){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    /**
     * @return bool
     */
    public function isRegister()
    {
        return ($this->type == 2) ? true:false;
    }

    /**
     * 注册账户
     * @param array $data
     * @return static
     */
    public static function register(array $data)
    {
        $user = static::create($data);

        event(new UserRegistered($user));

        return $user;
    }
}
