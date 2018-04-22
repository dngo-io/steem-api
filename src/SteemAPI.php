<?php

namespace SteemAPI;

use SteemAPI\API\Account as Account;
use SteemAPI\API\Post as Post;

class SteemAPI
{

    /**
     * Steemit constructor
     */
    public function __construct()
    {
        // Nothing to do for now :/
    }

    /**
     * @return \SteemAPI\API\Account
     */
    public function getAccount()
    {
        return new Account();
    }


    /**
     * @return \SteemAPI\API\Post
     */
    public function getPost()
    {
        return new Post();
    }

}