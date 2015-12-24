<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\db\mysql;

use yii\db\ColumnSchemaBuilder as AbstractColumnSchemaBuilder;

/**
 * ColumnSchemaBuilder is the schema builder for MySQL databases.
 *
 * @author Sanjar Khaytmetov <sanjar.khaytmetov@gmail.com>
 * @since 2.0.6
 */
class ColumnSchemaBuilder extends AbstractColumnSchemaBuilder
{
    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return
            $this->type .
            $this->buildLengthString() .
            $this->buildUnsignedString().
            $this->buildNotNullString() .
            $this->buildUniqueString() .
            $this->buildDefaultString() .
            $this->buildCheckString(true);
    }

    /**
     * Builds the unsigned attribute for the column.
     * @return string returns 'UNSIGNED' if [[isUnsigned]] is true, otherwise it returns an empty string.
     */
    protected function buildUnsignedString()
    {
        return $this->isUnsigned ? ' UNSIGNED' : '';
    }
}
