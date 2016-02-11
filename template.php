<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function energi_menu_tree__main_menu($variables) {
  	return '<ul class="nav navbar-nav navbar-left">' . $variables['tree'] . '</ul>';
}

function energi_menu_tree__menu_kommuner($variables) {
	unset($variables['element']['#attributes']['class']);
  	return '<ul class="nav">' . $variables['tree'] . '</ul>';
}

