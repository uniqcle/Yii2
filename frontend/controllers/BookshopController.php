<?php

namespace frontend\controllers;

use Yii; 
use frontend\models\Book; 

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$book = new Book(); 

/*    	$book->title = 'Новая книга'; 
    	$book->isbn = '234-46-23'; */

    	$book->title = ''; 

    	$book->save(); 

    	//debug( $book->getErrors() ); 

        return $this->render('index');
    }


    //Добавление Книги в БД
    public function actionAdd(){

    	$book = new Book(); 

    	if( $book->load( Yii::$app->request->post() ) ){

    		if( $book->save() ){

    			Yii::$app->session->setFlash( 'success' , 'Данные успешно сохранены!' ); 

    			//Что-бы данные в форме не оставались
    			// 1 вариант.
    			//return $this->redirect(['bookshop/add']);

    			//2 вариант
    			return $this->refresh();

    		}
    	}

    	return $this->render('add', [
    		'book' => $book
    	]); 
    }

}
