<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\Summarizers\Range;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Infolists\Components\ImageEntry;


class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),                                        
                Forms\Components\Select::make('category')
                    ->options(function ($get, $record) {
                        // Ambil kategori yang sudah ada selain kategori dari data yang sedang diedit
                        $existingCategories = Content::whereIn('category', ['banner', 'about', 'contact','service', 'event', 'team', 'testimonial', 'article'])
                            ->when($record, function ($query) use ($record) {
                                // Kecualikan kategori dari data yang sedang diedit
                                return $query->where('id', '!=', $record->id);
                            })
                            ->pluck('category')
                            ->toArray();
                
                        // Tentukan opsi yang tersedia
                        $options = [];
                
                        // Tampilkan opsi kategori berdasarkan hasil query
                        if (!in_array('banner', $existingCategories)) {
                            $options['banner'] = 'Banner';
                        }
                
                        if (!in_array('about', $existingCategories)) {
                            $options['about'] = 'About';
                        }
                
                        if (!in_array('contact', $existingCategories)) {
                            $options['contact'] = 'Contact';
                        }

                        if (!in_array('service', $existingCategories)) {
                            $options['service'] = 'Service';
                        }

                        if (!in_array('event', $existingCategories)) {
                            $options['event'] = 'Event';
                        }

                        if (!in_array('team', $existingCategories)) {
                            $options['team'] = 'Team';
                        }

                        if (!in_array('testimonial', $existingCategories)) {
                            $options['testimonial'] = 'Testimonial';
                        }

                        if (!in_array('article', $existingCategories)) {
                            $options['article'] = 'Article';
                        }

                        return $options;
                    })                
                    ->required()                
                    ->reactive(),
                Forms\Components\FileUpload::make('img')
                    ->label('image')
                    ->image()                
                    ->openable()
                    ->imageEditor()
                    ->hidden(fn ($get) => in_array($get('category'), ['service', 'event', 'team', 'testimonial', 'article'])),
                Forms\Components\RichEditor::make('content')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->columnspan(2)
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->fileAttachmentsVisibility('public')
                    ->hidden(fn ($get) => in_array($get('category'), ['service', 'event', 'team', 'testimonial', 'article'])),

                    
                
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->limit(100),                    
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                ->options([
                    'banner' => 'Banner',
                    'about' => 'About',
                    'contact' => 'Contact',
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
        ];
    }
}
