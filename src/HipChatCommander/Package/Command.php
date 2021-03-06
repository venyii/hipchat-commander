<?php

/*
 * This file is part of the HipChat Commander.
 *
 * (c) venyii
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Venyii\HipChatCommander\Package;

class Command
{
    private $name;
    private $description;
    private $aliases;
    private $default;
    private $method;

    /**
     * @param string      $name
     * @param string      $description
     * @param array       $aliases
     * @param bool        $default
     * @param string|null $method
     */
    public function __construct($name, $description = null, $aliases = [], $default = false, $method = null)
    {
        if (empty($name) || !is_array($aliases)) {
            throw new \InvalidArgumentException('Invalid command options given.');
        }

        $this->name = $name;
        $this->description = $description;
        $this->aliases = $aliases;
        $this->default = (bool) $default;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }
}
