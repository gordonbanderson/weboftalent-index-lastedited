<?php

class IndexLastEditedExtensionTest extends FunctionalTest {

	public function testGroupLastEditedIsIndexed() {
		$group = new Group();
		$indexes = $group->databaseIndexes();
		$this->assertEquals(
			array(
				'LastEdited' => true,
				'ClassName' => true,
				'ParentID' => true
			),
			$indexes
		);
	}

	public function testMemberLastEditedIsIndexed() {
		$member = new Member();
		$indexes = $member->databaseIndexes();
		$this->assertEquals(
			array(
				'Email' => true,
				'LastEdited' => true,
				'ClassName' => true
			),
			$indexes
		);
	}

	public function testSiteTreeLastEditedIsIndexed() {
		$st = new SiteTree();
		$indexes = $st->databaseIndexes();
		$this->assertEquals(
			array(
				'ParentID' => true,
				'URLSegment' => true,
				'LastEdited' => true,
				'ClassName' => true
			),
			$indexes
		);
	}
}
