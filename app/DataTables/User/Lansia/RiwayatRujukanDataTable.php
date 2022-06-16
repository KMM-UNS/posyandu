<?php

namespace App\DataTables\User\Lansia;

use App\Models\DataLansia;
use App\Models\RujukanLansia;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RiwayatRujukanDataTable extends DataTable
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
    public function query(RujukanLansia $model)
    {
        
        // return $model->select('pantauan_kms.*')->with(['lansia']->where('createable_id', auth()->user()->id))->where('createable_type', 'App\Models\User');
        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;
        return $model->select('rujukan_lansia.*')->with(['rujukan'])->where('namalansia', $data);
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
            // ->setTableId('rujukan_lansia-table')
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
            Column::make('no_surat'),
            Column::make('kepada'),
            Column::make('tanggal_surat'),
            Column::make('namalansia')->data('rujukan.nama_lansia'),
            Column::make('umur'),
            Column::make('jeniskelamin'),
            Column::make('alamat'),
            Column::make('keluhan'),
                

        ];
        
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'RiwayatRujukan_' . date('YmdHis');
    }
}
