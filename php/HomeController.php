<?php
    class HomeController{
        public function renderHomePage() {
            include 'php/articles.php';

            // Instanciar a classe Artigo
            $artigo = new Artigo();

            $articleHeroSection = $artigo->getArticle("hero-section-article", false);
            $articlePresentation = $artigo->getArticle("my-presentation", false);
            

            include "../index.php";
            include "../includes/header.php";
        }
    }
?>