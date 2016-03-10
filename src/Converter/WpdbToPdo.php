<?php # -*- coding: utf-8 -*-

namespace WpPreparedStatementsConverter\Converter;

use
	WpDbTypes\Type;

/**
 * Class WpdbToPdo
 *
 * Eg: "SELECT * FROM tbl WHER col = %1$s"
 * to  "SELECT * FROM tbl WHERE col = :value1"
 *
 * or: "SELECT * FROM tbl WHER col = %s AND ID = %d"
 * to  "SELECT * FROM tbl WHERE col = ? AND ID = ?"
 *
 *
 * @package WpPreparedStatementsConverter\StatementConverter
 */
class WpdbToPdo implements StatementConverter {

	/**
	 * @param Type\Statement $statement
	 * @param array $data
	 *
	 * @return Type\Statement
	 */
	public function convert( Type\Statement $statement, array $data = [ ] ) {
		// TODO: Implement convert() method.
	}
}