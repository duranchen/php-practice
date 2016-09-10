<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/10/16
 * Time: 3:01 PM
 */
class Whovian
{
    protected $favoriteDoctor;

    public function __construct($favoriteDoctor)
    {
        $this->favoriteDoctor = (string)$favoriteDoctor;
    }

    public function say() {
        return 'The best doctor is '.$this->favoriteDoctor;
    }

    public function respondTo($input)
    {
        $input = strtolower($input);

        $myDoctor = strtolower($this->favoriteDoctor);

        if(strpos($input,$myDoctor) === false ) {
            throw new Exception(
                sprintf('No way! %s is the best doctor ever!', $this->favoriteDoctor)
            );
        }

        return 'I agree!';
    }

}