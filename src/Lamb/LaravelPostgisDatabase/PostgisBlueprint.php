<?php namespace Lamb\LaravelPostgisDatabase;

use Illuminate\Database\Schema\Blueprint;

class PostgisBlueprint extends Blueprint {

	public function point($column)
	{
		return $this->addColumn('point', $column);
	}

	public function polygon($column)
	{
		return $this->addColumn('polygon', $column);
	}

	public function bson($column)
	{
		return $this->addColumn('bson', $column);
	}
}
