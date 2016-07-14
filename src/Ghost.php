<?php namespace Sukohi\Ghost;

class Ghost {

	public function __get($name) {

		return '';

	}

	public static function make() {

		return new Ghost();

	}

}