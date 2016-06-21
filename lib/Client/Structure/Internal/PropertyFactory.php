<?php
/**
 * PropertyFactory.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\Internal;

/**
 * Class PropertyFactory
 *
 * @method $this default($value)
 */
class PropertyFactory
{
    protected $options_ = [];


    public function validator(callable $callable)
    {
        $this->options_['validator'] = $callable;

        return $this;
    }

    public function getter(callable $callable)
    {
        $this->options_['callable'] = $callable;

        return $this;
    }

    public function setter(callable $callable)
    {
        $this->options_['setter'] = $callable;

        return $this;
    }

    public function lock()
    {
        $this->options_['lock'] = true;

        return $this;
    }

    public function unlock()
    {
        $this->options_['lock'] = false;

        return $this;
    }

    public function done()
    {
        return new Property($this->options_);
    }

    public function doneAndReset()
    {
        $ret = $this->done();
        $this->reset();

        return $ret;
    }

    public function reset()
    {
        $this->options_ = [];

        return $this;
    }

    public function __call($name, $argv)
    {
        switch ($name) {
            case 'default':
                if (count($argv) !== 1) {
                    throw new \BadMethodCallException(sprintf(
                        'Method "%s::%s()" requires a single argument, %d arguments passed',
                        __CLASS__, $name, count($argv)
                    ));
                }
                return $this->defVal($argv[0]);
            default:
                throw new \BadMethodCallException(sprintf('Method "%s::%s()" does not exist', __CLASS__, $name));
        }
    }

    private function defVal($value)
    {
        $this->options_['default'] = $value;

        return $this;
    }
}

$c = new PropertyFactory();
$c->default('dsf');
