<?php

namespace Spatie\Translatable\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\Model;

class AttributeIsNotTranslatable extends Exception
{
    public static function make(string $key, Model $model)
    {
        $translatableAttributes = implode(', ', $model->getTranslatableAttributes());

        return new static("Cannot translated attribute `{$key}` as it does not one of the translatable attributes: `$translatableAttributes`");
    }
}