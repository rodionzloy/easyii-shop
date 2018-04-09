<?php

namespace app\controllers;

use yii\easyii\modules\gallery\api\Gallery;

class GalleryController extends \yii\web\Controller
{
    public function actionIndex($tag = null)
    {
        $albums = Gallery::cats(['tags' => $tag]);
        return $this->render('index', ['albums' => $albums]);
    }

    public function actionView($slug)
    {
        $album = Gallery::cat($slug);
        if(!$album){
            throw new \yii\web\NotFoundHttpException('Album not found.');
        }

        return $this->render('view', [
            'album' => $album,
            'photos' => $album->getPhotos(['pagination' => ['pageSize' => 4]])
        ]);
    }
}
