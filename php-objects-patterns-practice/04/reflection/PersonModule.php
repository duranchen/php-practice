<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 10:58 PM
 */
class PersonModule implements Module
{
    function setPerson(Person $person) {
        print "PersonModule::setPerson(): {$person->name}";
    }

    function execute()
    {
        // TODO: Implement execute() method.
        print 'PersonModule';
    }
}