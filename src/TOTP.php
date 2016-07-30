<?php namespace TOTP;

class TOTP
{
    /**
     * @var integer
     */
    private $delay = 30;

    /**
     * @var string
     */
    private $secret = null;

    /**
     * Create TwoFactor instance
     *
     * @param string $secret
     */
    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    /**
     * Returns the authenticate code
     *
     * @return string
     */
    public function getCode()
    {
        $atom = floor(time() / $this->delay);
        $hash = sha1($this->secret . dechex($atom));
        $last = substr($hash, -1);
        $pos  = hexdec($last);
        $hex  = substr($hash, $pos, 8);
        $code = strval(hexdec($hex));

        return substr($code, -6);
    }

    /**
     * Try to authenticate
     *
     * @param  string $code
     * @return boolean
     */
    public function auth($code)
    {
        return (boolean) (strval($code) === $this->getCode());
    }
}
