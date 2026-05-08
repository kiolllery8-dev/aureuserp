<?php

namespace Webkul\Support\Filament\Resources;

use Filament\Resources\Resource;
use Webkul\Support\Models\State;

class StateResource extends Resource
{
    protected static ?string $model = State::class;

    protected static ?string $modelLabel = '縣市';

    protected static ?string $pluralModelLabel = '縣市';

    protected static bool $shouldRegisterNavigation = false;

    protected static bool $isGloballySearchable = false;

    protected static ?string $recordTitleAttribute = 'name';
}
