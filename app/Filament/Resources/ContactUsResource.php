<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Filament\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone-arrow-down-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn ($record) => $record && $record->status === 'Resolved'),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->disabled(fn ($record) => $record && $record->status === 'Resolved'),
                Forms\Components\Textarea::make('message')
                    ->required()                     
                    ->maxLength(500)
                    ->disabled(fn ($record) => $record && $record->status === 'Resolved'),
                Forms\Components\Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'In Progress' => 'In Progress',
                        'Resolved' => 'Resolved',
                    ])
                    ->disabled(fn ($record) => $record && $record->status === 'Resolved'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('message'),
                Tables\Columns\TextColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->visible(fn ($record) => $record->status !== 'Resolved'), // Hanya tampil jika status bukan resolved        
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
            'index' => Pages\ListContactUs::route('/'),
            'create' => Pages\CreateContactUs::route('/create'),
            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Contact Us'; // Nama menu baru
    }

    public static function getBreadcrumb(): string
    {
        return 'Contact Us'; // Nama menu baru
    }
}
