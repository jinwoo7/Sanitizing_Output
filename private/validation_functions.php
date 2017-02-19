<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // Custom: vaild name check
  function is_valid_name($value=''){
      if (!preg_match('/\A[A-Za-z\s\-]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  // vaild username check
  function is_valid_username($value=''){
      if (!preg_match('/\A[A-Za-z0-9_]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  // vaild phone check
  function is_valid_phone($value=''){
      if (!preg_match('/\A[0-9()-]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  // vaild email check
  function is_valid_email($value=''){
      if (!preg_match('/\A[A-Za-z0-9_@\.-]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  // vaild email check
  function is_valid_state_code($value=''){
      if (!preg_match('/\A[A-Z]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  function is_only_digits($value=''){
      if (!preg_match('/\A[0-9]+\Z/', $value)) {
          return false;
      }
      return true;
  }

  function is_11_or_less_digits_valid($value='') {
    $length = preg_match_all( "/[0-9]/", $value );
    if ($length <= 11) {
        return true;
    }
    return false;
  }

  function is_phone_length_valid($value='') {
    $length = preg_match_all( "/[0-9]/", $value );
    if ($length == 10 || $length == 11) {
        return true;
    }
    return false;
  }

  // vaild Code string length check
  function is_length_2($value='') {
      $length = strlen($value);
      if ($length == 2) {
          return true;
      }
      return false;
  }

  // vaild string length check
  function is_less_than_255($value='') {
      $length = strlen($value);
      if ($length >= 255) {
          return "String input has to be less than 255 character";
      }
      return "null";
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    return strpos($value, '@') !== false;
  }

?>
