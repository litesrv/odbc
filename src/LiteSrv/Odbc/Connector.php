<?php

namespace LiteSrv\Odbc;

use Illuminate\Database\Connectors\Connector as BaseConnector;
use Illuminate\Database\Connectors\ConnectorInterface;

class Connector extends BaseConnector implements ConnectorInterface
{

	/**
	 * Establish a database connection.
     *
	 * @param array $config
	 * @internal param array $options
	 * @return PDO
	 */
	public function connect(array $config)
	{
		$options = $this->getOptions($config);

		$dsn = array_get($config, 'dsn');

		return $this->createConnection($dsn, $config, $options);
	}
}