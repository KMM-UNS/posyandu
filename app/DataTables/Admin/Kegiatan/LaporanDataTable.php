<?php

namespace App\DataTables\Admin\Kegiatan;


use App\Models\Pengajuan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LaporanDataTable extends DataTable
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
                //     $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.status', $row->id) . '" class="btn btn-secondary buttons-edit">Belum Dilaksanakan</a>';
                // }else{
                //     $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.status', $row->id) . '" class="btn btn-info buttons-edit">Sudah dilaksanakan</a>';
                // }

                $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.show', $row->id) . '" class="btn btn-warning buttons-detail"><i class="fa fa-eye"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            })
            ->addColumn('status', function ($row) {
                $btn = '<div class="btn-group">';

                if ($row->status == '0') {
                    $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.status', $row->id) . '" class="btn btn-secondary bts-xs ">Belum Dilaksanakan</a>';
                } else {
                    $btn = $btn . '<a href="' . route('admin.data-kegiatan.datakegiatanlansia.status', $row->id) . '" class="btn btn-info btn-xs">Sudah dilaksanakan</a>';
                }

                $btn = $btn . '</div>';
                return $btn;
            })
            ->rawColumns(['status', 'action'])
            ->editColumn('jumlah_iuran', function ($row) {
                return ('Rp ' . number_format($row->jumlah_iuran, 2, ',', '.'));
            });
    }


    public function query(KegiatanLansia $model)
    {
        return $model->select('kegiatan_lansia.*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('kegiatan_lansia-table')
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
            Column::make('nama'),
            Column::make('deskripsi'),
            Column::make('lokasi'),
            Column::make('tanggal_kegiatan'),
            Column::make('waktu_mulai'),
            Column::make('waktu_selesai'),
            Column::make('jumlah_iuran'),
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
        return 'KegiatanLansia_' . date('YmdHis');
    }
}
