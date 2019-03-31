
    <figure id="footer-main" class="m-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footersep.svg" width="100%" style="margin-bottom: -5px; z-index: -1">
    </figure>
    <footer id="footer-global">
        <div id="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ( is_active_sidebar( 'footer-left' ) ) { ?>
                        <div class="footer-widgets" id="footer-left">
                          <?php dynamic_sidebar('footer-left'); ?>
                        </div>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/logo-main-light.png" width="100%"/>
                        <p>Jl. Brigjend Katamso, RT 003/02, No. 03, Munggut, Padas, Ngawi Regency, East Java 63281</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-paper-plane"></i> <a href="mailto:admin@adiboocreative.xyz">admin@adiboocreative.xyz</a> </li>
                            <li><i class="fas fa-phone"></i> <a href="tel:081234771365">+62 812-3477-1365</a> </li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                        <?php if ( is_active_sidebar( 'footer-middle-left' ) ) { ?>
                        <div class="footer-widgets" id="footer-middle-left">
                          <?php dynamic_sidebar('footer-middle-left'); ?>
                        </div>
                        <?php } else { ?>
                        <h3>Tentang Kami</h3>
                        <ul class="list-unstyled">
                          <li> <a href="">Tentang Kami</a> </li>
                          <li> <a href="">Karir</a> </li>
                          <li> <a href="">Syarat Dan Ketentuan</a> </li>
                          <li> <a href="">Hubungi Kami</a> </li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                        <?php if ( is_active_sidebar( 'footer-middle-right' ) ) { ?>
                        <div class="footer-widgets" id="footer-middle-right">
                          <?php dynamic_sidebar('footer-middle-right'); ?>
                        </div>
                        <?php } else { ?>
                        <h3>Produk</h3>
                        <ul class="list-unstyled">
                          <li> <a href="">Jasa Desain</a> </li>
                          <li> <a href="">Jasa Website Maintenance</a> </li>
                          <li> <a href="">Jasa Website Developer</a> </li>
                        </ul>
                        <h3>Link Lain</h3>
                        <ul class="list-unstyled">
                          <li> <a href="">Masuk</a> </li>
                          <li> <a href="">Mendaftar</a> </li>
                          <li> <a href="">Lupa Kata Sandi?</a> </li>
                          <li> <a href="">Dukungan</a> </li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                        <?php if ( is_active_sidebar( 'footer-middle-right' ) ) { ?>
                        <div class="footer-widgets" id="footer-middle-right">
                          <?php dynamic_sidebar('footer-middle-right'); ?>
                        </div>
                        <?php } else { ?>
                        <h3>Didukung Oleh</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/le-seal.png" width="100%">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom-footer">
          <div class="container">
            <hr class="mb-3" style="background:#9a9a9a">
            <div class="row">
              <div class="col-md-6">
                <p class="m-0"><?php printf( __('Hak Cipta %s <a href="%s">%s</a>. Hak Cipta Dilindungi Undang-Undang.', 'otherways'), date('Y'), home_url(), get_bloginfo('name') ); ?></p>
              </div>
            </div>
          </div>
        </div>
    </footer>

<?php echo wp_footer(); ?>
</body>
</html>
