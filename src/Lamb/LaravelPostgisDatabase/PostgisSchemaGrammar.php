<?php namespace Lamb\LaravelPostgisDatabase;

use Illuminate\Support\Fluent;

class PostgisSchemaGrammar extends \Illuminate\Database\Schema\Grammars\PostgresGrammar {

	protected function typePoint(Fluent $column)
	{
		return 'geography(Point,4326)';
	}
	
	protected function typePolygon(Fluent $column)
	{
		return 'geography(Polygon,4326)';
	}

}
