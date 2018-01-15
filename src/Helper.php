<?php 
namespace thanhtaivtt\Taiscript;
/**
* 
*/
class Helper
{

    function __construct($name)
    {
       echo "Created success ".$name."\n";
       $myfile = fopen('application/helpers/'.$name.'_helper.php', "w") or die("Unable to open file!");
       $txt = 
       '<?php
/**
* Scripts by thanhtaivtt http://toidicode.com
*/
// code 
';
    fwrite($myfile, $txt);

    fclose($myfile);
}
}
