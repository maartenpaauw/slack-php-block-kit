<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Elements\RichTexts;

use SlackPhp\BlockKit\Validation\RequiresAllOf;

#[RequiresAllOf('text')]
class Text extends RichTextElement
{
}
