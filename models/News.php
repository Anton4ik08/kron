<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Класс работает с новостями
 *
 * @author anton
 */
class News {
    
    public static function getNews(){
        
        $db = Db::getConnection();
        
        $getNews = array();
        
        $sql = 'SELECT * FROM news ORDER BY `created_at` DESC LIMIT 10 ';
        
        $result = $db ->query($sql);
        
        $i = 0;
        
        while($row = $result -> fetch()){
            $getNews[$i]['id'] = $row['id'];
            $getNews[$i]['title'] = $row['title'];
            $getNews[$i]['text'] = $row['text'];
            $getNews[$i]['desc'] = $row['desc'];
            $getNews[$i]['created_at'] = $row['created_at'];
            $getNews[$i]['autor'] = $row['autor'];
            $i++;
        }
        return $getNews;
    }
    
    public static function getNewsById($id)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM news WHERE id = :id';
        $result = $db ->prepare($sql);
        $result -> bindParam(':id',$id,PDO::PARAM_INT);
        $result->execute();
        
        return $result ->fetch();
    }

    public static function getImages($id)
            {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/template/img/news/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
}
