<?php

namespace app\controllers;

use app\models\Mahasiswa109;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa109Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa109::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa109;
        $mhs->nim109 = '60200121109-' . rand(100, 999);
        $mhs->nama109 = 'Muh. Fachrul Islam Sukimin';
        $mhs->kelas109 = 'B';
        $mhs->status109 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa109::findOne(['id109' => $id]);
        if ($mhs !== null) {
            $mhs->kelas109 = 'C';
            $mhs->status109 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa109::findOne(['id109' => $id]);
        if ($mhs->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mhs = Mahasiswa109::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}