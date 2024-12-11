<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Elements\RichTexts;

use SlackPhp\BlockKit\Property;
use SlackPhp\BlockKit\Validation\RequiresAllOf;

#[RequiresAllOf('range')]
class Broadcast extends RichTextElement
{
    #[Property]
    public ?BroadcastRange $range;

    public function __construct(BroadcastRange|string|null $range = null)
    {
        parent::__construct();
        $this->range($range);
    }

    public function range(BroadcastRange|string|null $range): self
    {
        $this->range = BroadcastRange::fromValue($range);

        return $this;
    }
}
