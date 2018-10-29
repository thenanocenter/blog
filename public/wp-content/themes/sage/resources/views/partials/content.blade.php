<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<article @php post_class('teaser') @endphp>
  <a class="thumbnail-container" href="{{ get_permalink() }}" @if(has_post_thumbnail()) style="background-image: url('<?php echo $backgroundImg[0]; ?>');"@endif></a>
  <div class="content-inner">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
  <div class="footer">
    <div>
      <span>
        {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author">
          {{ get_the_author() }}
        </a>
      </span>
    </div>
    <div>
      <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </div>
    <div>
      <?php echo do_shortcode('[rt_reading_time label="" postfix=""]'); ?> Min Read
    </div>
  </div>
</article>
