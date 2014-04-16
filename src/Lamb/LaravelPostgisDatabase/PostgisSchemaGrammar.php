<?php namespace Lamb\LaravelPostgisDatabase;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Grammars\PostgresGrammar;

class PostgisSchemaGrammar extends PostgresGrammar {

	protected function typePoint(Fluent $column)
	{
		return 'geography(Point,4326)';
	}
	
	protected function typePolygon(Fluent $column)
	{
		return 'geography(Polygon,4326)';
	}

    /**
     * Compile a rename column command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  \Illuminate\Database\Connection  $connection
     * @return array
     */
    public function compileRenameColumn(Blueprint $blueprint, Fluent $command, Connection $connection)
    {
        $from = $this->wrapTable($blueprint);

        return "alter table {$from} rename column " . $this->wrapTable($command->from) . " to ".$this->wrapTable($command->to);
    }
}
