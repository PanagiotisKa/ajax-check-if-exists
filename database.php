<?php
  public function check_email($code){
    $queryText = "SELECT count(*) FROM database WHERE code='$code'";
    $result = $this->sql->query($queryText);
    return $result;
  }
?>
