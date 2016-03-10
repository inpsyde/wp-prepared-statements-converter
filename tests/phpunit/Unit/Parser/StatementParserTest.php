<?php # -*- coding: utf-8 -*-

namespace WpPreparedStatementsConverter\Parser;


use
	MonkeryTestCase;

/**
 * Class StatementParserTest
 *
 * @package WpPreparedStatementsConverter\Parser
 */
class StatementParserTest extends MonkeryTestCase\TestCase {

	public function test_interface_exists() {

		$this->assertSame(
			__NAMESPACE__ . '\StatementParser',
			StatementParser::class
		);
	}
}
