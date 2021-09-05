<form class="l-header__right p-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="p-search-form__box"  type="search" placeholder="" name="s" id="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
    <input class="p-search-form__button"  type="submit" value="検索">
</form>