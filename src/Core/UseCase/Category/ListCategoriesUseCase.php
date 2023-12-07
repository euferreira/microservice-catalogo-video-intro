<?php

namespace Core\UseCase\Category;

use Core\Domain\Repository\CategoryRepositoryInterface;
use Core\UseCase\DTO\Category\ListCategories\ListCategoriesInputDto;
use Core\UseCase\DTO\Category\ListCategories\ListCategoriesOutputDto;

class ListCategoriesUseCase
{
    protected CategoryRepositoryInterface $repository;
    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(ListCategoriesInputDto $input): ListCategoriesOutputDto
    {
        $categories = $this->repository->paginate(
            filter: $input->filter,
            order: $input->order,
            page: $input->page,
            perPage: $input->perPage
        );
        return new ListCategoriesOutputDto(
            items: $categories->items(),
            total: $categories->total(),
            lastPage: $categories->lastPage(),
            firstPage: $categories->firstPage(),
            currentPage: $categories->currentPage(),
            perPage: $categories->perPage(),
            to: $categories->to(),
            from: $categories->from(),
        );
//        return new ListCategoriesOutputDto(
//            items: array_map(function ($data) {
//                return [
//                    'id' => $data->id,
//                    'name' => $data->name,
//                    'description' => $data->description,
//                    'is_active' => $data->is_active,
//                ];
//            }),
//            total: $categories->total(),
//            lastPage: $categories->lastPage(),
//            firstPage: $categories->firstPage(),
//            currentPage: $categories->currentPage(),
//            perPage: $categories->perPage(),
//            to: $categories->to(),
//            from: $categories->from(),
//        );
    }
}
