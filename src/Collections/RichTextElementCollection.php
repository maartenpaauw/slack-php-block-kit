<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Collections;

use SlackPhp\BlockKit\Component;
use SlackPhp\BlockKit\Elements\RichTexts\RichTextElement;

/**
 * @extends ComponentCollection
 */
class RichTextElementCollection extends ComponentCollection
{
    protected static function createComponent(array $data): Component
    {
        return RichTextElement::fromArray($data);
    }

    protected function prepareItems(array $items): iterable
    {
        // TODO: Implement prepareItems() method.
    }
}
