<?php

namespace App\DataTables\Admin\Dataibu;

use App\Models\PeriksaIbuHamil;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PeriksaIbuHamilDataTable extends DataTable
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
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.data-ibu.ibuhamil.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-ibu.ibuhamil.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Dataibu\PeriksaIbuHamilDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PeriksaIbuHamil $model)
    {
        return $model->select('periksa_ibu_hamils.*')->with(['golda']);
        return $model->select('periksa_ibu_hamils.*')->with(['vitamin']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('periksa_ibu_hamils-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
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
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('nama'),
            Column::make('golongan_darah')->data('golda.nama'),
            Column::make('tanggal_periksa'),
            Column::make('tinggi_badan'),
            Column::make('berat_badan'),
            Column::make('riwayat_kesehatanibu'),
            Column::make('status_pemberian_vitamin'),
            Column::make('riwayat_penyakit_keluarga'),
            Column::make('keluhan_ibu_hamil'),
            Column::make('tenaga_kesehatan')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin\Dataibu\PeriksaIbuHamil_' . date('YmdHis');
    }
}
