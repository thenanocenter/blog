<?php
$categoryName = null;
$category = get_the_category();
if(!empty($category)){
    $categoryName = $category[0]->cat_name;
}
?>
<div class="meta">
  <span class="author-container">
  {{ __('Written By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    <strong>{{ get_the_author() }}</strong>
  </a>
  </span>
  @if(!empty($categoryName))
  <span class="category-container">
    in <strong>{{ $categoryName }}</strong>
  </span>
  @endif
  <span class="date-container">
    on <strong><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></strong>
  </span>
</div>
