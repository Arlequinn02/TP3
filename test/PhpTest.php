<?php
/**YES**/
namespace app;
/**Ceci est une classe**/
class Validateur
{
    /**Ceci est une fonction**/
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}
