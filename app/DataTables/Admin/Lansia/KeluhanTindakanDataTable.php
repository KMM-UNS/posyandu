<?php

namespace App\DataTables\Admin\Lansia;

use App\Models\KeluhanTindakan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KeluhanTindakanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        //$dd;
        return datatables()
            ->eloquent($query)
            ->setRowId(function ($row) {
                return $row->id;
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.data-lansia.keluhantindakan.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-lansia.keluhantindakan.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '<a href="/admin/data-transaksi/rujukanlansia/create' . '" class="btn btn-warning buttons"><i class="fas fa-clinic-medical fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Master\KeluhanTindakanDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(KeluhanTindakan $model)
    {
        return $model->select('keluhan_tindakan.*')->with(['lansia','kader']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('keluhan_tindakan-table')
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
            //Column::make('id'),
            //Column::make('no'),
            Column::make('nama_lansia')->data('lansia.nama_lansia'),
            Column::make('nama_pemeriksa')->data('kader.nama'),
            Column::make('tanggal_pemeriksaan'),
            Column::make('keluhan'),
            Column::make('tindakan'),
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
        return 'KeluhanTindakan_' . date('YmdHis');
    }
}
