<?php
// phpcs:ignoreFile
namespace Gt\Dom;

use DOMNode;

/**
 * This class is defined twice to assure backwards compatibility with PHP
 * versions from 8.1 through to 8.4 and beyond. When support for <= 8.3 is
 * dropped, this strange hack will be removed, as we can all use typed class
 * constants.
 */
if(version_compare(PHP_VERSION, "8.4", ">=")) {
	class Node extends DOMNode {
		use NonDocumentTypeChildNode;
		use ChildNode;
		use ParentNode;
		use RegisteredNodeClass;

		const TYPE_ELEMENT = XML_ELEMENT_NODE;
		const TYPE_ATTR = XML_ATTRIBUTE_NODE;
		const TYPE_TEXT = XML_TEXT_NODE;
		const TYPE_CDATA = XML_CDATA_SECTION_NODE;
		const TYPE_ENTITY_REF = XML_ENTITY_REF_NODE;
		const TYPE_ENTITY = XML_ENTITY_NODE;
		const TYPE_PI = XML_PI_NODE;
		const TYPE_COMMENT = XML_COMMENT_NODE;
		const TYPE_DOCUMENT = XML_DOCUMENT_NODE;
		const TYPE_DOCUMENT_TYPE = XML_DOCUMENT_TYPE_NODE;
		const TYPE_DOCUMENT_FRAGMENT = XML_DOCUMENT_FRAG_NODE;
		const TYPE_NOTATION = XML_NOTATION_NODE;
		const TYPE_HTML_DOCUMENT = XML_HTML_DOCUMENT_NODE;
		const TYPE_DTD = XML_DTD_NODE;
		const TYPE_ELEMENT_DECL = XML_ELEMENT_DECL_NODE;
		const TYPE_ATTRIBUTE_DECL = XML_ATTRIBUTE_DECL_NODE;
		const TYPE_ENTITY_DECL = XML_ENTITY_DECL_NODE;
		const TYPE_NAMESPACE_DECL = XML_NAMESPACE_DECL_NODE;

		public const int DOCUMENT_POSITION_DISCONNECTED = 0b000001;
		public const int DOCUMENT_POSITION_PRECEDING = 0b000010;
		public const int DOCUMENT_POSITION_FOLLOWING = 0b000100;
		public const int DOCUMENT_POSITION_CONTAINS = 0b001000;
		public const int DOCUMENT_POSITION_CONTAINED_BY = 0b010000;
		public const int DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC = 0b100000;

		private function __construct() {}
	}
}
else {
	class Node extends DOMNode {
		use NonDocumentTypeChildNode;
		use ChildNode;
		use ParentNode;
		use RegisteredNodeClass;

		const TYPE_ELEMENT = XML_ELEMENT_NODE;
		const TYPE_ATTR = XML_ATTRIBUTE_NODE;
		const TYPE_TEXT = XML_TEXT_NODE;
		const TYPE_CDATA = XML_CDATA_SECTION_NODE;
		const TYPE_ENTITY_REF = XML_ENTITY_REF_NODE;
		const TYPE_ENTITY = XML_ENTITY_NODE;
		const TYPE_PI = XML_PI_NODE;
		const TYPE_COMMENT = XML_COMMENT_NODE;
		const TYPE_DOCUMENT = XML_DOCUMENT_NODE;
		const TYPE_DOCUMENT_TYPE = XML_DOCUMENT_TYPE_NODE;
		const TYPE_DOCUMENT_FRAGMENT = XML_DOCUMENT_FRAG_NODE;
		const TYPE_NOTATION = XML_NOTATION_NODE;
		const TYPE_HTML_DOCUMENT = XML_HTML_DOCUMENT_NODE;
		const TYPE_DTD = XML_DTD_NODE;
		const TYPE_ELEMENT_DECL = XML_ELEMENT_DECL_NODE;
		const TYPE_ATTRIBUTE_DECL = XML_ATTRIBUTE_DECL_NODE;
		const TYPE_ENTITY_DECL = XML_ENTITY_DECL_NODE;
		const TYPE_NAMESPACE_DECL = XML_NAMESPACE_DECL_NODE;

		public const DOCUMENT_POSITION_DISCONNECTED = 0b000001;
		public const DOCUMENT_POSITION_PRECEDING = 0b000010;
		public const DOCUMENT_POSITION_FOLLOWING = 0b000100;
		public const DOCUMENT_POSITION_CONTAINS = 0b001000;
		public const DOCUMENT_POSITION_CONTAINED_BY = 0b010000;
		public const DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC = 0b100000;

		private function __construct() {}
	}
}

// phpcs:enable
