<?php

namespace thanhtaivtt\Taiscript;

/**
 *
 */
class Controller
{

    public function __construct($name)
    {
        echo "Created success " . $name . "\n";
        $myfile = fopen('application/controllers/' . $name . '.php', "w") or die("Unable to open file!");
        $txt    =
            "

";
        fwrite($myfile, $txt);

        fclose($myfile);
    }
}
