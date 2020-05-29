## Code

All the code in Modules Folder
to manage your large Laravel app using modules. Module is like a Laravel package.
## Binding

Binding My interfaces for autowiring in 
Modules/Posts/Providers/BindingServiceProvider.php

## Request life cycle 

    Requests -> Input Validation (Modules/Posts/Http/Requests/)
    Controller (Modules/Posts/Http/Controllers/)
    Services -> business logic (Modules/Posts/Services)
    Repository -> Interact with models (Modules/Posts/Repositories)
    Entities (Models) (Modules/Posts/Enities)
    Response -> Response Builder (Modules/Posts/Http/Responses)

## Commands
    composer install
    php artisan module:migrate Posts
    php artisan module:seed Posts
## Routes
    +--------+----------+------------------------+-----------------+--------------------------------------------------------+--------------+
    | Domain | Method   | URI                    | Name            | Action                                                 | Middleware   |
    +--------+----------+------------------------+-----------------+--------------------------------------------------------+--------------+
    |        | GET      | api/v1/posts           | posts.all       | Modules\Posts\Http\Controllers\PostsController@all     | api          |
    |        | POST     | api/v1/posts           | posts.create    | Modules\Posts\Http\Controllers\PostsController@create  | api          |
    |        | PUT      | api/v1/posts/{post_id} | posts.update    | Modules\Posts\Http\Controllers\PostsController@update  | api          |
    |        | GET      | api/v1/posts/{post_id} | posts.get.by.id | Modules\Posts\Http\Controllers\PostsController@getById | api          |
    |        | DELETE   | api/v1/posts/{post_id} | posts.delete    | Modules\Posts\Http\Controllers\PostsController@delete  | api          |
    +--------+----------+------------------------+-----------------+--------------------------------------------------------+--------------+
## note 
Don't Forget add your database config in .env file
