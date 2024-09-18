<?php

$translation_slug = 'break-guidelines-test';

echo esc_html__( 'Hello, world!' );

echo esc_html__( 'Hello, world!', $translation_slug );

echo sprintf(
	esc_html__( 'Hello, %s!', 'world' ),
	'world'
);

echo sprintf(
	esc_html__( 'Hello, %s!', $translation_slug ),
	'world'
);

echo esc_html__( 'Hello, world!', 'break-guidelines-test' );