<?php 

class TbHrEmplChildModel extends BaseModel
{
	protected $trueTableName = 'tb_hr_empl_child';
    
	protected $_link = [
        'parent' => [
            'mapping_type' => HAS_ONE,
            'class_name' => 'TbHrEmplModel',
            'foreign_key' => 'ID',
            'relation_foreign_key' => 'EMPL_ID',
            'mapping_name' => 'empl_parent',
        ]
    ];

	/*protected $_validate = [
        ['V_STR1','require','����չ�ֶ�1'],//Ĭ������������������֤
        ['V_STR2','require','����չ�ֶ�2']//Ĭ������������������֤
    ];*/
   /* protected $_auto = [
        ['CREATE_TIME', 'getTime', Model:: MODEL_INSERT, 'callback'],
        ['UPDATE_TIME', 'getTime', Model::MODEL_BOTH, 'callback'],
        ['CREATE_USER_ID', 'getName', Model::MODEL_INSERT, 'callback'],
        ['UPDATE_USER_ID', 'getName', Model::MODEL_BOTH, 'callback']
    ];*/
}
?>