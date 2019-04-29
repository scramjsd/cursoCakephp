<?php
/**
 * Profesionale Fixture
 */
class ProfesionaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'identificador de la tabla'),
		'rut' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'comment' => 'identificador del profesional', 'charset' => 'latin1'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => 'nombre del profesional', 'charset' => 'latin1'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => 'apellidos del profesional', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'telefono del profesional', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'comment' => 'email del profesional', 'charset' => 'latin1'),
		'curriculum' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'directorio donde se alla el archivo con el curriculum del profesional', 'charset' => 'latin1'),
		'fec_nac' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'fecha de nacimiento del profesional'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'fecha en la que el profesional se integro al sistema'),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'ultima modificacion de los datos dentro del sistema'),
		'activo' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'si el profesional sigue trabajando dentro de la empresa'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'el cargo que tiene dentro de la empresa'),
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
			'rut' => 'Lorem ipsu',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'email' => 'Lorem ipsum dolor sit amet',
			'curriculum' => 'Lorem ipsum dolor sit amet',
			'fec_nac' => '2019-04-29',
			'created' => '2019-04-29',
			'modified' => '2019-04-29',
			'activo' => 1,
			'cargo_id' => 1
		),
	);

}
