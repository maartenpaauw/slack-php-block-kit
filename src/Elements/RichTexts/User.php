<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Elements\RichTexts;

use SlackPhp\BlockKit\Validation\RequiresAllOf;

#[RequiresAllOf('user_id')]
class User extends RichTextElement
{
}
