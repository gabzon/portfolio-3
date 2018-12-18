<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use DateTime;
use WP_Query;

class Project extends Controller
{
  public static function projects()
  {
    $args = [
      'post_type' => 'project',
      'posts_per_page' => -1
    ];

    $project = new WP_Query( $args );
    return $project;
  }

  public static function category_projects($cat)
  {
    $args = [
      'post_type' => 'project',
      'posts_per_page' => -1,
      'category_name' => $cat,
    ];

    $project = new WP_Query( $args );
    return $project;
  }

  public static function drafts()
  {
    $args = [
      'post_type'       => 'project',
      'posts_per_page'  => -1,
      'post_status'     => 'draft',
    ];
    $drafts = new WP_Query( $args );
    return $drafts;
  }

  public static function job_title($id)
  {
    return get_post_meta($id,'project_job_title',true);
  }

  public static function city($id)
  {
    $location = get_post_meta($id,'project_location', true);
    return $location['project_city'];
  }

  public static function country($id)
  {
    $location = get_post_meta($id,'project_location', true);
    return $location['project_country'];
  }

  public static function location($id)
  {
    $location = get_post_meta($id,'project_location', true);

    $city = $location['project_city'];
    $country =  $location['project_country'];

    if ($city and $country) {
      return $city . ', ' . $country;
    }

    if ($city or $country) {
      return $city . $country;
    }
  }

  public static function start_date($id)
  {
    return App::start_date($id, 'project_period', 'project_start_date');
  }

  public static function end_date($id)
  {
    return App::end_date($id, 'project_period', 'project_end_date');
  }

  public static function gallery($id)
  {
    return get_post_meta($id,'project_photo_gallery',true);
  }

  public static function links($id)
  {
    $links = [
      'website' => get_post_meta($id,'project_website',true),
      'facebook' => get_post_meta($id,'project_facebook',true),
      'twitter' => get_post_meta($id,'project_twitter',true),
      'google_plus' => get_post_meta($id,'project_gplus',true),
      'instagram' => get_post_meta($id,'project_instagram',true),
      'pinterest' => get_post_meta($id,'project_pinterest',true),
      'youtube' => get_post_meta($id,'project_youtube',true),
      'vimeo' => get_post_meta($id,'project_vimeo',true),
    ];
    return $links;
  }

}
