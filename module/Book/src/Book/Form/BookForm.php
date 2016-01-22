<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Book\Form;

 use Zend\Form\Form;

 class BookForm extends Form
 {
     public function __construct($name = null)
     {
         // we want to ignore the name passed
         parent::__construct('book');

         $this->add(array(
             'name' => 'id',
             'type' => 'Hidden',
         ));
         $this->add(array(
             'name' => 'Titre',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Titre',
             ),
         ));
         $this->add(array(
             'name' => 'Auteur',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Auteur',
             ),
         ));
         $this->add(array(
             'name' => 'Genre',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Genre',
             ),
         ));
         $this->add(array(
             'name' => 'submit',
             'type' => 'Submit',
             'attributes' => array(
                 'value' => 'Go',
                 'id' => 'submitbutton',
             ),
         ));
     }
 }