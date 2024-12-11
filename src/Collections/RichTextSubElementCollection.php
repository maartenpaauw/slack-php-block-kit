<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Collections;

use SlackPhp\BlockKit\Component;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextList;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextPreformatted;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextQuote;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextSection;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextSubElement;

/**
 * @extends ComponentCollection<RichTextList|RichTextPreformatted|RichTextQuote|RichTextSection>
 */
class RichTextSubElementCollection extends ComponentCollection
{
    protected static function createComponent(array $data): Component
    {
        return RichTextSubElement::fromArray($data);
    }

    /**
     * @param array<RichTextList|RichTextPreformatted|RichTextQuote|RichTextSection|self|null> $elements
     */
    public function __construct(array $elements = [])
    {
        $this->append(...$elements);
    }

    public function append(RichTextList|RichTextPreformatted|RichTextQuote|RichTextSection|self|null ...$elements): void
    {
        $this->add($elements);
    }

    public function prepend(RichTextList|RichTextPreformatted|RichTextQuote|RichTextSection|self|null ...$elements): void
    {
        $this->add($elements, true);
    }

    protected function prepareItems(array $items): iterable
    {
        foreach ($items as $attachment) {
            if ($attachment instanceof RichTextSubElement) {
                yield $attachment;
            } elseif ($attachment instanceof self) {
                yield from $attachment;
            }
        }
    }
}
