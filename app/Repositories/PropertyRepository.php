<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Property;

class PropertyRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleFiles, HandleRevisions, HandleTags;

    public function __construct(Property $model)
    {
        $this->model = $model;
    }
}
