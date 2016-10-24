<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 10:56 PM
 */
class FtpModule implements Module
{
    function setHost($host)
    {
        print "FtpModule::setHost(): $host\n";
    }

    function setUser($user)
    {
        print "FtpModule::setUser(): $user\n";
    }

    function execute()
    {
        // TODO: Implement execute() method.
        print 'FtpModule';
    }

}