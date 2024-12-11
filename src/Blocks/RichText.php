<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Blocks;

use SlackPhp\BlockKit\Collections\RichTextSubElementCollection;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextList;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextPreformatted;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextQuote;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextSection;
use SlackPhp\BlockKit\Property;
use SlackPhp\BlockKit\Validation\RequiresAllOf;

#[RequiresAllOf('elements')]
class RichText extends Block
{
    #[Property]
    public RichTextSubElementCollection $elements;

    public function __construct(RichTextSubElementCollection|array $elements = [], ?string $blockId = null)
    {
        parent::__construct($blockId);
        $this->elements = new RichTextSubElementCollection();
        $this->elements(...$elements);
    }

    public function elements(RichTextSubElementCollection|RichTextList|RichTextPreformatted|RichTextQuote|RichTextSection|null ...$elements): self
    {
        $this->elements->append(...$elements);

        return $this;
    }
}
