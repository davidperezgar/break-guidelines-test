<?php

$var_not_sanitized = $_GET['not_sanitized'];
$var_post_not_sanitized = $_POST['not_sanitized'];

$var_post_slashed = wp_unslash( $_POST['slashed'] );