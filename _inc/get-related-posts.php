<?php
global $post;
$total_posts = !empty(get_option('_rp_number')) ? get_option('_rp_number') : '4';
$relate_by = !empty(get_option('_rp_according_to')) ? get_option('_rp_according_to') : 'category';
$according_to = !empty(get_option('_rp_according_to')) ? get_option('_rp_according_to') : 'rand';
if ($relate_by == 'category') {
    $cats = get_the_category($post->ID);
    $cat_id = '';
    foreach ($cats as $cat) $cat_id .= $cat->cat_ID . ',';
    /*   echo $cat_id;*/
    $args = [
        'post_type' => 'post',
        'post_per_page' => $total_posts,
        'cat' => $cat_id,
        'orderby' => $according_to,
        'post__not_in' => [$post->ID],
        /*      'status' => 'publish'*/
    ];
} elseif ($relate_by == 'tags') {
    $tags = wp_get_post_tags($post->ID);
    $tags_id = [];
    foreach ($tags as $tag) $tags_id[] = $tag->term_id;
    $args = [
        'post_type' => 'post',
        'post_per_page' => $total_posts,
        'tag__in' => $tags_id,
        'orderby' => $according_to,
        'post__not_in' => [$post->ID],
    ];
}