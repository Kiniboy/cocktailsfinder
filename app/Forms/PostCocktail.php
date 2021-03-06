<?php

namespace App\Forms;

use App\Cocktail;
use Kris\LaravelFormBuilder\Form;

class PostCocktail extends Form
{
    public function buildForm()
    {
        if ($this->getModel() && $this->getModel()->id) {
            $url = route('cocktail.update', $this->getModel()->id);
            $method = 'PUT';
            $label = "Editer le cocktail";
        } else {
            $url = route('cocktail.store');
            $method = 'POST';
            $label = "Créer le cocktail";
        }

        $this
            ->add('name', 'text', [
                'label' => 'Nom',
            ])
            ->add('composition', 'textarea', [
                'label' => 'Composition',
            ])
            ->add('cocktail', 'entity', [
                'class' => Cocktail::class,
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
