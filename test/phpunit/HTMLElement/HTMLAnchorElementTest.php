<?php
namespace Gt\Dom\Test\HTMLElement;

use Gt\Dom\HTMLElement\HTMLAnchorElement;
use Gt\Dom\Test\TestFactory\NodeTestFactory;

class HTMLAnchorElementTest extends HTMLElementTestCase {
	public function testHrefLang():void {
		/** @var HTMLAnchorElement $sut */
		$sut = NodeTestFactory::createHTMLElement("a");
		self::assertPropertyAttributeCorrelate($sut, "hreflang");
	}

	public function testText():void {
		/** @var HTMLAnchorElement $sut */
		$sut = NodeTestFactory::createHTMLElement("a");
		self::assertEmpty($sut->text);

		$randomValue = "";
		for($i = 0; $i < 10; $i++) {
			$newRandomValue = uniqid();
			$randomValue .= $newRandomValue;
			$sut->text .= $newRandomValue;
			self::assertEquals($randomValue, $sut->textContent);
			self::assertEquals($sut->textContent, $sut->text);
		}
	}

	public function testType():void {
		/** @var HTMLAnchorElement $sut */
		$sut = NodeTestFactory::createHTMLElement("a");
		self::assertPropertyAttributeCorrelate($sut, "type");
	}

	public function testToStringEmpty():void {
		/** @var HTMLAnchorElement $sut */
		$sut = NodeTestFactory::createHTMLElement("a");
		self::assertEmpty((string)$sut);
	}

	public function testToString():void {
		$url = "https://example.com";

		/** @var HTMLAnchorElement $sut */
		$sut = NodeTestFactory::createHTMLElement("a");
		$sut->href = $url;
		self::assertEquals($url, (string)$sut);
	}
}
