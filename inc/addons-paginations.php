<?php
/**
 * Bootstrap Pagination
 * 
 * @package otherways Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

function otherways_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged))
        $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        
        if (!$pages) {
            $pages = 1;
        }
    }
    
    if (1 != $pages) {
        echo '<nav aria-label="' . __('Navigasi Halaman', 'otherways') . '" role="navigation">';
        echo '<span class="sr-only">' . __('Navigasi Halaman', 'otherways') . '</span>';
        echo '<ul class="pagination justify-content-center">';
        
        echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">' . __('Halaman', 'otherways') . ' ' . $paged . ' ' . __('Dari', 'otherways') . ' ' . $pages . '</span></li>';
        
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '" aria-label="' . __('Halaman Pertama', 'otherways') . '">&laquo;<span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';
        
        if ($paged > 1 && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '" aria-label="' . __('Halaman Sebelumnya', 'otherways') . '">&lsaquo;<span class="hidden-sm-down d-none d-md-block"> Previous</span></a></li>';
        
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems))
                echo ($paged == $i) ? '<li class="page-item active"><span class="page-link"><span class="sr-only">' . __('Halaman Saat Ini', 'otherways') . ' </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
        }
        
        if ($paged < $pages && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged + 1) . '" aria-label="' . __('Halaman Selanjutnya', 'otherways') . '"><span class="hidden-sm-down d-none d-md-block">Next </span>&rsaquo;</a></li>';
        
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="' . __('Halaman Terakhir', 'otherways') . '"><span class="hidden-sm-down d-none d-md-block">Last </span>&raquo;</a></li>';
        
        echo '</ul>';
        echo '</nav>';
        echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">' . __('Halaman', 'otherways') .'</span> '.$paged.' <span class="text-muted">'.__('Dari', 'otherways').'</span> '.$pages.' ]</div>';	 	
    }
}
