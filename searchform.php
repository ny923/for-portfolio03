<form method="get" id="search-kw" action="<?php echo home_url('/'); ?>">
  <input type="text" name="s" id="search-input" value="<?php the_search_query(); ?>" placeholder="検索内容を入力してください" />
  <input type="hidden" name="post_type" value="property">
  <button type="submit" accesskey="f" class="solid-button">検索</button>
</form>