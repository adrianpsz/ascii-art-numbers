<?php

function includeAll($directory)
{
    if (is_dir($directory)) {
        $scan = scandir($directory);
        unset($scan[0], $scan[1]); //unset . and ..
        foreach ($scan as $file) {
            if (is_dir($directory . "/" . $file)) {
                includeAll($directory . "/" . $file);
            } else {
                if (strpos($file, '.php') !== false) {
                    include_once($directory . "/" . $file);
                }
            }
        }
    }
}
