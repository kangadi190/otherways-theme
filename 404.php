<?php
/**
 * OtherWays Theme WordPress
 * WordPress Theme For Blog
 *
 * @since 1.0.0
 * @build 26 March 2019
 * @author Adiboo Creative Karya Mandiri
 */

get_header(); ?>

<div class="container my-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <h1 class="display-1 text-center" style="font-weight: 800">404</h1>
      <h1 class="text-center"><?php echo __('Kesalahan Server!', 'otherways'); ?></h1>
      <pre class="text-center">Status Kesalahan: <code class="badge-danger badge">404</code></pre>

      <p class="text-center"><?php echo __('Kami meminta maaf apabila halaman yang sedang anda kunjungi saat ini sedang tidak dapat kami berikan. Karena halaman ini mungkin telah dihapus oleh administrator terkait. Mohon periksa kembali pengejaan URL anda.', 'otherways'); ?></p>
      <div class="text-center">
        <a href="<?php echo home_url(); ?>" class="btn btn-hover-shadow-md btn-outline-primary"><?php echo __('Kembali Ke Beranda', 'otherways'); ?></a>
        <button type="button" class="btn btn-primary btn-hover-shadow-md" data-toggle="modal" data-target="#otherwaysSearchModal"><?php echo __('Buka Popup Pencarian', 'otherways'); ?></button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Pencarian -->
<div class="modal fade" id="otherwaysSearchModal" tabindex="-1" role="dialog" aria-labelledby="otherwaysSearchModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="otherwaysSearchModalTitle"><?php echo __('Ingin Mencari Apa?', 'otherways'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php echo get_footer(); ?>
