<?php

class Hash1 implements IHash
{

    /** procedure to make hash by first method
     * @param $secret_word - user secret word
     * @return string - hash
     */
    public function doHash($secret_word)
    {
        //There should be a hash algorithm implementation
        return $secret_word;
    }

}