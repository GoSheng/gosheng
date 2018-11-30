<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'd-flex justify-content-start align-items-center border rounded shadow-sm bg-light mb-1 mb-lg-2' ); ?>>
    <div class="col-3 p-1 rounded">
        <a href="<?php GoSheng_posted_permalink() ?>" class="d-block rounded"
           title="<?php GoSheng_posted_title( 100 ); ?>">
            <img class="rounded img-fluid" src="<?php GoSheng_posted_thumbnail_url(); ?>"
                 alt="<?php GoSheng_posted_title( 100 ); ?>">
        </a>
        <span class="d-none d-lg-block p-absolute t-2 l-2 px-1 py-0 rounded bg-secondary lh-lg-2 text-white-50"><?php GoSheng_posted_category(); ?></span>
    </div>
    <div class="col-9 p-1">
        <h5 class="p-absolute b-0 b-lg-4">
            <a class="text-body font-8 font-lg-9" title="<?php GoSheng_posted_title( 100 ); ?>"
               href="<?php GoSheng_posted_permalink(); ?>"><?php GoSheng_posted_title(); ?></a>
        </h5>
        <div class="px-2 p-absolute d-none d-lg-block b--2 text-indent text-muted font-6 font-lg-7">
            <span><?php GoSheng_posted_excerpt(80); ?></span>
        </div>
        <div class="p-absolute t-0 t-lg-4 d-flex justify-content-start align-items-center">
            <span class="mr-1 mr-lg-2">
                <i class="text-dark text-muted font-5 font-lg-6 fas fa-clock"></i>
                <span class="font-5 font-lg-6"><?php GoSheng_posted_time( 1 ); ?></span>
            </span>
            <span class="mr-1 mr-lg-2">
                <i class="text-dark text-muted font-5 font-lg-6 fas fa-eye"></i>
                <span class="font-5 font-lg-6"><?php GoSheng_posted_views( 1 ); ?></span>
            </span>
            <span class="mr-1 mr-lg-2">
                <i class="text-dark text-muted font-5 font-lg-6 fas fa-comment-dots"></i>
                <span class="font-5 font-lg-6"><?php GoSheng_posted_comment_number( 1 ); ?></span>
            </span>
        </div>
    </div>
</div>
