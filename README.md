# important Notes

## How to work together ^_^

<br> 

### step 1:
clone project to your computer using

- `git clone https://github.com/moatazmujahid99/our_project.git`

<br>

### step 2:
get into project using  `cd our_project` command.

<br>

### step 3:
do the following commands <br>
- `cp .env.example .env` <br>
- go to .env file and make *DB_DATABASE=facebook_app* <br>
- `php artisan key:generate` <br>
- `php artisan migrate` *( dont forget to start apache and MySQL form XAMPP )* <br>
- `php artisan serve` <br>

after that go to link localhost:8000 and make sure every thing work correctly

<br>

### step 4:
now we are at master branch and we need to creat new branch for our task to do this <br> 
first we creat new branch using <br>
- `git branch [branch_name]` ex : `git branch api` <br>
  
second we go to this branch using <br>
- `git checkout [branch_name]` ex : `git checkout api`

<br>

### step 5:
now after finshing our task we need to push our work to our branch <br>
*note: we push to development branch not master branch so if any thing go wrong our master wont affected by it* <br>
we do this using
- `git push origin [branch_name]`

<br>

---

<br>

### how to get the last changes from remote repo on main branch to your local repo on your development branch
1. now you are on your development branch ex:"feature_1" on local repo
2. git fetch origin
3. git merge origin/main
4. php artisan migrate:fresh

### How to get data from models

##### Get all the comments of specific post:
```
$post->comments;
```

##### Get the user who created a comment
```
foreach($post->comments as $comment)
    $comment->user;
```

##### Get all the posts of specific user:
```
$user->posts;
```

### Get all the comments of each user's post
```
foreach($user->posts as $post)
    $post->comments;
```
