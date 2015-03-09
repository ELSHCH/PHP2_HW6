<?php
/**
 * Created by PhpStorm.
 * User: shcheki
 * Date: 05.03.2015
 * Time: 18:32
 */

class NewsController
{
    public function actionAll()
    {
        $emessages[] = new E404Exception();
        try {
            $art=NewsModel::findOneByColumn('title','Привет');
        } catch (ModelException $e){
            $emessages[]=$e;
              //print message and exit from code
        }
    //    $art = NewsModel::findOneByColumn('title','Привет');
    //    $art->title ='Новый заголовок';
    //    $art->update();
    //    $art->display('news/all.php');
      //  $art->save();  method save testing
    }
}