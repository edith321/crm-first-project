<?php

namespace App\models;


class AprPersons extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_persons';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'e-mail', 'phone'];
}