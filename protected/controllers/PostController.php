<?php

class PostController extends Controller
{
	
	
    public $layout='//layouts/postadmin';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl - login', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','jsondata','delete','index','view'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
    public function returnMsg($msg, $status, $hide = 0, $id = "") {
        $result = array(
            'msg' => $msg,
            'sts' => $status,
            'hide' => $hide,
            'id' => $id,
        );
        echo json_encode($result);
        die();
    }
        
    public function actionjsondata($id) {
            $data = Post::model()->findByPk($id);
            $dataArray=$data->attributes;
            $dataArray['image']="";
            $output = CJSON::encode($dataArray);
            echo $output;
    }

	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	public function actionCreate()
	{

		try {           

            if(empty($_POST['title'])){
                throw new Exception("Title field required.");
            }
            
            if(empty($_POST['content'])){
                throw new Exception("Content field required.");
            }
            if(empty($_FILES['image'])){
                throw new Exception("Image field required.");
            }

            
                    $model = new Post;

                    if($_FILES['image']['size']>0){
                        $uploadedFile=CUploadedFile::getInstanceByName("image");
                        $filename=$_POST['title'];
                        $model->image=$filename.".".$uploadedFile->getExtensionName();
                        $uploadedFile->saveAs('./images/post/'.$model->image);


                    }

                    $model->attributes = $_POST;
                    $model->title = $_POST['title'];
                    $model->content = $_POST['content'];
                    $model->online = $_POST['online'];
                    $model->created = date("Y-m-d H:i:s");


                    

                    if (!$model->save()) {
                    
                        $er = $model->getErrors();
                        $err_txt = "";
                        foreach ($er as $key => $value) {
                            $lebel = $model->getAttributeLabel($key);
                            $err_txt .= $lebel . " : " . $value[0] . "<br/>";
                        }
                        throw new Exception($err_txt);
                    }

                    $this->returnMsg("Successfully Updated", 1, 0, $model->id);
                } catch (Exception $exc) {
                    $this->returnMsg($exc->getMessage(), 0, 1);
                }
	}

	
	public function actionUpdate($id)
	{
            try {           
                if(empty($_POST['title']) || empty($_POST['content'])){
                    throw new Exception("All fields are required.");
                }
                    $model=$this->loadModel($id);

                    if(isset($_FILES['image'])){
                        if($_FILES['image']['size']>0){
                            $uploadedFile=CUploadedFile::getInstanceByName("image");
                            $filename=$_POST['title'];
                            $model->image=$filename.".".$uploadedFile->getExtensionName();
                            $uploadedFile->saveAs('./images/post/'.$model->image);
                        }
                    }

                    $model->title = $_POST['title'];
                    $model->content = $_POST['content'];
                    $model->online = $_POST['online'];

                    if (!$model->save()) {
                    
                        $er = $model->getErrors();
                        $err_txt = "";
                        foreach ($er as $key => $value) {
                            $lebel = $model->getAttributeLabel($key);
                            $err_txt .= $lebel . " : " . $value[0] . "<br/>";
                        }
                        throw new Exception($err_txt);
                    
                    }

                    $this->returnMsg("Successfully Updated", 1, 0);
                } catch (Exception $exc) {
                    $this->returnMsg($exc->getMessage(),0,1);
                }     
        
		
	}

	
	public function actionDelete($id)
	{
		 try {
            $model = $this->loadModel($id);
            if (!empty($model->image) && file_exists("./images/post/" . $model->image)) {
                unlink("./images/post/" . $model->image);
            }

            if ($model->delete()) {
                $this->returnMsg("Successfully Deleted",1,0);
            } else {
                $this->returnMsg($exc->getMessage(),0,1);
            }
        } catch (CDbException $exc) {
            $this->returnMsg($exc->getMessage(),0,1);
        } catch (Exception $exc) {
            $this->returnMsg($exc->getMessage(),0,1);
        }
	}

	
	public function actionIndex()
	{
		
                //Handle Search Values
                if (empty($_GET['val'])) {
                    $searchtxt = "";
                } else {
                    $searchtxt = " WHERE title LIKE '%" . $_GET['val'] . "%' ";
                }
                
                if (empty($_GET['pages'])) {
                    $pages = 10;
                } else {
                    $pages = $_GET['pages'];
                }
                
                
                $sql = "SELECT * FROM post $searchtxt ORDER BY id DESC ";                
                $count = Yii::app()->db->createCommand($sql)->query()->rowCount;
                $dataProvider = new CSqlDataProvider($sql, array(
                    'totalItemCount' => $count,
                    'pagination' => array(
                        'pageSize' => $pages
                        ),
                    )
                );       
                        
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	

	
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
