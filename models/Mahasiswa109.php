<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa109".
 *
 * @property int $id109
 * @property string $nim109
 * @property string $nama109
 * @property string $kelas109
 * @property string $status109
 */
class Mahasiswa109 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa109';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim109', 'nama109', 'kelas109', 'status109'], 'required'],
            [['nim109', 'nama109', 'kelas109', 'status109'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id109' => 'ID',
            'nim109' => 'No.Induk Mahasiswa',
            'nama109' => 'Nama Mahasiswa',
            'kelas109' => 'Kelas',
            'status109' => 'Status',
        ];
    }
}
