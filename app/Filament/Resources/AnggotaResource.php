<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Anggota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AnggotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaResource\RelationManagers;

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
                        '1' => 'Tim Penjamin Mutu Organisasi',
                        '2' => 'Bidang Pengembangan Sumber Daya Mahasiswa',
                        '3' => 'Bidang Riset dan keilmuwan',
                        '4' => 'Bidang Kesejahteraan Mahasiswa',
                        '5' => 'Bidang Harmonisasi Kampus',
                        '6' => 'Bidang Ekonomi Kreatif',
                        '7' => 'Bidang Seni dan Olahraga',
                        '8' => 'Bidang Pengabdian Masyarakat',
                        '9' => 'Bidang Sosial dan Politik',
                        '10' => 'Biro Statistika',
                        '11' => 'Biro Kantor Media Informasi',
                        '12' => 'Biro Hubungan Masyarakat',
                        '13' => 'Badan Pengurus Harian (BPH)',
                    ]),
                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),
                Forms\Components\FileUpload::make('path_foto_anggota')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '1:1'
                    ])
                    ->directory('anggota')
                    ->label('Foto Anggota')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Anggota'),
                Tables\Columns\TextColumn::make('bidang_id')
                    ->label('Nama Bidang')
                    ->getStateUsing(static function ($record) {
                        return $record->bidang ? $record->bidang->bidang : 'N/A';
                    }),
                Tables\Columns\TextColumn::make('jabatan')->label('Jabatan'),
                Tables\Columns\ImageColumn::make('path_foto_anggota')->label('Foto Anggota')
            ])
            ->filters([
                //
            ])
            // ->query(function ($query) {
            //     return $query->with('bidang'); // Eager load the relationship
            // })
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
