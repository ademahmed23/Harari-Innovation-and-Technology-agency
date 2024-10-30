<?php

namespace App\DataTables;

use App\Models\BlogCategory;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Button;

class BlogCategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     */
    public function dataTable($query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $edit = "<a href='" . route('admin.blog-category.edit', $query->id) . "' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='" . route('admin.blog-category.destroy', $query->id) . "' class='btn btn-danger delete-item ml-2'><i class='fas fa-trash'></i></a>";
                return $edit . $delete;
            })
            ->addColumn('status', function ($query) {
                return $query->status === 1 ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-danger">active</span>';
            })
            ->rawColumns(['action', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of the dataTable.
     */
    public function query(BlogCategory $model)
    {
        $language = request()->get('language', getLangauge()); // Default language code if none specified
        return $model->newQuery()->where('language', $language);
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('blogcategory-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the DataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('status'),
            Column::make('language'),
            Column::make('action')->orderable(false)->searchable(false)
            ->width(100)
            ->addClass('text-center'),
        ];
    }
}
