<?php

class MerketintelliganceController extends Controller
{
	public function actionIndex()
	{
		$sql = "SELECT * FROM post where online='1' ORDER BY id DESC ";
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

	public function actionView($id) {

        //Handle Search Values
        if (empty($_GET['val'])) {
            $searchtxt = "";
        } else {
            $searchtxt = " AND name LIKE '%" . $_GET['val'] . "%' ";
        }

        if (empty($_GET['pages'])) {
            $pages = 50;
        } else {
            $pages = $_GET['pages'];
        }


        $sql = "SELECT * FROM post WHERE id = '$id' ";
        $count = Yii::app()->db->createCommand($sql)->query()->rowCount;
        $dataProvider = new CSqlDataProvider($sql, array(
            'totalItemCount' => $count,
            'pagination' => array(
                'pageSize' => $pages
            ),
                )
        );

        $this->render('view', array(
			'model' => $this->loadModel($id),
            'dataProvider' => $dataProvider
        ));
	}
	
	public function loadModel($id) {
        $model = Post::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
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