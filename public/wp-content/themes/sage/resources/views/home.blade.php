@extends('layouts.app')

@section('content')

  <div class="section-featured-and-last">
    <div class="flex justify-between">
      <div class="flex-1 pr-4">
        <div class="rounded bg-blue text-white p-8">
          FEATURED ARTICLE
        </div>
      </div>
      <div style="min-width:300px;">
        <div class="rounded bg-blue-light text-white p-8">
          LAST ARTICLE
        </div>
      </div>
    </div>
  </div>

  <h2>Latest Articles</h2>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
<div class="teaser-collection">
  @while (have_posts()) @php the_post() @endphp
  <div class="teaser-column-container">
    @include('partials.content-'.get_post_type())
  </div>
  @endwhile
</div>




  {!! get_the_posts_navigation() !!}
@endsection
