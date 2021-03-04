<?php
namespace Gt\Dom\Test;

use Gt\Dom\Document;
use PHPUnit\Framework\TestCase;

class CharacterDataTest extends TestCase {
	public function testData():void {
		$sut = (new Document())->createTextNode("");
		self::assertEquals("", $sut->data);
		$sut->data = "example";
		self::assertEquals("example", $sut->data);
	}

	public function testLength():void {
		$message = "example message";
		$sut = (new Document())->createTextNode($message);
		self::assertEquals(strlen($message), $sut->length);
	}

	public function testAppendData():void {
		$message1 = "Hello ";
		$message2 = "DOM";
		$sut = (new Document())->createTextNode($message1);
		$sut->appendData($message2);
		self::assertEquals(
			$message1 . $message2,
			$sut->data
		);
	}
}
