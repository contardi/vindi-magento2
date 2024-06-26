<?php

namespace Vindi\Payment\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class Installments
 * @package Vindi\Payment\Model\Config\Source
 */
class Installments extends AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['label' => __('À vista'), 'value' => 1]
            ];

            $this->_options = array_merge($this->_options, $this->getRangeOptions());
        }

        return $this->_options;
    }

    /**
     * @return array
     */
    public function getRangeOptions()
    {
        $range = [];
        for ($number = 2; $number <= 60; $number++) {
            $range[] = [
                'label' => __('%1 times', $number),
                'value' => $number
            ];
        }

        return $range;
    }
}
