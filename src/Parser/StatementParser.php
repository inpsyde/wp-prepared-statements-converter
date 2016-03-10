<?php # -*- coding: utf-8 -*-

namespace WpPreparedStatementsConverter\Parser;

use
	WpDbTypes\Type;

/**
 * Interface StatementParser
 *
 * @package WpPreparedStatementsConverter\Parser
 */
interface StatementParser {

	/**
	 * @param Type\Statement $statement
	 *
	 * @return void
	 */
	public function parse_statement( Type\Statement $statement );

	/**
	 * @return int
	 */
	public function parameter_count();

	/**
	 * @return array
	 */
	public function assoc_parameter();

	/**
	 * @param $index
	 * @param $replacement
	 *
	 * @return int
	 */
	public function replace_numeric( $index, $replacement );

	/**
	 * @param $name
	 * @param $replacement
	 *
	 * @return int
	 */
	public function replace_assoc( $name, $replacement );

	/**
	 * @return Type\Statement
	 */
	public function build_statement();
}