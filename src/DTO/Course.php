<?php
namespace App\DTO;

class Course
{
    public function __construct(
        private string $name,
        private float $price,
        private string $synopsis,
        private string $description,
        private Author $author,
        private Category $category,
    ) {}

    // Getters
    public function getName(): string { return $this->name; }
    public function getPrice(): float { return $this->price; }
    // ... autres getters
}
