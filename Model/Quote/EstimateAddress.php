<?php
/**
 * Copyright © 2018 EaDesign by Eco Active S.R.L. All rights reserved.
 * See LICENSE for license details.
 */
namespace Eadesigndev\RomCity\Model\Quote;

use Eadesigndev\RomCity\Api\Quote\Data\EstimateAddressInterface;

class EstimateAddress extends \Magento\Quote\Model\EstimateAddress implements EstimateAddressInterface
{
    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::KEY_CITY);
    }

    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        return $this->setData(self::KEY_CITY, $city);
    }
}