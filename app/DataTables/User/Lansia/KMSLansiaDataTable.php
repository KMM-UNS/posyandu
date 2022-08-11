<?php

namespace App\DataTables\User\Lansia;

use App\Models\DataLansia;
use App\Models\PantauanKMS;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KMSLansiaDataTable extends DataTable
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
            ->setRowId(function ($row) {
                return $row->id;
            });
        // ->addColumn('action', function ($row) {
        //     $btn = '<div class="btn-group">';
        //     $btn = $btn . '<a href="' . route('userlansia.biodatalansia.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
        //     $btn = $btn . '<a href="' . route('userlansia.biodatalansia.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
        //     $btn = $btn . '</div>';

        //     return $btn;
        // });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Master\KMSLansiaDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PantauanKMS $model)
    {

        // return $model->select('pantauan_kms.*')->with(['lansia']->where('createable_id', auth()->user()->id))->where('createable_type', 'App\Models\User');
        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        return $model->select('pantauan_kms.*')->with(['lansia'])->where('nama_lansia1', $data);
        // return $model->select('pantauan_kms.*')->with(['lansia']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('pantauan_kms-table')
            ->columns($this->getColumns('nama_lansia1'))
            ->minifiedAjax()
            ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
            ->buttons(
                // Button::make('create'),
                Button::make('export'),
                Button::make('print'),

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
            //Column::make('id'),
            //Column::make('no'),
            Column::make('tanggal_pemeriksaan'),
            Column::make('nama_lansia1')->data('lansia.nama_lansia')->title('Nama Lansia'),
            Column::make('kegiatan_harian'),
            Column::make('status_mental'),
            // Column::make('tb'),
            // Column::make('bb'),
            Column::make('indeks_massa_tubuh'),
            Column::make('tekanan_darah'),
            Column::make('hemoglobin'),
            Column::make('reduksi_urine'),
            Column::make('protein_urine'),
            Column::make('keluhan'),
            Column::make('tindakan')
            // Column::computed('action')
            //     ->exportable(false)
            //     ->printable(false)
            //     ->width(60)
            //     ->addClass('text-center'),


        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'KMSLansia_' . date('YmdHis');
    }
}
