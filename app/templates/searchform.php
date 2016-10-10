<form class="searchform" role="search" method="get" action="<?php echo home_url(); ?>">
  <fieldset class="clearfix">
    <input class="searchform__input" type="search" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Find what you're looking for&hellip;">
    <button class="searchform__submit" type="button">Search</button>
  </fieldset>
</form>
