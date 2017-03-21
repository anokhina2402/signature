<?php
require_once "includes/Signature.php";
require_once "includes/Hash1.php";
require_once "includes/Hash2.php";

class Strategy {

    /**
     * @param int $type - type of hash algorithm
     * @param string $login - user login
     * @param string $secret_word - user secret word
     * @return string - user signature
     */
    public function execute($type = 0, $login = '', $secret_word = '') {
        if ( $type == 1 ) {
            $signature = new Signature(new Hash1());
        }
        else {
            $signature = new Signature(new Hash2());
        }
        return $signature->doSignature($login, $secret_word);
    }
}
