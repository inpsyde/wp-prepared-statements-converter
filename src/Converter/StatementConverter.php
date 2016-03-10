<?php # -*- coding: utf-8 -*-

namespace WpPreparedStatementsConverter\Converter;

use
	WpDbTypes\Type;

/**
 * Interface StatementConverter
 *
 * Describes a converter to convert a prepared statement into
 * another syntax.
 *
 * @package WpPreparedStatementsConverter\Converter
 */
interface StatementConverter {

	/**
	 * @param Type\Statement $statement
	 * @param array $data
	 *
	 * @return Type\Statement
	 */
	public function convert( Type\Statement $statement, array $data = [ ] );
}