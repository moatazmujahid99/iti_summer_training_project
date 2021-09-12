# important Notes


### how to get the last changes from remote repo on main branch to your local repo on your development branch
1- now you are on your development branch ex:"feature_1" on local repo
2- git fetch origin
3- git merge origin/main

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


