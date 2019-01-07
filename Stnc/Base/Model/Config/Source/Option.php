<?php

namespace Stnc\Base\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Option implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'stnc1', 'label' => __('Option A')],
            ['value' => 'stnc2', 'label' => __('Option B')],
            ['value' => 'stnc3', 'label' => __('Option C')],
        ];
    }
}