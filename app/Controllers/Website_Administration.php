<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Website_Administration extends Controller
{

  public $request;
  public $admin;

  function __construct(){
    $this->request = "
    Email requesting content -Title<br>
    <ul>
    <li>Hosting Access (server/login/password)</li>
    <li>FTP access (server/login/password)</li>
    <li>Tagline </li>
    <li>Prefered language</li>
    <li>Date/time</li>
    <li>List of users</li>
    <li>Sitemap </li>
    <li>Page titles</li>
    <li>Page content</li>
    <li>Images (1920x1080 or preferred format)</li>
    <li>allowed comments?</li>
    </ul>
    ";

    $this->admin = [
      [
        "task"      => "Meetings",
        "duration"  => "180",
        "desc"      => "Between 1-3 meetings minimum. Discussion to define package and options as well as defining the hosting, styles and deadlines"
      ],
      [
        "task"      => "Request Content",
        "duration"  => "10",
        "desc"      => $this->request,
      ],
      [
        'task'      => 'Billing',
        'duration'  => '60',
        'desc'      => 'At least 2 emails must be sent 1) Contract + Account 2) Final Bill'
      ]
    ];
  }

  public function get_list(){
    return $this->admin;
  }

  public function total_hours(){
    $duration = 0;
    foreach ($this->admin as $key => $value) {
      $duration = $duration + $value['duration'];
    }
    return $duration;
  }


  public function number_of_tasks()
  {
    return count($this->admin);    
  }


}
