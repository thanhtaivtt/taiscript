<?php

namespace Thanhtaivtt\Taiscript\Make;

use Thanhtaivtt\Taiscript\Handler\Handler;

/**
 *
 */
class Model
{
    /**
     * Contain Handle instance Object
     *
     * @var Handler
     */
    private $handle;

    /**
     * Base folder for application
     *
     * @var string
     */
    private $baseFolder = 'application/models/';

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->handle = new Handler();
    }

    /**
     * Create file
     *
     * @param $name
     */
    public function create($name)
    {
        $this->handle->make('model', $this->baseFolder . $name);
    }
}
