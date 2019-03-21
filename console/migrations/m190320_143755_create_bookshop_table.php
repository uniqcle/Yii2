<?php

use yii\db\Migration;

 
class m190320_143755_create_bookshop_table extends Migration
{
    
    public function safeUp()
    {
        $this->createBooks(); 
        $this->createAuthors();
        $this->createPublishers();
        $this->createBooksToAuthors();
      
    }

    
    public function safeDown()
    {
        $this->dropTable('{{books}}');
        $this->dropTable('{{authors}}');
        $this->dropTable('{{publishers}}');
        $this->dropTable('{{bookstoauthors}}');
    }


    //Создание таблицы Книги
    private function createBooks(){

        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'title' => $this->string(), 
            'isbn' => $this->string(),
            'ydate' => $this->string(),
            'publisher_id' => $this->integer()
        ]);

        $this->insert('books', [
            'id' => 1, 
            'title' => 'Всё та же я', 
            'isbn' => '978-5-389-14539-9', 
            'ydate' => '2019', 
            'publisher_id' => 1
        ]);

        $this->insert('books', [
            'id' => 2, 
            'title' => 'Дневник книготорговца', 
            'isbn' => '978-5-389-13781-3', 
            'ydate' => '2017', 
            'publisher_id' => 1
        ]);

        $this->insert('books', [
            'id' => 3, 
            'title' => 'С пингвином в рюкзаке', 
            'isbn' => '2343-234-223-55', 
            'ydate' => '2017', 
            'publisher_id' => 1
        ]);

        $this->insert('books', [
            'id' => 4, 
            'title' => 'Искатели', 
            'isbn' => '22-4920-554-01', 
            'ydate' => '2018', 
            'publisher_id' => 2
        ]);

        $this->insert('books', [
            'id' => 5, 
            'title' => 'Один день Ивана Денисовича', 
            'isbn' => '54-234-55-12', 
            'ydate' => '1954', 
            'publisher_id' => 2
        ]);

        $this->insert('books', [
            'id' => 6, 
            'title' => 'Викинги', 
            'isbn' => '23-23-53323-12', 
            'ydate' => '1998', 
            'publisher_id' => 3
        ]);

        $this->insert('books', [
            'id' => 7, 
            'title' => 'Bodybuilding', 
            'isbn' => '8734-234-152', 
            'ydate' => '1977', 
            'publisher_id' => 3
        ]); 
    }



    //Создание таблицы Авторы
    private function createAuthors(){

        $this->createTable('{{authors}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'rating' => $this->integer(), 
            'bday' => $this->date()
        ]);

        $this->insert('{{authors}}', [
            'id' => 1,
            'first_name' => 'Мойес', 
            'last_name' => 'Джорджо', 
            'rating' => 5, 
            'bday' => '1974-03-12'
        ]);

        $this->insert('{{authors}}', [
            'id' => 2, 
            'first_name' => 'Шон', 
            'last_name' => 'Байтелл', 
            'rating' => 5, 
            'bday' => '1967-04-01'
        ]);

        $this->insert('{{authors}}', [
            'id' => 3, 
            'first_name' => 'Карен', 
            'last_name' => ' Джой Фаулер', 
            'rating' => 5, 
            'bday' => '1981-01-03'
        ]);

        $this->insert('{{authors}}', [
            'id' => 4, 
            'first_name' => 'Александр', 
            'last_name' => 'Солженицын', 
            'rating' => 4,
            'bday' => '1918-12-11'
        ]);

        $this->insert('{{authors}}', [
            'id' => 5, 
            'first_name' => 'Арнольд', 
            'last_name' => 'Шварценнегер', 
            'rating' => 5, 
            'bday' => '1947-07-30'
        ]);

        $this->insert('{{authors}}', [
            'id' => 6, 
            'first_name' => 'Андрей', 
            'last_name' => 'Анучкин', 
            'rating' => 5, 
            'bday' => '1984-05-27'
        ]);

        $this->insert('{{authors}}', [
            'id' => 7, 
            'first_name' => 'Кирилл', 
            'last_name' => 'Анучкин', 
            'rating' => 5, 
            'bday' => '2015-07-22'
        ]);
    }

    private function createPublishers(){

        $this->createTable('{{publishers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(), 
            'dregistered' => $this->date(),
            'id_number' => $this->integer()
        ]);

        $this->insert('{{publishers}}', [
            'id' => 1, 
            'name' => 'Наука', 
            'dregistered' => '2017-02-13', 
            'id_number' => 323
        ]); 

        $this->insert('{{publishers}}', [
            'id' => 2, 
            'name' => 'Свиньин и Сыновья', 
            'dregistered' => '2016-03-12',
            'id_number' => 554
        ]); 

        $this->insert('{{publishers}}', [
            'id' => 3, 
            'name' => 'Печатный Двор', 
            'dregistered' => '2015-05-10', 
            'id_number' => 578
        ]); 
    }

    private function createBooksToAuthors(){

        $this->createTable('{{bookstoauthors}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer()
        ]);

        $this->insert('{{bookstoauthors}}', [
            'id' => 1, 
            'book_id' => 1, 
            'author_id' => 2
        ]); 

        $this->insert('{{bookstoauthors}}', [
            'id' => 2, 
            'book_id' => 2, 
            'author_id' => 2
        ]);

        $this->insert('{{bookstoauthors}}', [
            'id' => 3, 
            'book_id' => 2, 
            'author_id' => 1
        ]);
    }
}
