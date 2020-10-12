<?php

class AyubowanController extends Controller
{
	public function actionIndex()
	{
		$sql = "SELECT * FROM post ORDER BY id DESC ";
		$count = Yii::app()->db->createCommand($sql)->query()->rowCount;
		$dataProvider = new CSqlDataProvider($sql, array(
			'totalItemCount' => $count,
			'pagination' => array(
				'pageSize' => '10'
			),
				)
		);
	
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}





	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}





