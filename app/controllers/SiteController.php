<?php
/**
 *
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends EController
{
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * Renders get started page
     */
    public function actionStarted()
    {
        $this->render('started');
    }

    /**
     * Renders the basic docs
     */
    public function actionBasics()
    {
        $this->render('basics');
    }

    /**
     * Renders the component docs
     */
    public function actionComponents()
    {
        $this->render('components');
    }

    /**
     * Renders the jsongrid docs
     */
    public function actionJsongrid()
    {
        $this->render('todo');
    }

    /**
     * Renders the extendedgrid docs
     */
    public function actionExtendedgrid()
    {
        $this->render('todo');
    }

    /**
     * Renders the jquery ui docs
     */
    public function actionJquery()
    {
        $this->render('todo');
    }

    /**
     * Renders the javascript docs
     */
    public function actionJavascript()
    {
        $this->render('todo');
    }

    /**
     * Renders the widget docs
     */
    public function actionWidgets()
    {
        Yii::import('application.models.TestForm');
        $model = new TestForm();

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'test-form') {
            echo CActiveForm::validate($model);
            app()->end();
        }

        $this->render('widgets', array('model' => $model));
    }

    /**
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Fileupload test
     */
    public function actionUpload()
    {
        $this->renderJson(
            array(
                "files" => array(
                    array(
                        "url"          => $this->baseUrl('js/holder.js/300x200'),
                        "thumbnailUrl" => $this->baseUrl('js/holder.js/120x80'),
                        "name"         => time() . "_test.jpg",
                        "type"         => "image/jpeg",
                        "size"         => 58825,
                        "deleteUrl"    => $this->createUrl('site/delete'),
                        "deleteType"   => "DELETE"
                    )
                )
            )
        );
    }

    /**
     * Delete test
     */
    public function actionDelete()
    {
        echo true;
    }
}