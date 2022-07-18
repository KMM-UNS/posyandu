<?php

namespace App\DataTables\Admin\Transaksi;


use App\Models\RujukanLansia;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RujukanLansiaDataTable extends DataTable
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
                return  $row->id;
            })

            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';

                // if($row->status == '0'){
                //     $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.status', $row->id) . '" class="btn btn-secondary buttons-edit">Belum dikonfirmasi</a>';
                // }else{
                //     $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.status', $row->id) . '" class="btn btn-info buttons-edit">Sudah dikonfirmasi</a>';
                //     $btn = $btn . '<a href="'  . route('admin.data-transaksi.rujukanlansia.show', $row->id) . '" class="btn btn-info buttons-show"><i class="fa fa-print fa-fw"></i></a>';
                // }

                $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.edit', $row->id) . '" class="btn btn-dark buttons-edit btn-xs"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.destroy', $row->id) . '" class="btn btn-danger buttons-delete btn-xs"><i class="fas fa-trash fa-fw"></i></a>';
                // $btn = $btn . '<a href="'  . route('admin.data-transaksi.rujukanlansia.show', $row->id) . '" class="btn btn-info buttons-show"><i class="fa fa-print fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            })
            ->addColumn('status', function ($row) {
                $btn = '<div class="btn-group">';

                if ($row->status == '0') {
                    $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.status', $row->id) . '" class="btn btn-secondary btn-xs">Non-aktif</a>';
                } else {
                    $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukanlansia.status', $row->id) . '" class="btn btn-info btn-xs">Aktif</a>';
                    $btn = $btn . '<a href="'  . route('admin.data-transaksi.rujukanlansia.show', $row->id) . '" class="btn btn-info btn-xs"><i class="fa fa-print fa-fw"></i></a>';
                }
                $btn = $btn . '</div>';
                return $btn;
            })
            ->rawColumns(['status', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Transaksi\RujukanDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RujukanLansia $model)
    {
        // return $model->select('rujukan_lansia.*')->with(['rujukan']);
        return $model->with(['rujukan'])->select('rujukan_lansia.*')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('rujukan_lansia-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
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

            // Column::make('id'),
            Column::make('no_surat', 'rujukan_lansia.no_surat'),
            Column::make('kepada', 'rujukan_lansia.kepada'),
            Column::make('tanggal_surat', 'rujukan_lansia.tanggal_surat')->title('Tanggal Surat'),
            Column::make('rujukan.nama_lansia', 'rujukan.nama_lansia')->title('Nama Lansia'),
            Column::make('umur', 'rujukan_lansia.umur'),
            Column::make('jeniskelamin', 'rujukan_lansia.jeniskelamin')->title('Jenis Kelamin'),
            Column::make('alamat', 'rujukan_lansia.alamat'),
            Column::make('keluhan', 'rujukan_lansia.keluhan'),
            // Column::make('Status'),
            Column::computed('status')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
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
        return 'Admin\Transaksi\RujukanLansia_' . date('YmdHis');
    }
}
