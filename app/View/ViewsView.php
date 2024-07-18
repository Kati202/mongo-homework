<?php
namespace App\View;

class ViewsView
{
    public static function Begin()
    {
        echo '<!DOCTYPE html>
                <html lang="hu">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Contacts</title>

                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                </head>
                <body class="bg-light">

                    <main class="container pt-4">

                        <h1>Futár adatok</h1>';
    }
    public static function End()
    {
        echo '</main>
              </body>
	      </html>';
    }
    
    public static function OpenSection($title)
    {
        echo '<section class="p-4 bg-white border shadow mb-4">
                <h3 class="mb-4">'. $title .'</h3>';
    }
    public static function CloseSection()
    {
        echo '</section>';
    }
    public static function Search()
    {
        echo '<div class="col-4">'; 
        echo '<form method="get" action="index.php" class="mb-4 ">';
        echo '<div class="input-group">';
        echo '<input type="text" class="form-control" placeholder="Keresés név alapján" name="search">';
        echo '<button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>';
        echo '</div>';
        echo '</form>';
        echo '</div>'; 
    }
}