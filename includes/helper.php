<?php
/**
 * Check if uri is active
 * @param  string  $link
 * @return boolean
 */
function isActiveLink(string $link): string {
	return $link === $_SERVER['REQUEST_URI'] ? 'active' : '';
}