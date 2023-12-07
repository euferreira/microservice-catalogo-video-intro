<?php

namespace Core\UseCase\DTO\Category;

class CategoryOutputDto
{
    public function __construct(
        public string           $id,
        public string           $name,
        public string           $description = '',
        public bool             $active = true,
        public string|\DateTime $createdAt = '',
    )
    {
    }

}
