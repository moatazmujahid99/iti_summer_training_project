#Notes
##How to get data from models

###Get all the comments of specific post:
```
$post->comments;
```

###Get the user who created a comment 
```
foreach($post->comments as $comment)
    $comment->user;
```

###Get all the posts of specific user:
```
$user->posts;
```

###Get all the comments of each user's post 
```
foreach($user->posts as $post)
    $post->comments;
```


