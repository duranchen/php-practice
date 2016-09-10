<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 12:05 PM
 */

$dateStart = new \DateTime('now', 'Asia\Shanghai');

$dataInterval = \DateInterval::createFromDateString('-1 day');

$dataPeriod = new \DatePeriod($dateStart, $dataInterval, 30);


foreach ($dataPeriod as $date) {
    $file = 'sftp://USER:PASS@rsync.net/'.$date->format('Y-m-d').'.log.bz2';

    if (file_exists($file)) {
        $handle = fopen($file, 'rb');
        stream_filter_append($handle,'bzip2.decompress');
        while (feof($handle) !== true) {
            $line = fgets($handle);
            if( strpos($line,'www.example.com') !== false ){
                fwrite(STDOUT,$line);
            }
        }
    }

    fclose($handle);


}