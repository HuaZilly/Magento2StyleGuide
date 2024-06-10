<?php

/**
 * ThanhHua Styleguide
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\Model;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Section
{
    private string $title;

    private string $template;

    private ?ArgumentInterface $viewModel;

    private bool $isRemoved;

    public function __construct(
        string $title,
        string $template,
        ?ArgumentInterface $viewModel = null,
        bool $isRemoved = false
    ) {
        $this->title = $title;
        $this->template = $template;
        $this->viewModel = $viewModel;
        $this->isRemoved = $isRemoved;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getViewModel(): ?ArgumentInterface
    {
        return $this->viewModel;
    }

    public function isRemoved(): bool
    {
        return $this->isRemoved;
    }
}
