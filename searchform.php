<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form id="Gosheng_searchForm" role="<?php esc_attr_e( '搜索', 'GoSheng-framework' ); ?>">
    <label class="sr-only" for="s"><?php esc_html_e( '搜索', 'GoSheng-framework' ); ?></label>
    <div class="input-group">
        <!--<div class="input-group-prepend">-->
        <!--<label for="s" class="input-group-text border-secondary"><i class="fas fa-search"></i></label>-->
        <!--</div>-->
        <input class="form-control border-secondary" type="text" name="s" id="s" autocomplete="off" required="required"
               value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e( '要搜索的内容', 'GoSheng-framework' ); ?>">
        <span class="input-group-append">
            <button class="btn btn-outline-secondary" id="searchSubmit" type="submit" formmethod="get"
                    formaction="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-search"></i></button>
        </span>
    </div>
    <ul id="search_history" class="border border-secondary border-top-0 rounded-bottom"
        role="<?php esc_attr_e( '搜索记录', 'GoSheng-framework' ); ?>">
        <li><?php esc_html_e( '最近搜索:', 'GoSheng-framework' ) ?></li>
    </ul>
</form>
