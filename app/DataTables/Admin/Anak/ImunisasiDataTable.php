<?php

namespace App\DataTables\admin\Anak;

use App\Models\Imunisasi;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ImunisasiDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.anak-data.imunisasi.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.anak-data.imunisasi.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '<a href="' . route('admin.anak-data.imunisasi.show', $row->id) . '" class="btn btn-info buttons-show"><i class="fas fa-info fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\admin\Imunisasi $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Imunisasi $model)
    {
        // return $model->with(['jenisvaksin','data_anak','vitamin_anak','kader'])->select('imunisasis.*')->newQuery();
        return $model->with(['data_anak','jenisvaksin','vitamin_anak','kader'])->select('imunisasis.*')->newQuery();

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('imunisasis-table')
                    ->parameters([
                        'responsive' => true,
                        'autoWidth' => false
                    ])
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
                    ->orderBy(1)
                    ->parameters([
                        'responsive' => true, //untuk merapikan tabel
                        'autowidth' => false
                    ])
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No')->orderable(false)->searchable(false)->addClass('text-center'),
            // Column::make('id'),
            // Column::make('nama_anak_id')->data('data_anak.nama_anak'),
            Column::make('data_anak.nama_anak','data_anak.nama_anak')->title('Nama Anak'),
            Column::make('tanggal_imunisasi','imunisasis.tanggal_imunisasi')->title('Tanggal Imunisasi'),
            Column::make('berat_badan','imunisasis.berat_badan')->title('Berat Badan'),
            Column::make('tinggi_badan','imunisasis.tinggi_badan')->title('Tinggi Badan'),
            Column::make('umur','imunisasis.umur')->title('Umur'),
            Column::make('jenisvaksin.vaksin','jenisvaksin.vaksin')->title('Jenis Vaksin'),//jenisvaksin nama fungsi relasi
            // Column::make('jenis_vaksin')->data('jenisvaksin.vaksin'), //jenisvaksin nama fungsi relasi
            Column::make('vitamin_anak.nama_vitamin','vitamin_anak.nama_vitamin')->title('Vitamin Anak'),
            // Column::make('keluhan'),
            // Column::make('tindakan'),
            Column::make('status_gizi','imunisasis.status_gizi')->title('Status Gizi'),
            Column::make('kader.nama','kader.nama')->title('Nama Kader'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                //   ->width(50)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Imunisasi_' . date('YmdHis');
    }
}
