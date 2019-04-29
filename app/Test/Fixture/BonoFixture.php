<?php
/**
 * Bono Fixture
 */
class BonoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'num_bono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'numero del bono en el sistema de su isapre o fonasa'),
		'seguro' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fec_bono' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora_bono' => array('type' => 'time', 'null' => false, 'default' => null),
		'valor_bono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'atencione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'paciente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'profesionale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'num_bono' => 1,
			'seguro' => 'Lorem ipsum dolor sit amet',
			'fec_bono' => '2019-04-29',
			'hora_bono' => '17:55:07',
			'valor_bono' => 1,
			'created' => '2019-04-29',
			'modified' => '2019-04-29',
			'usuario_id' => 1,
			'atencione_id' => 1,
			'paciente_id' => 1,
			'profesionale_id' => 1
		),
	);

}
