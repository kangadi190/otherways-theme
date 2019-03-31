<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link nav-link-hover active" id="pills-wp-tab" data-toggle="pill" href="#pills-wp-comments" role="tab" aria-controls="pills-wp-comments" aria-selected="true"><i class="fab fa-wordpress"></i> <?php echo __( 'WordPress', 'otherways' ); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav-link-hover" id="pills-disqus-comment-tab" data-toggle="pill" href="#pills-disqus-comment" role="tab" aria-controls="pills-disqus-comment" aria-selected="false"><i class="fas fa-comment-alt"></i> <?php echo __( 'Disqus', 'otherways' ); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav-link-hover" id="pills-facebook-tab" data-toggle="pill" href="#pills-facebook" role="tab" aria-controls="pills-facebook" aria-selected="false"><i class="fab fa-facebook"></i> <?php echo __( 'Facebook', 'otherways' ); ?></a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-wp-comments" role="tabpanel" aria-labelledby="pills-wp-tab">
    <section id="main-comments-body wordpress-comments">
      <h3><?php echo __( 'Berikan Tanggapan Anda!', 'otherways' ); ?></h3>
      <?php comments_number(); ?>

      <?php if ( post_password_required() ): ?>
          <div class="alert alert-danger">
              <h1><?php echo __( 'Peringatan Keras!', 'otherways' ); ?></h1>
              <p><?php echo __( 'Halaman yang sedang anda kunjungi saat ini membutuhkan verifikasi data kata sandi untuk berkomentar di halaman atau posting ini!', 'otherways' ); ?></p>
          </div>
      <?php else : ?>
          <div class="body-comments">
              <?php get_template_part('/parts/comments', 'wp'); ?>
          </div>
      <?php endif; ?>
    </section>
  </div>
  <div class="tab-pane fade" id="pills-disqus-comment" role="tabpanel" aria-labelledby="pills-disqus-comment-tab">
    <div class="card bg-info -lg">
      <div class="card-header bg-white">
        <h3 class="m-0"><?php echo __('Informasi', 'otherways'); ?></h3>
      </div>
      <div class="card-body text-white">
        <p><?php echo __('Maaf, fitur ini akan hadir di versi yang akan mendatang', 'otherways'); ?></p>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-facebook" role="tabpanel" aria-labelledby="pills-facebook-tab">
    <div class="card bg-info -lg">
      <div class="card-header bg-white">
        <h3 class="m-0"><?php echo __('Informasi', 'otherways'); ?></h3>
      </div>
      <div class="card-body text-white">
        <p><?php echo __('Maaf, fitur ini akan hadir di versi yang akan mendatang', 'otherways'); ?></p>
      </div>
    </div>
  </div>
</div>
