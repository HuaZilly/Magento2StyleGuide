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

use Generator;
use InvalidArgumentException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use ThanhHua\StyleGuide\Block\Section as SectionBlock;
use ThanhHua\StyleGuide\Block\SectionFactory as SectionBlockFactory;
use ThanhHua\StyleGuide\Model\Section;

class SectionBlocksProvider implements ArgumentInterface
{
    private SectionBlockFactory $sectionBlockFactory;

    /**
     * @var Section[]
     */
    private array $sections;

    public function __construct(SectionBlockFactory $sectionBlockFactory, array $sections = [])
    {
        foreach ($sections as $section) {
            if (!$section instanceof Section) {
                throw new InvalidArgumentException('Array of section models required.');
            }
        }
        $this->sections = $sections;
        $this->sectionBlockFactory = $sectionBlockFactory;
    }

    public function getSectionBlocks(): Generator
    {
        foreach ($this->sections as $section) {
            if ($section->isRemoved()) {
                continue;
            }
            /** @var SectionBlock $block */
            $block = $this->sectionBlockFactory->create();
            $block->setTemplate($section->getTemplate());
            $block->setTitle($section->getTitle());
            $block->setViewModel($section->getViewModel());
            yield $block;
        }
    }
}
