<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CatatanResource\Pages;
use App\Models\Catatan;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CatatanResource extends Resource
{
    protected static ?string $model = Catatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('catatan')
                    ->label('Catatan')
                    ->required(),
                Select::make('pengajar_id')
                    ->relationship('pengajar', 'name')
                    ->required(),
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d/m/Y H:i'),
                TextColumn::make('pengajar.name')->label('Pengajar'),
                TextColumn::make('siswa.name')->label('Siswa'),
                TextColumn::make('catatan')->label('Catatan'),
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
            'index' => Pages\ListCatatans::route('/'),
            'create' => Pages\CreateCatatan::route('/create'),
            'edit' => Pages\EditCatatan::route('/{record}/edit'),
        ];
    }
}
