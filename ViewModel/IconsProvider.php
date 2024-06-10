<?php

/**
 * ThanhHua Styleguide
 *
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\ViewModel;

use \InvalidArgumentException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ThanhHua\StyleGuide\Model\Icon;

class IconsProvider implements ArgumentInterface
{
    /**
     * @var Icon[]
     */
    private array $icons;

    public function __construct(array $icons = [])
    {
        foreach ($icons as $icon) {
            if (!$icon instanceof Icon) {
                throw new InvalidArgumentException('Array of icon models required.');
            }
        }
        $this->icons = $icons;
    }

    /**
     * @return Icon[]
     */
    public function getIcons(): array
    {
        return $this->icons;
    }
}
