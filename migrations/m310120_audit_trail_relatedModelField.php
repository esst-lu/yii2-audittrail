<?php

use yii\db\Schema;
use yii\db\Expression;

/**
 * Migration to create or remove audit trail entry relatedModel field
 *
 * @author Max Nussbaum, AS eSST employee
 * @link http://www.esst.lu
 */
class m310120_audit_trail_relatedModelField extends \yii\db\Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%audit_trail_entry}}', 'relatedModel', 'string');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%audit_trail_entry}}', 'relatedModel');
    }
}
