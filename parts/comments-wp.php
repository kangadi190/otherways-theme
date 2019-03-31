<?php
/**
 * Comments WordPress
 * By OtherWays Themes
 *
 * @author Adiboo Creative Karya Mandiri
 * @since  1.0.0
 */

if (have_comments()) { ?>
  <?php wp_list_comments();
  paginate_comments_links(); ?>
<?php
}
else { ?>
  <div class="alert alert-info">
    <h3><?php
  echo __('Masih Belum Ada Komentar!', 'otherways'); ?></h3>
    <p><?php
  echo __('Jadilah yang pertama untuk memberikan sebuah komentar di artikel ini!', 'otherways') ?></p>
  </div>
<?php
} ?>
<?php
/*
* Adding bootstrap support to comment form,
* and some form validation using javascript.
*/
ob_start();
$commenter = wp_get_current_commenter();
$req = true;
$aria_req = ($req ? " aria-required='true'" : '');
$comments_arg = array(
  'form' => array(
    'class' => 'form-horizontal'
  ) ,
  'fields' => apply_filters('comment_form_default_fields', array(
    'autor' => '<div class="form-group">' . '<label for="author">' . __('Nama', 'otherways') . '</label> ' . ($req ? '<span class="text-danger">*</span>' : '') . '<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' />' . '</div>',
    'email' => '<div class="form-group">' . '<label for="email">' . __('Email', 'otherways') . '</label> ' . ($req ? '<span class="text-danger">*</span>' : '') . '<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' />' . '</div>',
    'url' => ''
  )) ,
  'comment_field' => '<div class="form-group">' . '<label for="comment">' . __('Komentar Anda', 'otherways') . '</label><span class="text-danger">*</span><textarea id="comment" class="form-control" name="comment" rows="10" aria-required="true"></textarea><p id="d3" class="text-danger"></p>' . '</div>',
  'comment_notes_after' => '',
  'class_submit' => 'btn btn-primary btn-hover-shadow-lg'
); ?>
	<?php
comment_form($comments_arg);
echo str_replace('class="comment-form"', 'class="comment-form" name="commentForm" onsubmit="return validateForm();"', ob_get_clean());
?>
