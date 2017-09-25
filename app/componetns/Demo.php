<?php

namespace app\componetns;

use yii\base\InvalidConfigException;
use yii\base\Object;

/**
 * Demo class for tests.
 *
 * @property string $title
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class Demo extends Object
{
    /**
     * @var string
     */
    private $_title;


    /**
     * @inheritdoc
     */
    public function init()
    {
        if (empty($this->_title)) {
            throw new InvalidConfigException();
        }
    }

    /**
     * Setter for title property.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * Getter for title property.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }
}
