<?php

  function h($string="") {
    return htmlspecialchars($string);
  }

  function u($string="") {
    return urlencode($string);
  }

  function raw_u($string="") {
    return rawurlencode($string);
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  function sql_stz($db, $string) {
    $string = strip_tags($string);
    $string = mysqli_real_escape_string($db, $string);
    return $string;
  }

  function url_stz($string) {
    return filter_var($string, FILTER_SANITIZAE_STRING);
  }

  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

  function display_errors($errors=array()) {
    $output = '';
    if (!empty($errors)) {
      $output .= "<div class=\"errors\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }

?>
