<?php
/**
 * User: Kendall
 * Date: 11/11/2015
 * Time: 8:58 AM
 */

namespace includes\users;


class User
{
    //Properties
    private $userDBO;
    private $token;

    /**
     * The Constructor
     * @param \stdClass $user
     */
    public function __construct(\stdClass $user)
    {
        $this->userDBO = $user;
        $this->token = hash(AUTH_HASH, get_user_ip());
    }

    /**
     * Gets the user database object
     * @return \stdClass The user information
     */
    public function get_userDBO()
    {
        return $this->userDBO;
    }

    /**
     * Sets the user object
     * @param \stdClass $user
     */
    public function set_userDBO(\stdClass $user)
    {
        $this->userDBO = $user;
    }

    /**
     * Gets the user Token for authentication
     * @return string The token that was saved
     */
    public function get_token()
    {
        return $this->token;
    }
}