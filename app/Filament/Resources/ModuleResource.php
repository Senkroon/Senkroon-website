<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModuleResource\Pages;
use App\Filament\Resources\ModuleResource\RelationManagers;
use App\Models\Module;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Forms\Components\TextInput;
use Illuminate\Support\Str;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Modüller';


    protected static ?string $pluralModelLabel = 'Modüller';

    protected static ?string $modelLabel = 'Modül';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make()
                    ->tabs([

                        /* =======================
                         * GENEL BİLGİLER
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Genel')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Modül Adı')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    })
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('short_description')
                                    ->label('Kısa Açıklama')
                                    ->rows(3)
                                    ->maxLength(500)
                                    ->required(),

                                Forms\Components\Select::make('category')
                                    ->label('Kategori')
                                    ->options([
                                        'workcube' => 'Workcube'
                                    ])
                                    ->required(),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Detay İçeriği')
                                    ->columnSpanFull(),

                                Forms\Components\RichEditor::make('extra_description')
                                                    ->label('Ekstra Açıklama')
                                                    ->columnSpanFull(),



                            ])
                            ->columns(2),

                        /* =======================
                         * MEDYA
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Medya')
                            ->schema([
                                Forms\Components\TextInput::make('icon')
                                    ->label('İkon (FontAwesome / SVG Class)')
                                    ->placeholder('fa-solid fa-cube'),

                                Forms\Components\FileUpload::make('cover_image')
                                    ->label('Kapak Görseli')
                                    ->image()
                                    ->directory('modules')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->imageEditor(),
                            ])
                            ->columns(2),




                        /* =======================
                         * SEO
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('SEO')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3)
                                    ->maxLength(255),
                            ]),

                        /* =======================
                         * AYARLAR
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Ayarlar')
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->default(true),

                                Forms\Components\TextInput::make('order')
                                    ->label('Sıralama')
                                    ->numeric()
                                    ->default(0),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Modül')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Aktiflik'),

                Tables\Filters\TernaryFilter::make('parent_id')
                    ->label('Parent Durumu')
                    ->trueLabel('Parent Var')
                    ->falseLabel('Parent Yok')
                    ->queries(
                        true: fn($query) => $query->whereNotNull('parent_id'),
                        false: fn($query) => $query->whereNull('parent_id'),
                    )
                    ->native(false),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListModules::route('/'),
            'create' => Pages\CreateModule::route('/create'),
            'edit' => Pages\EditModule::route('/{record}/edit'),
        ];
    }
}
