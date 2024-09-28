<?php
// Breaks the guideline: Write to a file in plugin

file_put_contents( plugin_dir_path( __FILE__ ) . 'test.txt', 'Hello, World!' );
