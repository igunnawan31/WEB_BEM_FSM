<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Filament\Resources\AnggotaResource\RelationManagers;
use App\Models\Anggota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Anggota')
                    ->required(),
                Forms\Components\Select::make('bidang_id')
                    ->label('Bidang')
                    ->required()
                    ->options([
                        '1' => 'PSDM',
                        '2' => 'Child porn',
                        '3' => 'Ngentot bu guru'
                    ]),
                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),
                Forms\Components\TextInput::make('path_foto_anggota')
                    ->label('Path Foto Anggota')
                    ->required(),
            //     $table->id();
            // $table->string('nama');
            // $table->foreignId('bidang_id')->constrained(
            //     table: 'bidangs',
            //     indexName: 'bidangs_anggota_id'
            // );
            // $table->string('bidang');
            // $table->string('jabatan');
            // $table->string('path_foto_anggota');
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Anggota'),
                // Tables\Columns\TextColumn::make('bidang_id')->label('Bidang'), // assuming 'name' is the column in Bidang
                Tables\Columns\TextColumn::make('jabatan')->label('Jabatan'),
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
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
