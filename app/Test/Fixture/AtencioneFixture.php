<?php
/**
 * Atencione Fixture
 */
class AtencioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fec_atenciones' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora_atenciones' => array('type' => 'time', 'null' => false, 'default' => null),
		'valor' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado_cancelacion' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'es el estado del pago por la tencion de un profesional', 'charset' => 'latin1'),
		'estado_atenciones' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'es el estado de la atenciones misma, si esta por realizarse, en proceso, o finalizada', 'charset' => 'latin1'),
		'activo' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'para saber si la hora de atenciones esta activa o no'),
		'razon_desactivacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'para saber por que la hora fue desactivada', 'charset' => 'latin1'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'fec_atenciones' => '2019-04-29',
			'hora_atenciones' => '17:52:05',
			'valor' => 1,
			'estado_cancelacion' => 'Lorem ipsum dolor sit amet',
			'estado_atenciones' => 'Lorem ipsum dolor sit amet',
			'activo' => 1,
			'razon_desactivacion' => 'Lorem ipsum dolor sit amet',
			'created' => '2019-04-29',
			'modified' => '2019-04-29',
			'usuario_id' => 1,
			'paciente_id' => 1,
			'profesionale_id' => 1
		),
	);

}
