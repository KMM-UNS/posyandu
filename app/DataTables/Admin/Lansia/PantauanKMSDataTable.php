<?php

namespace App\DataTables\Admin\Lansia;

use App\Models\PantauanKMS;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PantauanKMSDataTable extends DataTable
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
            ->addColumn('more', '<i class="fa fa-plus"> </i>')
            ->rawColumns(['more', 'action'])
            ->addColumn('show', function (PantauanKMS $data) {
                return view('pages.admin.lansia.pantauan-kms.show', compact('data'));
            })
            // ->addColumn('show','Detail dari {{$namalansia1}}')
            ->addColumn('action', function ($row) {


                $btn = '<div class="btn-group">';
                //                 $btn = $btn . 'type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                //   Launch demo modal
                // </button>
                // $btn = $btn . '<a href="' . '" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"></a>';


                // $btn = $btn . '<a href="' . route('admin.data-lansia.pantauankms.show', $row->id) . '" class="btn btn-dark buttons-edit" id="example"><i class="fas fa-edit"></i></a>';

                $btn = $btn . '<a href="' . route('admin.data-lansia.pantauankms.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.data-lansia.pantauankms.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Master\DataLansiaDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PantauanKMS $model)
    {
        return $model->with(['lansia'])->select('pantauan_kms.*')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {

        return $this->builder()
            ->parameters([
                'initComplete' => 'function(){
                    let table = this.api();
                    $("#pantauan_kms-table").on("click", "td.details-control", function(){
                        let tr = $(this).closest("tr");
                        let row = table.row(tr);
                        if ( row.child.isShown() ) {
                            row.child.hide();
                            tr.removeClass("shown");
                        }
                        else {
                            row.child(row.data().show).show();
                            tr.addClass("shown");
                        }
                     })

                    }'
            ])
            //  $("#pantauan_kms-table").on("click", "td.details-control", function(){
            // alert("Hello")
            // })
            // }'
            // ])
            ->setTableId('pantauan_kms-table')
            ->columns($this->getColumns('nama_lansia1'))
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
            //Column::make('id'),
            //Column::make('no'),
            Column::make('tanggal_pemeriksaan', 'pantauan_kms.tanggal_pemeriksaan')->title(' Tanggal Pemeriksaan'),
            Column::make('lansia.nama_lansia', 'lansia.nama_lansia')->title('Nama Lansia'),
            // Column::make('kegiatan_harian'),
            // Column::make('status_mental'),
            Column::make('indeks_massa_tubuh', 'pantauan_kms.indeks_massa_tubuh')->title('Indeks Massa Tubuh'),
            Column::make('tekanan_darah', 'pantauan_kms.tekanan_darah')->title(' Tekanan Darah'),
            // Column::make('hemoglobin'),
            // Column::make('reduksi_urine'),
            // Column::make('protein_urine'),
            // Column::make('tb'),
            // Column::make('bb'),
            // Column::make('hasil'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::computed('more')->addClass('details-control'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'PantauanKMS_' . date('YmdHis');
    }
}
