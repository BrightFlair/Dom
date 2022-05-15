<?php
namespace Gt\Dom\Test\HTMLElement;

use Gt\Dom\HTMLElement\HTMLAreaElement;
use Gt\Dom\Test\TestFactory\NodeTestFactory;

class HTMLAreaElementTest extends HTMLElementTestCase {
//	public function testAlt():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "alt");
//	}
//
//	public function testCoords():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "coords");
//	}
//
//	public function testShape():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "shape");
//	}
//
//	public function testToStringEmpty():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertEmpty((string)$sut);
//	}
//
//	public function testToString():void {
//		$url = "https://php.gt";
//
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals($url, (string)$sut);
//	}
//
//	public function testDownload():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate(
//			$sut,
//			"download"
//		);
//	}
//
//	public function testHashEmpty():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertEmpty($sut->hash);
//	}
//
//	public function testHashNone():void {
//		$url = "https://php.gt";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEmpty($sut->hash);
//	}
//
//	public function testHash():void {
//		$url = "https://php.gt#hash";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("#hash", $sut->hash);
//	}
//
//	public function testHashSet():void {
//		$url = "https://php.gt";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->hash = "test";
//		self::assertEquals("#test", $sut->hash);
//		self::assertEquals("https://php.gt#test", $sut->href);
//	}
//
//	public function testHashSetWithHash():void {
//		$url = "https://php.gt";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->hash = "#test";
//		self::assertEquals("#test", $sut->hash);
//		self::assertEquals("https://php.gt#test", $sut->href);
//	}
//
//	public function testHashSetExistingHash():void {
//		$url = "https://php.gt#something";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->hash = "#test";
//		self::assertEquals("#test", $sut->hash);
//		self::assertEquals("https://php.gt#test", $sut->href);
//	}
//
//	public function testHost():void {
//		$url = "https://php.gt";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("php.gt", $sut->host);
//	}
//
//	public function testHostPort():void {
//		$url = "http://localhost:8080";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("localhost:8080", $sut->host);
//	}
//
//	public function testHostRelative():void {
//		$url = "/this-is-relative";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("", $sut->host);
//	}
//
//	public function testHostSet():void {
//		$url = "https://php.gt/dom";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("https://somewhere.else/dom", $sut->href);
//	}
//
//	public function testHostSetRetainUser():void {
//		$url = "https://g105b@php.gt/dom";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("https://g105b@somewhere.else/dom", $sut->href);
//	}
//
//	public function testHostSetRetainUserPass():void {
//		$url = "https://g105b:cody123@php.gt/dom";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("https://g105b:cody123@somewhere.else/dom", $sut->href);
//	}
//
//	public function testHostSetRetainPort():void {
//		$url = "http://localhost:8080/something";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals("$host:8080", $sut->host);
//		self::assertEquals("http://somewhere.else:8080/something", $sut->href);
//	}
//
//	public function testHostSetNewPort():void {
//		$url = "http://localhost:8080/something";
//		$host = "somewhere.else:8081";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("http://somewhere.else:8081/something", $sut->href);
//	}
//
//	public function testHostSetRetainQuery():void {
//		$url = "https://php.gt/dom?search=HTMLElement";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("https://somewhere.else/dom?search=HTMLElement", $sut->href);
//	}
//
//	public function testHostSetRetainHash():void {
//		$url = "https://php.gt/dom#about";
//		$host = "somewhere.else";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->host = $host;
//		self::assertEquals($host, $sut->host);
//		self::assertEquals("https://somewhere.else/dom#about", $sut->href);
//	}
//
//	public function testHostname():void {
//		$url = "http://localhost:8080/example";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("localhost", $sut->hostname);
//	}
//
//	public function testHostnameSet():void {
//		$url = "http://localhost:8080/example";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->hostname = "somewhere.else";
//		self::assertEquals("somewhere.else", $sut->hostname);
//		self::assertEquals("http://somewhere.else:8080/example", $sut->href);
//	}
//
//	public function testOrigin():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://localhost:8080/example";
//		self::assertEquals("http://localhost:8080", $sut->origin);
//		$sut->href = "https://user:pass@example.com/example?key=value#nothing";
//		self::assertEquals("https://user:pass@example.com", $sut->origin);
//	}
//
//	public function testPasswordNone():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://localhost:8080/example";
//		self::assertEmpty($sut->password);
//	}
//
//	public function testPassword():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://g105b:cody123@localhost:8080/example";
//		self::assertEquals("cody123", $sut->password);
//	}
//
//	public function testPasswordSet():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://g105b:cody123@localhost:8080/example";
//		$sut->password = "changeme77";
//		self::assertEquals("changeme77", $sut->password);
//		self::assertEquals("http://g105b:changeme77@localhost:8080/example", $sut->href);
//	}
//
//	public function testPathname():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://g105b:cody123@localhost:8080/example";
//		self::assertEquals("/example", $sut->pathname);
//	}
//
//	public function testPathnameSet():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com/example?key=value#test";
//		$sut->pathname = "/changed";
//		self::assertEquals("/changed", $sut->pathname);
//		self::assertEquals("https://example.com/changed?key=value#test", $sut->href);
//	}
//
//	public function testPortNone():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com/example?key=value#test";
//		self::assertEmpty($sut->port);
//	}
//
//	public function testPort():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com:8080/example?key=value#test";
//		self::assertEquals(8080, $sut->port);
//	}
//
//	public function testPortSet():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com:8080/example?key=value#test";
//		$sut->port = 1234;
//		self::assertEquals(1234, $sut->port);
//		self::assertEquals("https://example.com:1234/example?key=value#test", $sut->href);
//	}
//
//	public function testProtocolNone():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "/example?key=value#test";
//		self::assertEmpty($sut->protocol);
//	}
//
//	public function testProtocol():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com/example?key=value#test";
//		self::assertEquals("https:", $sut->protocol);
//	}
//
//	public function testProtocolSet():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "https://example.com/example?key=value#test";
//		$sut->protocol = "http";
//		self::assertEquals("http:", $sut->protocol);
//		self::assertEquals("http://example.com/example?key=value#test", $sut->href);
//	}
//
//	public function testReferrerPolicy():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "referrerpolicy", "referrerPolicy");
//	}
//
//	public function testRel():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "rel");
//	}
//
//	public function testRelList():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->rel = "one";
//		$relList = $sut->relList;
//		self::assertCount(1, $relList);
//		self::assertEquals("one", $relList->item(0));
//		$sut->rel .= " two";
//		self::assertCount(2, $relList);
//		self::assertEquals("one", $relList->item(0));
//		self::assertEquals("two", $relList->item(1));
//		$relList->value = "three four";
//		self::assertEquals("three four", $sut->rel);
//	}
//
//	public function testSearchNone():void {
//		$url = "http://localhost:8080/example";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEmpty($sut->search);
//	}
//
//	public function testSearch():void {
//		$url = "http://localhost:8080/example?key=value&another=something";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		self::assertEquals("?key=value&another=something", $sut->search);
//	}
//
//	public function testSearchSet():void {
//		$url = "http://localhost:8080/example?key=value&another=something";
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = $url;
//		$sut->search = "one=two";
//		self::assertEquals("?one=two", $sut->search);
//		self::assertEquals("http://localhost:8080/example?one=two", $sut->href);
//		$sut->search = "?three=four";
//		self::assertEquals("?three=four", $sut->search);
//		self::assertEquals("http://localhost:8080/example?three=four", $sut->href);
//	}
//
//	public function testTarget():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		self::assertPropertyAttributeCorrelate($sut, "target");
//	}
//
//	public function testUsernameNone():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://localhost:8080/example";
//		self::assertEmpty($sut->username);
//	}
//
//	public function testUsername():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://g105b:cody123@localhost:8080/example";
//		self::assertEquals("g105b", $sut->username);
//	}
//
//	public function testUsernameSet():void {
//		/** @var HTMLAreaElement $sut */
//		$sut = NodeTestFactory::createHTMLElement("area");
//		$sut->href = "http://g105b:cody123@localhost:8080/example";
//		$sut->username = "nobody";
//		self::assertEquals("nobody", $sut->username);
//		self::assertEquals("http://nobody:cody123@localhost:8080/example", $sut->href);
//	}
}
