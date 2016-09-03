<section class="comments">
<?php 
$comment_form_args = array(
	'title_reply' => 'コメント投稿フォーム',
	'comment_notes_before' => '',
);
comment_form($comment_form_args);
echo 'have_comments() return: ' . have_comments(). '<br />';
if ( have_comments() ) : 
?>
    <p><?php comments_number(); ?></p>
    <ol class="commentlist">
        <?php
        $wp_list_comments_args = array(
        	'avatar_size' => '50',
        );
        wp_list_comments( $wp_list_comments_args );
        ?>
    </ol>
<?php 
paginate_comments_links();
endif;
?>
</section><!-- /.comments -->