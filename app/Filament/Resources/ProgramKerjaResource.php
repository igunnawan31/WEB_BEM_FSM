<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKerjaResource\Pages;
use App\Filament\Resources\ProgramKerjaResource\RelationManagers;
use App\Models\ProgramKerja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramKerjaResource extends Resource
{
    protected static ?string $model = ProgramKerja::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('namaproker')
                    ->label('Nama Program Kerja')
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
                Forms\Components\TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                Forms\Components\FileUpload::make('path_foto_proker')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '1:1'
                    ])
                    ->directory('public')
                    ->label('Foto Program Kerja')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaproker')->label('Nama Program Kerja'),
                Tables\Columns\TextColumn::make('bidang_id')
                    ->label('Nama Bidang')
                    ->getStateUsing(static function ($record) {
                        return $record->bidang ? $record->bidang->bidang : 'N/A';
                    }),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
                Tables\Columns\ImageColumn::make('path_foto_proker')->label('Foto Program Kerja')
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
            'index' => Pages\ListProgramKerjas::route('/'),
            'create' => Pages\CreateProgramKerja::route('/create'),
            'edit' => Pages\EditProgramKerja::route('/{record}/edit'),
        ];
    }
}
