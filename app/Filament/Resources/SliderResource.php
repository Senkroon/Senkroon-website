<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('features')
                    ->label('Özellikler Listesi')
                    ->placeholder('Özellik yazıp Enter\'a basın')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('background_image')
                    ->label('Arka Plan Görseli')
                    ->image()->directory(directory: 'sliders')
                    ->visibility('public')
                    ->disk('public'),
                Forms\Components\FileUpload::make('front_image')
                    ->label('Ön Görsel (Cihazlar vb.)')
                    ->image()->directory(directory: 'sliders')
                    ->visibility('public')
                    ->disk('public'),
                Forms\Components\TextInput::make('button_text')
                    ->label('Birinci Buton Metni')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('button_link')
                    ->label('Birinci Buton Linki')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('secondary_button_text')
                    ->label('İkinci Buton Metni')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('secondary_button_link')
                    ->label('İkinci Buton Linki')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('bottom_text')
                    ->label('Alt Bilgi Metni (Butonların Altı)')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_active')
                    ->required()->default(true),
                Forms\Components\TextInput::make('animation_delay')
                    ->numeric()
                    ->default(100),
                Forms\Components\TextInput::make('overlay_class')
                    ->required()
                    ->maxLength(255)
                    ->default('overlay-op-8'),
                Forms\Components\TextInput::make('text_position')
                    ->required()
                    ->maxLength(255)
                    ->default('center'),
                Forms\Components\TextInput::make('text_color')
                    ->required()
                    ->maxLength(255)
                    ->default('text-color-light'),
                Forms\Components\TextInput::make('button_color')
                    ->required()
                    ->maxLength(255)
                    ->default('btn-primary'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('background_image')->disk('public')->visibility('public'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('animation_delay')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('overlay_class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text_position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
