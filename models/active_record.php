<?php

abstract class ActiveRecord {

	abstract protected function save();

	protected static function all(){}

	protected static function find($id){}

	protected static function find_by($field, $value){}

	abstract protected function update($field, $value);

	abstract protected function destroy();
}