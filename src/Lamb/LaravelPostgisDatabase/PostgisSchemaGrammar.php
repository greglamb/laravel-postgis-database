<?php namespace Lamb\LaravelPostgisDatabase;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\PostgresGrammar;

class PostgisSchemaGrammar extends PostgresGrammar {

	protected function typePoint(Fluent $column)
	{
		return 'point';
	}
	
	protected function typePolygon(Fluent $column)
	{
		return 'polygon';
	}
	
	protected function typeBson(Fluent $column)
	{
		return 'bson';
	}
}
