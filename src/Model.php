<?php 
namespace thanhtaivtt\Taiscript;
/**
* 
*/
class Model
{

    function __construct($name)
    {
       echo "Created success ".$name."\n";
       $myfile = fopen('application/models/'.$name.'.php', "w") or die("Unable to open file!");
       $txt = 
       '<?php
defined(\'BASEPATH\') or exit(\'No direct script access allowed\');
/**
* Scripts by thanhtaivtt http://toidicode.com
*/
class '.$name.' extends CI_Model
{
    //code
}
';
    fwrite($myfile, $txt);

    fclose($myfile);
}
}