<form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url(); ?>">
    <fieldset class="clearfix">
        <input type="search" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Encontre o que você procura&hellip;">

        <input type="submit" value="">
    </fieldset>
</form>
