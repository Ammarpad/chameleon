<?php
/**
 * This file is part of the MediaWiki skin Chameleon.
 *
 * @copyright 2013 - 2014, Stephan Gambke, mwjames
 * @license   GPL-3.0-or-later
 *
 * The Chameleon skin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * The Chameleon skin is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup Skins
 */

namespace Skins\Chameleon\Tests\Unit\Components;

use Skins\Chameleon\Components\MainContent;

/**
 * @coversDefaultClass \Skins\Chameleon\Components\MainContent
 * @covers ::<private>
 * @covers ::<protected>
 *
 * @group   skins-chameleon
 * @group   mediawiki-databaseless
 *
 * @author  mwjames
 * @since 1.0
 * @ingroup Skins
 * @ingroup Test
 */
class MainContentTest extends GenericComponentTestCase {

	protected $classUnderTest = '\Skins\Chameleon\Components\MainContent';

	/**
	 * @covers ::getHtml
	 */
	public function testGetHtml_OnEmptyDataProperty() {
		$chameleonTemplate = $this->getChameleonSkinTemplateStub();

		$chameleonTemplate->data = [
			'subtitle'         => '',
			'undelete'         => '',
			'printfooter'      => '',
			'dataAfterContent' => ''
		];

		$instance = new MainContent( $chameleonTemplate );
		if ( method_exists( '\PHPUnit\Framework\TestCase', 'assertIsString' ) ) {
			$this->assertIsString( $instance->getHtml() );
		} else {
			// @codingStandardsIgnoreStart
			$this->assertInternalType( 'string', $instance->getHtml() );
			// @codingStandardsIgnoreEnd
		}
	}
}
