<?php namespace Lamb\LaravelPostgisDatabase;

use Illuminate\Database\Schema\Builder;

class PostgisBuilder extends Builder {

	protected function createBlueprint($table, Closure $callback = null)
	{
		return new PostgisBlueprint($table, $callback);
	}

}