<?php

namespace App\DataTables\Admin\Transaksi;

use App\Models\Rujukan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RujukanDataTable extends DataTable
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
                return  $row->id;
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukan.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukan.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';

                $btn = $btn . '</div>';

                return $btn;
            })
            ->addColumn('status', function ($row) {
                $btn = '<div class="btn-group">';

                if ($row->status == '0') {
                    $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukan.status', $row->id) . '" class="btn btn-secondary btn-xs">Belum Disetujui</a>';
                } else {
                    $btn = $btn . '<a href="' . route('admin.data-transaksi.rujukan.status', $row->id) . '" class="btn btn-info btn-xs">Disetujui</a>';
                    $btn = $btn . '<a href="'  . route('admin.data-transaksi.rujukan.show', $row->id) . '" class="btn btn-info btn-xs"><i class="fa fa-print fa-fw"></i></a>';
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
    public function query(Rujukan $model)
    {
         return $model->with(['data_anak', 'instansi'])->select('rujukans.*')->newQuery();
        // return $model->select('rujukans.*')->with(['data_anak', 'instansi']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('rujukans-table')
            ->parameters([
                'responsive' => true,
                'autoWidth' => false
            ])
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
            ->orderBy(1)
            ->parameters([
                'responsive' => true,
                'autowidth' => false
            ])
            ->buttons(
                Button::make('create'),
                // Button::make('export'),
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
            Column::make('kode_surat','rujukans.kode_surat')->title('Kode Surat'),
            Column::make('tanggal_surat','rujukans.tanggal_surat')->title('Tanggal Surat'),
            // Column::make('kepada')->data('instansi.nama_instansi'),
            Column::make('instansi.nama_instansi','instansi.nama_instansi')->title('Instansi'),
            // Column::make('nama')->data('data_anak.nama_anak'),
            Column::make('data_anak.nama_anak','data_anak.nama_anak')->title('Nama Anak'),
            Column::make('umur','rujukans.umur')->title('Umur'),
            Column::make('alamat','rujukans.alamat')->title('Alamat'),
            // Column::make('bb_turun'),
            // Column::make('bb_naik'),
            Column::make('keluhan','rujukans.keluhan')->title('Keluhan'),
            Column::make('keterangan_rujukan','rujukans.keterangan_rujukan')->title('Keterangan Rujukan'),
            Column::computed('status')
                ->exportable(false)
                ->printable(false)
                // ->width(60)
                ->addClass('text-center'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                // ->width(60)
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
        return 'Admin\Transaksi\Rujukan_' . date('YmdHis');
    }
}
