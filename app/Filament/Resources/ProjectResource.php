<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Projeler';

    protected static ?string $pluralModelLabel = 'Projeler';

    protected static ?string $modelLabel = 'Proje';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make()
                    ->tabs([
                        /* =======================
                         * GENEL BİLGİLER
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Genel Bilgiler')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Proje Adı')
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

                                Forms\Components\TextInput::make('client_name')
                                    ->label('Müşteri Adı')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('sector')
                                    ->label('Sektör')
                                    ->maxLength(255)
                                    ->datalist([
                                        'İmalat',
                                        'Perakende',
                                        'Lojistik',
                                        'Sağlık',
                                        'Eğitim',
                                        'Finans',
                                        'İnşaat',
                                        'Turizm',
                                        'Teknoloji',
                                        'Gıda',
                                    ]),

                                Forms\Components\Textarea::make('short_description')
                                    ->label('Kısa Açıklama')
                                    ->rows(3)
                                    ->maxLength(500)
                                    ->columnSpanFull(),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Detaylı İçerik')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'bulletList',
                                        'orderedList',
                                        'h2',
                                        'h3',
                                        'link',
                                        'blockquote',
                                        'codeBlock',
                                    ])
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),

                        /* =======================
                         * PROJE DETAYLARI
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Proje Detayları')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Forms\Components\DatePicker::make('project_date')
                                    ->label('Başlangıç Tarihi')
                                    ->native(false)
                                    ->displayFormat('d/m/Y'),

                                Forms\Components\DatePicker::make('completion_date')
                                    ->label('Tamamlanma Tarihi')
                                    ->native(false)
                                    ->displayFormat('d/m/Y'),

                                Forms\Components\Select::make('status')
                                    ->label('Durum')
                                    ->options([
                                        'planlama' => 'Planlama',
                                        'devam ediyor' => 'Devam Ediyor',
                                        'tamamlandı' => 'Tamamlandı',
                                        'beklemede' => 'Beklemede',
                                        'iptal' => 'İptal',
                                    ])
                                    ->default('planlama')
                                    ->required(),

                                Forms\Components\TextInput::make('location')
                                    ->label('Konum')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('team_size')
                                    ->label('Ekip Büyüklüğü')
                                    ->numeric()
                                    ->suffix('kişi')
                                    ->minValue(1),

                                Forms\Components\TextInput::make('budget_range')
                                    ->label('Bütçe Aralığı')
                                    ->maxLength(255)
                                    ->placeholder('Örn: 50.000₺ - 100.000₺'),

                                Forms\Components\TagsInput::make('technologies_used')
                                    ->label('Kullanılan Teknolojiler')
                                    ->suggestions([
                                        'PHP',
                                        'Laravel',
                                        'Vue.js',
                                        'React',
                                        'MySQL',
                                        'PostgreSQL',
                                        'MongoDB',
                                        'Redis',
                                        'Docker',
                                        'AWS',
                                        'Azure',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\TagsInput::make('features')
                                    ->label('Özellikler')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),

                        /* =======================
                         * PROJE HİKAYESİ
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Proje Hikayesi')
                            ->icon('heroicon-o-book-open')
                            ->schema([
                                Forms\Components\Textarea::make('challenges')
                                    ->label('Karşılaşılan Zorluklar')
                                    ->rows(4)
                                    ->columnSpanFull(),

                                Forms\Components\Textarea::make('solutions')
                                    ->label('Sunulan Çözümler')
                                    ->rows(4)
                                    ->columnSpanFull(),

                                Forms\Components\Textarea::make('results')
                                    ->label('Elde Edilen Sonuçlar')
                                    ->rows(4)
                                    ->columnSpanFull(),
                            ]),

                        /* =======================
                         * MÜŞTERİ GÖRÜŞÜ
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Müşteri Görüşü')
                            ->icon('heroicon-o-chat-bubble-left-right')
                            ->schema([
                                Forms\Components\Textarea::make('testimonial')
                                    ->label('Müşteri Yorumu')
                                    ->rows(4)
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('testimonial_author')
                                    ->label('Yorum Sahibi')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('testimonial_position')
                                    ->label('Pozisyon/Ünvan')
                                    ->maxLength(255),
                            ])
                            ->columns(2),

                        /* =======================
                         * MEDYA
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Medya')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Forms\Components\FileUpload::make('cover_image')
                                    ->label('Kapak Görseli')
                                    ->image()
                                    ->directory('projects/covers')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('gallery_images')
                                    ->label('Galeri Görselleri')
                                    ->image()
                                    ->directory('projects/gallery')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->multiple()
                                    ->reorderable()
                                    ->imageEditor()
                                    ->maxFiles(10)
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('video_url')
                                    ->label('Video URL')
                                    ->url()
                                    ->placeholder('https://www.youtube.com/embed/...')
                                    ->helperText('YouTube embed URL\'si giriniz')
                                    ->columnSpanFull(),
                            ]),

                        /* =======================
                         * SEO
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('SEO')
                            ->icon('heroicon-o-magnifying-glass')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Forms\Components\Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3)
                                    ->maxLength(500)
                                    ->columnSpanFull(),
                            ]),

                        /* =======================
                         * AYARLAR
                         * ======================= */
                        Forms\Components\Tabs\Tab::make('Ayarlar')
                            ->icon('heroicon-o-cog-6-tooth')
                            ->schema([
                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Öne Çıkan Proje')
                                    ->helperText('Öne çıkan projeler ilk sıralarda gösterilir')
                                    ->default(false),

                                Forms\Components\Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->helperText('Pasif projeler sitede görünmez')
                                    ->default(true),

                                Forms\Components\TextInput::make('order')
                                    ->label('Sıralama')
                                    ->numeric()
                                    ->helperText('Küçük sayılar üstte gösterilir')
                                    ->default(0),
                            ])
                            ->columns(3),
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

                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Görsel')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-project.jpg')),

                Tables\Columns\TextColumn::make('title')
                    ->label('Proje Adı')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('client_name')
                    ->label('Müşteri')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('sector')
                    ->label('Sektör')
                    ->badge()
                    ->color('info')
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Durum')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'tamamlandı' => 'success',
                        'devam ediyor' => 'primary',
                        'planlama' => 'warning',
                        'beklemede' => 'gray',
                        'iptal' => 'danger',
                        default => 'info',
                    }),

                Tables\Columns\TextColumn::make('project_date')
                    ->label('Başlangıç')
                    ->date('d.m.Y')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('completion_date')
                    ->label('Bitiş')
                    ->date('d.m.Y')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Öne Çıkan')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-star')
                    ->trueColor('warning')
                    ->falseColor('gray'),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Güncellenme')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('sector')
                    ->label('Sektör')
                    ->options(
                        fn() => Project::whereNotNull('sector')
                            ->distinct()
                            ->pluck('sector', 'sector')
                            ->toArray()
                    ),

                Tables\Filters\SelectFilter::make('status')
                    ->label('Durum')
                    ->options([
                        'planlama' => 'Planlama',
                        'devam ediyor' => 'Devam Ediyor',
                        'tamamlandı' => 'Tamamlandı',
                        'beklemede' => 'Beklemede',
                        'iptal' => 'İptal',
                    ]),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Öne Çıkan')
                    ->placeholder('Tümü')
                    ->trueLabel('Evet')
                    ->falseLabel('Hayır'),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Aktif')
                    ->placeholder('Tümü')
                    ->trueLabel('Evet')
                    ->falseLabel('Hayır'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
