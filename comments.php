<ol>
  <?php
    //Comentários 
    $comments = get_comments(array(
      'post_id' => XXX,
      'status' => 'approve' //Tipo de Comentário
    ));

    //Display the list of comments
    wp_list_comments(array(
      'per_page' => 10, //Allow comment pagination
      'reverse_top_level' => false //Show the oldest comments at the top of the list
    ), $comments);
  ?>
</ol>

<?php
$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Responder',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => 
        '<p class="comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);


?>

