<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Property extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasFiles, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'name',
        'owner',
        'units',
        'description',
        'location',
        'till',
    ];

    public $translatedAttributes = [
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];
}
