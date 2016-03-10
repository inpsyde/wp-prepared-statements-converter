<?php # -*- coding: utf-8 -*-

namespace WpPreparedStatementsConverter\Converter;

use
	WpDbTypes\Type;

/**
 * Class PdoToWpdb
 *
 * Converts PDO prepared statement syntax to wpdb
 *
 * Eg: "SELECT * FROM tbl WHER col = :value"
 * to  "SELECT * FROM tbl WHERE col = %1$s"
 *
 * or: "SELECT * FROM tbl WHER col = ?"
 * to  "SELECT * FROM tbl WHERE col = %s"
 *
 *
 * @package WpPreparedStatementsConverter\Converter
 */
class PdoToWpdb implements StatementConverter {

	/**
	 * @param Type\Statement $statement
	 * @param array $data
	 *
	 * @return Type\Statement
	 */
	public function convert( Type\Statement $statement, array $data = [] ) {
		// TODO: Implement convert() method.
	}
}