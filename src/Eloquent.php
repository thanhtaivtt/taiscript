<?php 
namespace thanhtaivtt\Taiscript;
/**
* 
*/
class Eloquent
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
use \Illuminate\Database\Eloquent\Model as Eloquent;

class '.$name.' extends Eloquent
{
    protected $table = \''.$name.'\';
}
';
    fwrite($myfile, $txt);

    fclose($myfile);
}
}
