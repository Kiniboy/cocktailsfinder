<?php

namespace App;

use Kris\LaravelFormBuilder\Form;

class PostBar extends Form
{
    public function buildForm()
    {
        if ($this->getModel() && $this->getModel()->id) {
            $url = route('updatebar', $this->getModel()->id);
            $method = 'PUT';
            $label = "Editer le bar";
        } else {
            $url = route('postbar');
            $method = 'POST';
            $label = "Créer le bar";
        }

        $this
            ->add('name', 'text', [
                'label' => 'Nom',
            ])
            ->add('adress', 'textarea', [
                'label' => 'Adresse',
            ])
            ->add('longitude', 'textarea', [
                'label' => 'Longitude',
            ])
            ->add('laittude', 'textarea', [
                'label' => 'Latitude',
            ])
            ->add('bar', 'entity', [
                'class' => Bar::class,
                'multiple' => true,
                'property' => 'name'
            ])
            ->add('submit', 'submit', ['label' => $label]);

        $this->formOptions = [
            'method' => $method,
            'url' => $url
        ];
    }
}
