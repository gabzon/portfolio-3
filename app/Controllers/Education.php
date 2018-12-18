<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use DateTime;
use WP_Query;

class Education extends Controller
{
  public static function diplomas()
  {
    $args = ['post_type' => 'education' ];
    $education = new WP_Query( $args );
    return $education;
  }

  public static function start_period($id)
  {

    $school_period = get_post_meta($id, 'education_period', true);
    $start_month = substr($school_period['school_start_date'],0,2);
    $start_year = substr($school_period['school_start_date'],6);
    return date("M Y", mktime(0, 0, 0, $start_month, 1, $start_year));

  }

  public static function end_period($id)
  {
    $school_period = get_post_meta($id, 'education_period', true);
    $d = substr($school_period['school_end_date'],3,2);
    $m = substr($school_period['school_end_date'],0,2);
    $y = substr($school_period['school_end_date'],6);

    $period_date = $y . '-' . $m . '-' .  $d;
    $official_period = new DateTime($period_date);
    $today = new DateTime();
    if ( $official_period < $today ){
      return date("M Y", mktime(0, 0, 0, $m, 1, $y));
    }else{
      return __('Currently','sage');
    }
  }

}
