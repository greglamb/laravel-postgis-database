<?php namespace Lamb\LaravelPostgisDatabase;

class PostgisBuilder extends \Illuminate\Database\Schema\Builder {

	protected function createBlueprint($table, Closure $callback = null)
	{
		return new PostgisBlueprint($table, $callback);
	}

}