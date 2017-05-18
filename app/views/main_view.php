<h1>View all posts</h1>
<?php

    foreach ($data as $pet) {
        $id = $pet['id'];
        echo $id . '. ';
        print_r($pet);
        echo '<a href="/pets/delete/'.$id.'">delete</a> ';
        echo '<a href="/pets/update/'.$id.'">update</a>';
        echo '<br>';
    }

?><br>
<a href="/pets/create">Create new post</a>
