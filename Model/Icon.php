<?php

/**
 * ThanhHua Styleguide
 *
 * @author    Thanh Hua <thanh.hua@balanceinternet.com.au>
 * @copyright Balance Internet Pty Ltd (https://www.balanceinternet.com.au)
 */



declare(strict_types=1);

namespace ThanhHua\StyleGuide\Model;

class Icon
{
    private string $name;

    private string $cssClass;

    public function __construct(string $name, string $cssClass)
    {
        $this->name = $name;
        $this->cssClass = $cssClass;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCssClass(): string
    {
        return $this->cssClass;
    }
}
