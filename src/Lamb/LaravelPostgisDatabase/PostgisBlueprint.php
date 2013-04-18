<?php namespace Lamb\LaravelPostgisDatabase;

class PostgisBlueprint extends \Illuminate\Database\Schema\Blueprint {

	public function point($column)
	{
		return $this->addColumn('point', $column);
	}

	public function polygon($column)
	{
		return $this->addColumn('polygon', $column);
	}

}