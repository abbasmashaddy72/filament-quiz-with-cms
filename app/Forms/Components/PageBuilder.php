<?php

namespace App\Forms\Components;

use App\Forms\Blocks\RichText;
use App\Forms\Blocks\Tabs;
use Closure;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class PageBuilder
{
    public static function make(string $field): Repeater
    {
        return Repeater::make($field)
            ->label('Sections')
            ->schema([
                Toggle::make('full_width')
                    ->default(false)
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        if ($state === false) {
                            return $set('bg_color', '');
                        }
                    }),
                Select::make('bg_color')
                    ->label('Background Color')
                    ->options([
                        'primary' => 'Primary',
                        'secondary' => 'Secondary',
                        'tertiary' => 'Tertiary',
                        'accent' => 'Accent',
                        'gray' => 'Gray',
                        'light-gray' => 'Light Gray',
                        'white' => 'White',
                    ]),
                Builder::make('blocks')
                    ->blocks([
                        RichText::make(),
                        Tabs::make(),
                    ]),
            ])->columnSpanFull();
    }
}
