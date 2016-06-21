<?php
/**
 * InjectionParameters.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\HttpClient;


class InjectionParameters implements \ArrayAccess
{
    private $parameters_ = [];


    public function __construct(array $data = []) {
        $this->setMulti($data);
    }


    public function offsetExists($name) {
        return isset($this->parameters_[$name]);
    }

    public function offsetGet($name) {
        return $this->parameters_[$name];
    }

    public function offsetSet($name, $value) {
        $this->parameters_[$name] = $value;

        return $this;
    }

    public function offsetUnset($name) {
        unset($this->parameters_[$name]);

        return $this;
    }


    public function get($name) {
        return $this->offsetGet($name);
    }

    public function getMulti(array $names) {
        $ret = [];

        foreach ($names as $name) {
            $ret[$name] = $this->offsetExists($name) ? $this->get($name) : null;
        }

        return $ret;
    }

    public function getAll() {
        return $this->parameters_;
    }


    public function set($name, $value) {
        return $this->offsetSet($name, $value);
    }

    public function setMulti(array $data) {
        $this->parameters_ = array_merge($this->parameters_, $data);

        return $this;
    }


    public function clear() {
        $this->parameters_ = [];

        return $this;
    }


}
