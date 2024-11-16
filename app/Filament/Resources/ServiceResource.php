<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

use App\Actions\Star;
use App\Actions\ResetStars;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';    

    public static function form(Form $form): Form
    {

        $iconOptions = [
            'fa-solid fa-home' => '<i class="fa-solid fa-home"></i> Home',
            'fa-solid fa-user' => '<i class="fa-solid fa-user"></i> User',
            'fa-solid fa-cog' => '<i class="fa-solid fa-cog"></i> Settings',
            'fa-solid fa-envelope' => '<i class="fa-solid fa-envelope"></i> Envelope',
            'fa-solid fa-check' => '<i class="fa-solid fa-check"></i> Check',
        ];        
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
                Forms\Components\FileUpload::make('img')
                    ->label('image')
                    ->image()                
                    ->openable()
                    ->imageEditor(),
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
                    ->fileAttachmentsVisibility('public'),               
                Forms\Components\TextInput::make('icon')
                    ->label('Icon')
                    ->required()
                    ->maxLength(255)
                    ->default('') // Atur ikon default jika diinginkan
                    ->suffixAction(
                        Action::make('setChurchIcon')
                            ->label('Church')
                            ->icon('fas-church')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-church');
                            })
                    )
                    ->suffixAction(
                        Action::make('setMosqueIcon')
                            ->label('Mosque')
                            ->icon('fas-mosque')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-mosque-slice');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWineGlassIcon')
                            ->label('Wine Glass')
                            ->icon('fas-wine-glass')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-wine-glass');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWalkingIcon')
                            ->label('Walking')
                            ->icon('fas-walking')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-walking');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWheelchairIcon')
                            ->label('Wheelchair')
                            ->icon('fas-wheelchair')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-wheelchair');
                            })
                    )
                    ->suffixAction(
                        Action::make('setUtensilsIcon')
                            ->label('Utensils')
                            ->icon('fas-utensils')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-utensils');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWineGlassIcon')
                            ->label('Wine Glass')
                            ->icon('fas-wine-glass')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-wine-glass');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWalkingIcon')
                            ->label('Walking')
                            ->icon('fas-walking')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-walking');
                            })
                    )
                    ->suffixAction(
                        Action::make('setWheelchairIcon')
                            ->label('Wheelchair')
                            ->icon('fas-wheelchair')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-wheelchair');
                            })
                    )
                    ->suffixAction(
                        Action::make('setUtensilsIcon')
                            ->label('Utensils')
                            ->icon('fas-utensils')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-utensils');
                            })
                    )
                    ->suffixAction(
                        Action::make('setBookIcon')
                            ->label('Book')
                            ->icon('fas-book')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-book');
                            })
                    )
                    ->suffixAction(
                        Action::make('setCityIcon')
                            ->label('City')
                            ->icon('fas-city')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-city');
                            })
                    )
                    ->suffixAction(
                        Action::make('setBicycleIcon')
                            ->label('Bicycle')
                            ->icon('fas-bicycle')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-bicycle');
                            })
                    )
                    ->suffixAction(
                        Action::make('setUsersIcon')
                            ->label('Users')
                            ->icon('fas-users')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-users');
                            })
                    )
                    ->suffixAction(
                        Action::make('setHandshakeIcon')
                            ->label('Handshake')
                            ->icon('fas-handshake')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-handshake');
                            })
                    )
                    ->suffixAction(
                        Action::make('setBriefcaseIcon')
                            ->label('Briefcase')
                            ->icon('fas-briefcase')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-briefcase');
                            })
                    )
                    ->suffixAction(
                        Action::make('setCameraIcon')
                            ->label('Camera')
                            ->icon('fas-camera')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-camera');
                            })
                    )            
                    ->suffixAction(
                        Action::make('setVideoIcon')
                            ->label('Video')
                            ->icon('fas-video')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-video');
                            })
                    )            
                    ->suffixAction(
                        Action::make('setVenus-marsIcon')
                            ->label('Venus-mars')
                            ->icon('fas-venus-mars')
                            ->action(function (Set $set) {
                                $set('icon', 'fas fa-venus-mars');
                            })
                    )            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->searchable()
                    ->limit(100),                    
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

}

