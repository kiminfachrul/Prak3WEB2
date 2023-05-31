<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-primary']);
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id109',
            'nim109',
            'nama109',
            'kelas109',
            'status109',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>