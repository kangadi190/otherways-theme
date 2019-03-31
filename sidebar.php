<aside class="sidebar-main" id="main-left">
  <?php if ( is_active_sidebar( 'sidebar' ) ): ?>
    <div class="main-content">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  <?php else: ?>
    <section id="widget-1">
      <h3><?php echo __('Ini Contoh Widget', 'otherways'); ?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>
    <section id="widget-2">
      <h3><?php echo __('Kategori Contoh', 'otherways'); ?></h3>
      <ul class="list-group">
        <li class="list-group-item"><i class="fas fa-folder"></i> <?php echo __('Teknologi', 'otherways'); ?></li>
        <li class="list-group-item"><i class="fas fa-folder"></i> <?php echo __('Informasi', 'otherways'); ?></li>
        <li class="list-group-item"><i class="fas fa-folder"></i> <?php echo __('Gadget', 'otherways'); ?></li>
        <li class="list-group-item"><i class="fas fa-folder"></i> <?php echo __('Pemrograman', 'otherways'); ?></li>
      </ul>
    </section>
  <?php endif; ?>
</aside>
