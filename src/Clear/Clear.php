<?php
/**
 * Created by PhpStorm.
 * User: thanhtai
 * Date: 16/03/2018
 * Time: 21:27
 */

namespace Thanhtaivtt\Taiscript\Clear;


class Clear implements ClearInterface
{
    public function clear($path)
    {
        if (is_dir($path)) {
            $objects = scandir($path);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($path . "/" . $object) == "dir") {
                        $this->clear($path . "/" . $object);
                    } else {
                        unlink($path . "/" . $object);
                    }
                }
            }
            reset($objects);
        }
    }
}