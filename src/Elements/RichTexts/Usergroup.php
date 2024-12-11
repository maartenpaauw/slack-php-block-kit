<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Elements\RichTexts;

use SlackPhp\BlockKit\Validation\RequiresAllOf;

#[RequiresAllOf('usergroup_id')]
class Usergroup extends RichTextElement
{
}
