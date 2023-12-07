<?php

namespace Core\UseCase\DTO\Category\CreateCategory;

class CategoryCreateOutputDto
{
    public function __construct(
        public string $id,
        public string $name,
        public string|\DateTime $createdAt = '',
        public string $description = '',
        public bool   $isActive = true,
    )
    {
    }
}
