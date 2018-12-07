	    <?php
      public function check_coral($code){
        $queryText = "SELECT count(*) FROM coral WHERE code='$code'";
        $res = $this->sql->query($queryText);
        return $res;
    }
    ?>
