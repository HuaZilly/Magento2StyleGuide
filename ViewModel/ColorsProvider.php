<?php

/**
 * Copyright © 2023 Lingaro sp. z o.o. All rights reserved.
 * See LICENSE for license details.
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
