<?php

namespace Ilisotope\IlIsotopeImages\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Michael Mueller <info@ihr-layout.eu>, Ihr Layout - Werbeagentur
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Ilisotope\IlIsotopeImages\Domain\Model\Isotope.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Mueller <info@ihr-layout.eu>
 */
class IsotopeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Ilisotope\IlIsotopeImages\Domain\Model\Isotope
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Ilisotope\IlIsotopeImages\Domain\Model\Isotope();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getIsotopeReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getIsotope()
		);
	}

	/**
	 * @test
	 */
	public function setIsotopeForIntegerSetsIsotope() {
		$this->subject->setIsotope(12);

		$this->assertAttributeEquals(
			12,
			'isotope',
			$this->subject
		);
	}
}
