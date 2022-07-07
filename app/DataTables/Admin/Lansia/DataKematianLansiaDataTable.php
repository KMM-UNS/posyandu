<?php

namespace App\DataTables\Admin\Lansia;

use App\Models\DataKematianLansia;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DataKematianLansiaDataTable extends DataTable
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
                // if($row->status == '0'){
                //     $btn = $btn . '<a href="' . route('admin.data-lansia.datakematian.status', $row->id) . '" class="btn btn-success buttons-edit">Aktif</a>';
                // }else{
                //     $btn = $btn . '<a href="' . route('admin.data-lansia.datakematian.status', $row->id) . '" class="btn btn-secondary buttons-edit">Tidak Aktif</a>';
                // }
                $btn = $btn . '<a href="' . route('admin.data-lansia.datakematianlansia.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-lansia.datakematianlansia.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Master\DataKematianLansiaDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(DataKematianLansia $model)
    {
        return $model->select('data_kematian_lansia.*')->with(['kematian']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('data_kematian_lansia-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload')
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
            // Column::make('id'),
            //Column::make('no'),
            Column::make('nama_jenazah')->data('kematian.nama_lansia'),
            // Column::make('email'),
            // Column::make('no_hp'),
            Column::make('jenis_kelamin'),
            Column::make('tgl_lahir'),
            Column::make('tgl_meninggal'),

            // Column::make('ttl'),
            // Column::make('umur'),
            // Column::make('status_perkawinan')->data('statuskawin.nama'),
            // Column::make('alamat'),
            // Column::make('agama')->data('agama.nama'),
            // Column::make('pendidikan_terakhir'),
            // Column::make('golongan_darah')->data('golongandarah.nama'),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
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
        return 'DataKematianLansia_' . date('YmdHis');
    }
}
