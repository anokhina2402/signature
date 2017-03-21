<?php

interface IHash
{
    /** procedure to make hash
     * @param $secret_word - user secret word
     * @return string - hash
     */
    public function doHash($secret_word);
}