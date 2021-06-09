<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
    
}

function testAddTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    
    
    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    
    
    echo $todolistService->removeTodolist(4);
    echo $todolistService->removeTodolist(5);
    echo $todolistService->removeTodolist(6);
}

testShowTodolist();