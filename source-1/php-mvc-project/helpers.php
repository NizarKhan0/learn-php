<?php
    /**
     * Get the base path
     * 
     * @param string $path
     * @return string
     */

     //basepath unutk define terus path supaya mudah dan clean code
     function basePath($path = ''){
        return __DIR__ . '/' . $path;
     }

     /**
      * Load a view
      * 
      * @param string $name
      * @return void
      */

      function loadView($name){
         //so dia tak perlu repeat require basePath('views/home-view.php');
         $viewPath = basePath("views/{$name}.php");

         if(file_exists($viewPath)){
            require $viewPath;
         }else{
            // require basePath("views/404.php"); kalau nak return error page
            echo "View '{$name} not found!'";
         }
      }

           /**
      * Load a partials
      * 
      * @param string $name
      * @return void
      */

      function loadPartial($name){
         //so dia tak perlu repeat require basePath('views/home-view.php');
         $partialPath = basePath("views/partials/{$name}.php");

         if(file_exists($partialPath)){
            require $partialPath;
         }else{
            // require basePath("views/404.php"); kalau nak return error page
            echo "Partial '{$name} not found!'";
         }
      }
     
?>