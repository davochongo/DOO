<?php
Doo::loadCore('db/DooModel');

class PersonasBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $nombre;

    /**
     * @var varchar Max length is 100.
     */
    public $apellido;

    /**
     * @var int Max length is 11.
     */
    public $tel;

    public $_table = 'personas';
    public $_primarykey = 'id';
    public $_fields = array('id','nombre','apellido','tel');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'nombre' => array(
                        array( 'maxlength', 100 ),
                        array( 'notnull' ),
                ),

                'apellido' => array(
                        array( 'maxlength', 100 ),
                        array( 'notnull' ),
                ),

                'tel' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}