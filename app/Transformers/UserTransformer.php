<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    // protected $availableIncludes = ['posts'];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            "nokp" => $user->nokp,
            "name" => $user->name,
            "email" => $user->email,
            "peranan" => $user->peranan_kod,
        ];
    }

    /* public function includePosts(User $user)
    {
        $posts = $user->posts()->latestPost()->get();

        return $this->collection($posts, new PostTransformer);
    } */
}
