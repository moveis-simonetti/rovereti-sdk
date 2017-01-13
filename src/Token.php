<?php
namespace Simonetti\Rovereti;

/**
 * Class Token
 * @package Simonetti\Rovereti
 */
class Token
{
    /**
     * Usuario para acesso
     * @var string
     */
    protected $user;

    /**
     * Chave para acesso
     * @var string
     */
    protected $key;

    /**
     * Token constructor.
     * @param string $user
     * @param int $key
     */
    public function __construct(string $user, int $key)
    {
        $this->user = $user;
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return sha1($this->user . $this->key . "ServiceToken" . date('d/m/Y'));
    }

}