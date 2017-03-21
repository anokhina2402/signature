<?php
require_once "IHash.php";
class Signature
{
    private $hash;

    function __construct(IHash $hash)
    {
        $this->hash = $hash;
    }

    /**
     * Procedure to make a signature
     * @param $login - user login
     * @param $secret_word - user secret word
     * @return string - signature
     */
    public function doSignature($login, $secret_word)
    {
        return $login . '|' . $this->hash->doHash($secret_word);
    }
}