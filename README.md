# Blog CRUD Application
This project is a simple CRUD application for managing blog. It provides fundatmentals CRUD(Create, Read, Update,Delete) functionalities, allowing users to efficiently create new blog posts, view existing posts, update contents and delete the posts. With its user-friendly interface, this project aims to simplify blog management and enhance content control for users.

# SetUp and Initialize Project

### 1. Ensure Your Development Environment is Set Up
- Install [Visual Studio Code]
- Install [Composer]
- Install [Laravel]
- Install [SQLYOG]
- Install [Node.js]

### 2. Create a GitHub Repository for Laravel Project
- Go to [GitHub](https://github.com) and create a new repository.

### 3. Create a New Laravel Project and Set Up Version Control with Git and GitHub

- composer create-project laravel/laravel Assignment1_ksingh41
- composer global require laravel/installer
- Open Command Prompt
- cd laragon\www\Assignment1_ksingh41
- git init
- git remote add origin https://github.com/karuna-une/Assignment1_ksingh41
- git add .
- git commit -m "Initial commit"
- git push -u origin master

# Create Database and Configure Laravel
- Create database name in SQLYOG 
- Configure the .env File with Database Details


# Route
### 1. Resource Routes for Posts in 'wep.php'
Laravel makes it easy to create resource routes and these routes map the standard CRUD operations to controller actions.
- Route::resource('posts',PostController::class);
- Route::resource('photos',PhotoController::class);

# Post Controller and Photo Controller
### 1. Generate PostController and implement CRUD operations
- Edit the generated controller app/Http/Controllers/PostController.php to implement CRUD operations (index, create, store, show, edit, update, destroy)
- php artisan make:controller PostController --resource

# Models and Migrations
### 1. Generate the Post Model and Create the Migration for the Posts Table\
- php artisan make:model Post -m

### 2. Migration to setup the database table
- php artisan migrate

# Factory and Seeder
### 1. Generate Post Factory and Post Seeder and Seed in Database Table
- Factories and seeders helps to genertae the dummy data for testing and development purposes
- php artisan make:factory PostFactory --model=Post
- php artisan make:seeder PostSeeder

# Create Posts(Actions)
### 1. Create blade template under posts folder 
- create.blade.php (For listing posts)
- delete.blade.php (For deleting posts)
- edit.blade.php (For editing posts)
- show.blade.php (For viewing posts)

# Testing
- Test each functionality by creating, viewing, deleting and updating.

# Author
Karuna Singh
220279765




