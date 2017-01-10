<?php

namespace Simonetti\Rovereti;

/**
 * Class Token
 * @package Simonetti\Rovereti
 */
class Token
{
    /**
     * @var string
     */
    protected $token;

    /**
     * Token constructor.
     * @param string $user
     * @param int $key
     */
    public function __construct(string $user, int $key)
    {
        $this->token = sha1($user . $key . "ServiceToken" . date('d/m/Y'));
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

}