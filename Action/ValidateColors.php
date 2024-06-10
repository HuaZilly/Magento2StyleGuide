<?php

/**
 * ThanhHua Styleguide
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\Action;

use InvalidArgumentException;
use ThanhHua\StyleGuide\Model\Color;

class ValidateColors
{
    public function execute(array $colors)
    {
        foreach ($colors as $color) {
            if (!$color instanceof Color) {
                throw new InvalidArgumentException('Array of color models required.');
            }
            if (!\preg_match('/^[a-z0-9\-_]+$/', $color->getCode())) {
                throw new InvalidArgumentException('Color code can use only lowercase letters, digits, underscores and hyphens.');
            }
        }
    }
}
