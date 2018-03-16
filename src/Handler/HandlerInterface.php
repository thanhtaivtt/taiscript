<?php

namespace Thanhtaivtt\Taiscript\Handler;

interface HandlerInterface
{
    public function readData($fileName);

    public function handleData($data);

    public function bindData($path, $data);
}