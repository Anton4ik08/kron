<?php

class Category {
    //put your code here
    /**
     * Возвращает список категорий
     * @return array
     */
    public static function GetCategoriesList()
    {
        $db = Db::getConnection();
        
        $categoryList = array();
        
        $result = $db -> query('SELECT id,name,sort_order FROM category ');
       
        
        $i = 0;
        while($row = $result -> fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $i++;
        }
        return $categoryList;
    }
    public static function getImages($id)
            {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/template/img/user/';

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
    
    public static function getImagesDriver($driverToken)
            {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/template/img/driver/';

        // Путь к изображению товара
        $pathToProductImage = $path . $driverToken . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
    public static function getImagesDriverAuto($driverToken)
            {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/template/img/driver/auto/';

        // Путь к изображению товара
        $pathToProductImage = $path . $driverToken . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
}
