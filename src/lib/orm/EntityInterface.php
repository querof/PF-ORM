<?php

namespace lib\orm;

use lib\util\CollectionInterface;

interface EntityInterface
{
    public function new(): void;
    public function delete(Int $id): void;
    public function save(): void;
    public function find(Int $id): void;
    public function search(CollectionInterface $parameters): void;
    public function getFields(): CollectionInterface;
    public function getChildren(): CollectionInterface;
    public function getParents(): CollectionInterface;
}