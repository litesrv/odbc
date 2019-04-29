<?php

namespace LiteSrv\Odbc;

use Illuminate\Database\Connection as BaseConnection;

class Connection extends BaseConnection
{

	/**
	 * Get the default query grammar instance.
	 *
	 * @return Illuminate\Database\Query\Grammars\Grammars\Grammar
	 */
	protected function getDefaultQueryGrammar()
	{
		$class = config('database.connections.odbc.grammar.query') ?: '\LiteSrv\Odbc\QueryGrammar';
		return $this->withTablePrefix(new $class);
	}

	/**
	 * Get the default schema grammar instance.
	 *
	 * @return Illuminate\Database\Schema\Grammars\Grammar
	 */
	protected function getDefaultSchemaGrammar()
	{
		$class = config('database.connections.odbc.grammar.schema') ?: '\LiteSrv\Odbc\SchemaGrammar';
		return $this->withTablePrefix(new $class);
	}

}
