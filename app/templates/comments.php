<?php if ( post_password_required() ) return; ?>

<div class="comments" id="comments">
  <?php if ( have_comments() ) : ?>
    <h3 class="comments__title">
      <?php
        printf(
          _nx(
            'One thought about &ldquo;%2$s&rdquo;',
            '%1$s thoughts about &ldquo;%2$s&rdquo;',
            get_comments_number(),
            'comments title',
            '<%= themeKebabName %>'
          ),
          number_format_i18n( get_comments_number() ),
          '<span>' . get_the_title() . '</span>'
        );
      ?>
    </h3>

    <ol class="comments__list">
      <?php
        wp_list_comments( array(
          'style'           => 'ol',
          'short_ping'      => true,
          'avatar_size'     => 50,
          'per_page'        => 5,
        ) );
      ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="comments__pager clearfix" role="navigation">
        <span class="comments__page comments__page--prev">
          <?php previous_comments_link( '&larr; Older comments' ); ?>
        </span>
        <span class="comments__page comments__page--next">
          <?php next_comments_link( 'Recent comments &rarr;' ); ?>
        </span>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

  <h4 class="comment__reply-to">
    <?php comment_form_title( 'Leave a Comment', 'Leave a Comment about %s', false ); ?>
  </h4>

  <?php
    comment_form( array(
      'label_submit'  => 'Leave a Comment',
      'format'        => 'html5',
    ) );
  ?>
</div>
