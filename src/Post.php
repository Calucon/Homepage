<?php

class Post
{

    public string $htmlAnchor;

    public function __construct(
        public string $contentView,
        public string $title,
        public string $author = 'Simon Schwitz',
        public DateTime $date = new DateTime('now', new DateTimeZone('utc')),
        public ?string $imageUrl = null,
        public string $imageAlt = '',
        public bool $disabled = false,
    ) {
        $this->htmlAnchor = str_replace('.php', '', $this->contentView);
    }

    public function hasImage(): bool
    {
        return !empty($this->imageUrl);
    }
}
