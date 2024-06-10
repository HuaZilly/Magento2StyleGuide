<?php

/**
 * ThanhHua Styleguide
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\Model;

class Color
{
    private string $code;

    private string $label;

    private string $cssColor;

    public function __construct(string $code, string $label, string $cssColor)
    {
        $this->code = $code;
        $this->label = $label;
        $this->cssColor = $cssColor;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCssColor(): string
    {
        return $this->cssColor;
    }
}
