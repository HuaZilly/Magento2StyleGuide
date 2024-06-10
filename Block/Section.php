<?php

/**
 * ThanhHua Styleguide
 *
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;

class Section extends Template
{
    public function getTitle(): string
    {
        return $this->getData('title') ?? '';
    }

    public function setTitle(string $title): void
    {
        $this->setData('title', $title);
    }

    public function getViewModel(): ?ArgumentInterface
    {
        return $this->getData('view_model');
    }

    public function setViewModel(?ArgumentInterface $viewModel)
    {
        return $this->setData('view_model', $viewModel);
    }
}
