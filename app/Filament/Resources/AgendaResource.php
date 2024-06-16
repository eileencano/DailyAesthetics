<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('clientes_id')
                ->relationship('cliente', 'nombre')
                ->searchable()
                ->preload()
                ->createOptionForm([
                     Forms\Components\TextInput::make('nombre')
                       ->label('nombre')
                       ->required()
                       ->maxLength(255),
                       Forms\Components\TextInput::make('correo')
                       ->label('Email')
                       ->email()
                       ->required()
                       ->maxLength(255),
                       Forms\Components\TextInput::make('telefono')
                       ->label('Telefono')
                       ->tel()
                       ->required()
                       ->maxLength(20),
                ]),
                Forms\Components\Select::make('servicios_id')
                      ->label('servicio.nombre_servicio')
                      ->options([
                        1 => 'Manicura',
                        2 => 'Maquillaje',
                        3 => 'Depilacion',
                        4 => 'Acrilicas',
                        5 => 'Cepillado',
                        6 => 'Tintura',
                        7 => 'Pedicura',
                        8 => 'Diseño de Cejas',
                        9 => 'Corte de Cabello',


                    ])
                    ->searchable()

                    ->preload()
                    ->required(),
                Forms\Components\DatePicker::make('fecha')
                ->required(),
                Forms\Components\TimePicker::make('hora')
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente.nombre')
                ->label('Cliente')
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('servicio.nombre_servicio')
                ->label('Servicio')
                ->sortable()
                ->searchable(),




                Tables\Columns\TextColumn::make('fecha')
                    ->label('Fecha')
                    ->sortable(),

                Tables\Columns\TextColumn::make('hora')
                    ->label('Hora')
                    ->sortable(),
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }
}
