<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form id="Gosheng_searchForm" role="<?php esc_attr_e( '搜索', 'GoSheng-framework' ); ?>">
    <label class="sr-only" for="s"><?php esc_html_e( '搜索', 'GoSheng-framework' ); ?></label>
    <div class="input-group">
        <input class="field form-control" type="text" name="s" id="s" autocomplete="off" required="required"
               value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e( '要搜索的内容', 'GoSheng-framework' ); ?>">
        <span class="input-group-append">
                <input class="submit btn btn-primary" id="searchSubmit" type="submit" formmethod="get"
                       formaction="<?php echo esc_url( home_url( '/' ) ); ?>"
                       value="<?php esc_attr_e( '搜索', 'GoSheng-framework' ); ?>">
        </span>
    </div>
    <ul id="search_history" role="<?php esc_attr_e( '搜索记录', 'GoSheng-framework' ); ?>">
        <li><?php esc_html_e( '最近搜索:', 'GoSheng-framework' ) ?></li>
    </ul>
</form>
