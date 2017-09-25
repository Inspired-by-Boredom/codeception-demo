<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Model class for table 'article';
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $full_text
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class Article extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }
}
