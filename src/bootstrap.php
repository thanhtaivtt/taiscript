<?php
use thanhtaivtt\Taiscript\Controller;
use thanhtaivtt\Taiscript\Eloquent;
use thanhtaivtt\Taiscript\Helper;
use thanhtaivtt\Taiscript\Library;
use thanhtaivtt\Taiscript\Model;

if (isset($_SERVER["argv"][1])) {
    $code = explode(':', $_SERVER["argv"][1]);
    if (count($code) == 2) {
        switch ($code[0]) {
            case 'make':
                switch ($code[1]) {
                    case 'controller':
                        if (isset($_SERVER['argv'][2])) {
                            new Controller($_SERVER['argv'][2]);
                        } else {
                            exit('missing: "name"');
                        }

                        break;
                    case 'model':
                        if (isset($_SERVER['argv'][2])) {
                            new Model($_SERVER['argv'][2]);
                        } else {
                            exit('missing: "name"');
                        }

                        break;
                    case 'eloquent':
                        if (isset($_SERVER['argv'][2])) {
                            new Eloquent($_SERVER['argv'][2]);
                        } else {
                            exit('missing: "name"');
                        }

                        break;
                    case 'helper':
                        if (isset($_SERVER['argv'][2])) {
                            new Helper($_SERVER['argv'][2]);
                        } else {
                            exit('missing: "name"');
                        }

                        break;
                    case 'library':
                        if (isset($_SERVER['argv'][2])) {
                            new Library($_SERVER['argv'][2]);
                        } else {
                            exit('missing: "name"');
                        }

                        break;
                }
                break;
        }
    } else {
        echo "
make:controller \t Create controller
make:model \t\t Create model
make:eloquent \t\t Create model extends eloquent
make:helper \t\t Create helper
make:library \t\t Create library";
    }
}
