# important Notes

## How to get project and test it

<br> 

### step 1:
clone project to your computer using

- `git clone https://github.com/moatazmujahid99/iti_summer_training_project.git`

<br>

### step 2:
get into project using  `cd iti_summer_training_project` command.

<br>

### step 3:
do the following commands <br>
- `cp .env.example .env` <br>
- go to .env file and make *DB_DATABASE=facebook_app* <br>
- - create a database called **facebook_app** in mysql
- `php artisan key:generate` <br>
- `php artisan migrate` *( dont forget to start apache and MySQL form XAMPP )* <br>
- `php artisan serve` <br>

after that go to link localhost:8000 and make sure every thing work correctly

<br>

## How to work together as a team ^_^

<br>

### step 1:
now we are at master branch and we need to creat new branch for our task to do this <br> 
first we creat new branch using <br>
- `git branch [branch_name]` ex : `git branch api` <br>
  
second we go to this branch using <br>
- `git checkout [branch_name]` ex : `git checkout api`

<br>

### step 2:
now after finshing our task we need to push our work to our branch <br>
*note: we push to our branch not master branch so if any thing go wrong our master wont affected by it* <br>
we do this using :
- `git push origin [branch_name]`

### step 3:
Finally after finishing all the tasks and test it well, now we are ready to merge our branch with development branch 
we do this using :
- `git checkout development`
- `git merge [branch_name]`

<br>

---

<br>

## How to use API

<br>

first we got to `/api/sanctum/token` and create token by providing email and password in url body 

second we use this urls to get what we want :


- `/api/users`
  - return all users

- `/api/users/{id}/posts`
  - return all posts for specific user
  
- `/api/posts`
  - return all posts

- `/api/posts/{id}/comments`
  - return all comments for specific post

