<?php


function _msgErrorR($msg) {
    if (is_array($msg))
      foreach ($msg as $v)
        _msgErrorR($v);
    else
      echo "<p>$msg</p>";
  }

function msgError($msg, $tipo='msgerror'){
    echo "<div class='$tipo'>";
    _msgErrorR($msg);
    echo '</div>';
}


function msgCount($msg) {
    if (is_array($msg))
      if (count($msg)==0)
        return 0;
      else
        return msgCount($msg[0])+msgCount(array_slice($msg,1));
    else if (!is_bool($msg))
      return 1;
    else
      return 0;
  }


?>