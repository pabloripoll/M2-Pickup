<?php
/**
 * Status Options Model.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Model;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    /**
     * Get Grid row status type labels array.
     * @return array
     */
    public function getOptionArray()
    {
        $options = ['1' => __('Active'),'0' => __('Disabled')];
        return $options;
    }

    /**
     * Get Grid row status labels array with empty value for option element.
     *
     * @return array
     */
    public function getAllOptions()
    {
        $res = $this->getOptions();
        array_unshift($res, ['value' => '', 'label' => '']);
        return $res;
    }

    /**
     * Get Grid row type array for option element.
     * @return array
     */
    public function getOptions()
    {
        $res = [];
        foreach ($this->getOptionArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
