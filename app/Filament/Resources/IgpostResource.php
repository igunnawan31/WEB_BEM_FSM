<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IgpostResource\Pages;
use App\Filament\Resources\IgpostResource\RelationManagers;
use App\Models\Igpost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class IgpostResource extends Resource
{
    protected static ?string $model = Igpost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('deskripsi_foto')
                        ->label('Deskripsi'),
                    FileUpload::make('post_foto')
                        ->label('Foto Postingan BEM FSM')
                        ->imageEditorAspectRatios([
                            '1:1'
                        ])
                        ->image()
                        ->directory('uploads')
                        ->disk('public')
                        ->visibility('public')
                        ->required(),
                    Select::make('tipepostingan')
                        ->label('Tipe Postingan')
                        ->required()
                        ->options([
                            '1' => 'Postingan Biasa',
                            '2' => 'Kemahasiswaan',
                            '3' => 'Karir dan Profesi',
                            '4' => 'Beasiswa',
                            '5' => 'Administrasi',
                        ]),
                    TextInput::make('linkig')
                        ->label('Link Instagram')
                        ->required(),
                    Select::make('bidang_id')
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
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('deskripsi_foto'),
                TextColumn::make('linkg'),
                TextColumn::make('bidang_id')
                    ->label('Nama Bidang')
                    ->getStateUsing(static function ($record) {
                        return $record->bidang ? $record->bidang->bidang : 'N/A';
                    }),
                ImageColumn::make('post_foto'),
                TextColumn::make('created_at')->since()
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
            'index' => Pages\ListIgposts::route('/'),
            'create' => Pages\CreateIgpost::route('/create'),
            'edit' => Pages\EditIgpost::route('/{record}/edit'),
        ];
    }
}
