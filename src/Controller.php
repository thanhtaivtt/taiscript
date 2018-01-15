<?php 
namespace thanhtaivtt\Taiscript;
/**
* 
*/
class Controller
{

    function __construct($name)
    {
       echo "Created success ".$name."\n";
       $myfile = fopen('application/controllers/'.$name.'.php', "w") or die("Unable to open file!");
       $txt = 
       '<?php
defined(\'BASEPATH\') or exit(\'No direct script access allowed\');
/**
* Scripts by thanhtaivtt http://toidicode.com
*/
class '.$name.' extends CI_Controller
{
    public function index()
    {
        //code
    }
}
';
    fwrite($myfile, $txt);

    fclose($myfile);
}
}
