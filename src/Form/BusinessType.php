<?php
// src/Form/BusinessType.php

use App\Entity\Zone;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

$builder
    ->add('name')
    ->add('coords')
    ->add('zone', EntityType::class, [
        'class' => Zone::class,
        'choice_label' => 'name',
        'label' => 'Zone CTG'
    ]);
