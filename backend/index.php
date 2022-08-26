<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['email'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }
?>