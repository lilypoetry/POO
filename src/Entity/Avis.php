<?php

/**
 * Les espaces de noms permettent de différencié des classes PHP
 * portant le même nom
 */
namespace Entity;

/**
 * Cette classe représente l'architecture de la table SQL "avis"
 */
class Avis 
    {
        private int $id;
        private string $content;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

         /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId(int $id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of content
         */ 
        public function getContent()
        {
                return $this->content;
        }

        /**
         * Set the value of content
         *
         * @return  self
         */ 
        public function setContent(string $content)
        {
                $this->content = $content;

                return $this;
        }

       
    }