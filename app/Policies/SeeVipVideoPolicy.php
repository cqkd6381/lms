<?php

namespace App\Policies;

use App\Model\Courseware;
use App\Model\User;
use App\Model\UserGoods;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeeVipVideoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function seeVipVideo(User $user,UserGoods $usergoods)
    {
        return $user->isVipToVideo($usergoods);
    }
}
