<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use DateTime;


class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function age()
    {
        $theme_options = get_option('my_theme_settings');
        $dob = substr($theme_options['birthday'],6) . "-" . substr($theme_options['birthday'],0,2) . "-" . substr($theme_options['birthday'],3,2) ;
        $birth_date = new DateTime($dob);
        $today = new DateTime();
        return $birth_date->diff($today)->y;
    }

    public static function print_tags($id)
    {
      $posttags = get_the_tags($id);
      if ($posttags) {
        foreach($posttags as $tag) {
          echo $tag->slug . ' ';
        }
      }
    }

    public static function start_date($id, $period, $field)
    {
      $period = get_post_meta($id, $period, true);
      $start_month = substr($period[$field],0,2);
      $start_year = substr($period[$field],6);
      return date("M Y", mktime(0, 0, 0, (int)$start_month, 1, (int)$start_year));
    }

    public static function end_date($id, $period, $field)
    {
      $period = get_post_meta($id, $period);
      if ( $period[0][$field] ) {
        $end_month = substr($period[0][$field],0,2);
        $end_year = substr($period[0][$field],6);
        return date("M Y", mktime(0, 0, 0, (int)$end_month, 1, (int)$end_year));
      } else {
        return __('Currently','sage');
      }
    }

    public static function driver_licence()
    {
      $theme_options = get_option('my_theme_settings');
      switch ($theme_options['driving_license']) {
        case -1:
          return 'None';
          break;
        case 0:
          return 'Moto';
          break;
        case 1:
          return 'Car';
          break;
        case 2:
          return 'Car + Moto';
          break;
        case 3:
          return 'Car + Truck';
          break;
        case 4:
          return 'Moto + Car + Truck';
          break;
        default:
          return 'None';
          break;
      }
    }

    public static function social()
    {
      $theme_options = get_option('my_theme_settings');
      $social = [
        'facebook'    => $theme_options['main_facebook_link'],
        'twitter'     => $theme_options['main_twitter_link'],
        'linkedin'    => $theme_options['main_linkedin_link'],
        'google_plus' => $theme_options['main_gplus_link'],
        'pinterest'   => $theme_options['main_pinterest_link'],
        'instagram'   => $theme_options['main_instagram_link'],
        'vimeo'       => $theme_options['main_vimeo_link'],
        'youtube'     => $theme_options['main_youtube_link'],
        'skype'       => $theme_options['main_skype_link'],
      ];
      return $social;
    }
}
