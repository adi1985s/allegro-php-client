<?php
/**
 * Property.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\Internal;


/**
 * Class Property
 *
 */
class Property
{
    /**
     * @var callable $validator_
     *  A callable accepting single parameter, the value, and returning boolean.
     *  Also may throw exceptions containing report what was wrong.
     */

    /**
     * @var mixed
     */
    private $value_;
    /**
     * @var bool
     */
    private $locked_ = false;

    /**
     * @param array $options
     *
     *  Valid options are:
     *      - default - mixed - default value
     *      - validator - callable($value, $this) - on fail throws exception
     *      - getter - callable($this)
     *      - setter - callable($newValue, $this)
     *      - lock - boolean - lock property immediately
     */
    public function __construct(array $options = []) {
        foreach (['validator', 'getter', 'setter'] as $callable) {
            if (isset($options[$callable])) {
                if (!is_callable($options[$callable])) {
                    throw new \InvalidArgumentException("Option '$callable' is not callable");
                }

                $this->{$callable.'_'} = $options[$callable];
            }
        }

        if (isset($options['default'])) {
            $this->set(
                is_callable($options['default']) ?
                    call_user_func($options['default']) :
                    $options['default']
            );
        }

        if (isset($options['lock']) && $options['lock']) {
            $this->lock();
        }
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function get() {
        return isset($this->getter_) ? call_user_func($this->getter_, $this) : $this->value_;
    }

    /**
     * Circumvents getter and returns raw value
     *
     * @return mixed
     */
    public function forceGet() {
        return $this->value_;
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @throws \BadMethodCallException
     * @throws \InvalidArgumentException
     */
    public function set($value) {
        if ($this->isLocked()) {
            throw new \LogicException('Property is locked');
        }

        $this->validate($value);

        if (isset($this->setter_) && is_callable($this->setter_)) {
            call_user_func($this->setter_, $value, $this);
        } else {
            $this->value_ = $value;
        }

        return $this;
    }

    /**
     * Sets value without any checking (for locks, validity, ...)
     *
     * @warning Use carefully!
     *
     * @param $value
     *
     * @return $this
     */
    public function forceSet($value) {
        $this->value_ = $value;

        return $this;
    }

    /**
     * @param mixed $value optional
     *
     * @return $this
     * @throws \Exception
     */
    public function validate() {
        $value = (func_num_args() > 0) ? func_get_arg(0) : $this->value_;

        if (isset($this->validator_)) {
            call_user_func($this->validator_, $value, $this);
        }

        return $this;
    }

    public function lock() {
        $this->locked_ = true;

        return $this;
    }

    public function unlock() {
        $this->locked_ = false;

        return $this;
    }

    public function isLocked() {
        return $this->locked_;
    }

    public function __toString() {
        return (string)$this->value_;
    }
}
