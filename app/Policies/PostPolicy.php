<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Model\User;
use App\Model\Post;
class PostPolicy
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

    /**
     * 更新文章权限
     * @param User $user
     * @param Post $post
     * @return bool
     */
    public function update(User $user,Post $post)
    {
        return $user->owns($post);
    }
}
