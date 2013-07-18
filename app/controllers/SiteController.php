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
     * Renders the Editor docs
     */
    public function actionEditors()
    {
        $this->render('editors');
    }

    /**
     * Renders the grid docs
     */
    public function actionGrid()
    {
        $this->render('grid');
    }

    /**
     * Renders the Charts docs
     */
    public function actionCharts()
    {
        $this->render('charts');
    }

    /**
     * Renders the Miscellanous docs
     */
    public function actionMiscellaneous()
    {
        $this->render('miscellaneous');
    }

    /**
     * Renders the Form docs
     */
    public function actionInputs()
    {
        $this->render('inputs');
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
        if (Yii::app()->getRequest()->getParam('fine')) {
            $this->renderJson(
                array(
                    'success' => 'true'
                )
            );
            Yii::app()->end();
        }
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