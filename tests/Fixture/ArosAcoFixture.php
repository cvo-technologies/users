<?php

namespace Croogo\Users\Test\Fixture;
use Croogo\Croogo\TestSuite\CroogoTestFixture;

class ArosAcoFixture extends CroogoTestFixture {

	public $name = 'ArosAco';

	public $fields = array(
		'id' => ['type' => 'integer', 'null' => false, 'default' => null],
		'aro_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 10],
		'aco_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 10],
		'_create' => ['type' => 'string', 'null' => false, 'default' => '0', 'length' => 2],
		'_read' => ['type' => 'string', 'null' => false, 'default' => '0', 'length' => 2],
		'_update' => ['type' => 'string', 'null' => false, 'default' => '0', 'length' => 2],
		'_delete' => ['type' => 'string', 'null' => false, 'default' => '0', 'length' => 2],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id']],
		],
		'_options' => ['charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB']
	);

	public $records = array(
		array(
			'id' => 1,
			'aro_id' => 2,
			'aco_id' => 23,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 2,
			'aro_id' => 2,
			'aco_id' => 22,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 3,
			'aro_id' => 2,
			'aco_id' => 21,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 4,
			'aro_id' => 3,
			'aco_id' => 21,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 5,
			'aro_id' => 3,
			'aco_id' => 22,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 6,
			'aro_id' => 2,
			'aco_id' => 29,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 7,
			'aro_id' => 3,
			'aco_id' => 29,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 8,
			'aro_id' => 2,
			'aco_id' => 77,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 9,
			'aro_id' => 2,
			'aco_id' => 78,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 10,
			'aro_id' => 2,
			'aco_id' => 79,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 11,
			'aro_id' => 2,
			'aco_id' => 80,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 12,
			'aro_id' => 2,
			'aco_id' => 81,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 13,
			'aro_id' => 3,
			'aco_id' => 77,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 14,
			'aro_id' => 3,
			'aco_id' => 78,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 15,
			'aro_id' => 3,
			'aco_id' => 79,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 16,
			'aro_id' => 3,
			'aco_id' => 80,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 17,
			'aro_id' => 3,
			'aco_id' => 81,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 18,
			'aro_id' => 2,
			'aco_id' => 123,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 19,
			'aro_id' => 3,
			'aco_id' => 124,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 20,
			'aro_id' => 3,
			'aco_id' => 125,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 21,
			'aro_id' => 2,
			'aco_id' => 126,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 22,
			'aro_id' => 3,
			'aco_id' => 127,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 23,
			'aro_id' => 3,
			'aco_id' => 128,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 24,
			'aro_id' => 3,
			'aco_id' => 129,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 25,
			'aro_id' => 2,
			'aco_id' => 130,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 26,
			'aro_id' => 2,
			'aco_id' => 131,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 27,
			'aro_id' => 3,
			'aco_id' => 131,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
	);
}
