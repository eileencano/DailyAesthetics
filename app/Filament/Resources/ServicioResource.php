<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicioResource\Pages;
use App\Filament\Resources\ServicioResource\RelationManagers;
use App\Models\Servicio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicioResource extends Resource
{
    protected static ?string $model = Servicio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_servicio')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('precio')
                ->required()
                ->numeric(),
                Forms\Components\FileUpload::make('imagen')
                ->label('Imagen del Servicio')
                ->image() // Esto asegura que solo se puedan subir archivos de imagen
                ->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('nombre_servicio')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('descripcion')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('precio')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\ImageColumn::make('imagen')
                    ->label('Imagen del Servicio')
                    ->sortable()
                    ->searchable(),

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
            'index' => Pages\ListServicios::route('/'),
            'create' => Pages\CreateServicio::route('/create'),
            'edit' => Pages\EditServicio::route('/{record}/edit'),
        ];
    }
}
