<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use DateTime;
use WP_Query;

class Job extends Controller
{
  public static function jobs()
  {
    $args = ['post_type' => 'jobs' ];
    $job = new WP_Query( $args );
    return $job;
  }

  public static function company_name($id)
  {
    return get_post_meta($id, 'job_company_name', true);
  }

  public static function company_website($id)
  {
    return get_post_meta($id, 'job_company_website', true);
  }

  public static function city($id)
  {
    $location = get_post_meta($id, 'job_location', true);
    return $location['job_city'];
  }

  public static function country($id)
  {
    $location = get_post_meta($id, 'job_location', true);
    return $location['job_country'];
  }

  public static function start_date($id)
  {
    return App::end_date($id,'job_period','job_start_date');
  }

  public static function end_date($id)
  {
    return App::end_date($id,'job_period','job_end_date');
  }

  public static function percentage($id)
  {
    $period = get_post_meta($id, 'job_period', true);
    return $period['job_percentage'];
  }


}
