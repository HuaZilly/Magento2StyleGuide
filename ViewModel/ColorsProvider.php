<?php

/**
 * ThanhHua Styleguide
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */

declare(strict_types=1);

namespace ThanhHua\StyleGuide\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use ThanhHua\StyleGuide\Action\ValidateColors;
use ThanhHua\StyleGuide\Model\Color;

class ColorsProvider implements ArgumentInterface
{
    /**
     * @var Color[]
     */
    private array $colors;

    public function __construct(ValidateColors $validateColors, array $colors = [])
    {
        $validateColors->execute($colors);
        $this->colors = $colors;
    }

    /**
     * @return Color[]
     */
    public function getColors(): array
    {
        return $this->colors;
    }
}
