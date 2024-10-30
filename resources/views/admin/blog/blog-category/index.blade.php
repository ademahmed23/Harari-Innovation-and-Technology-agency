@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Blog Categories') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All Blog Categories') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.blog-category.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    @foreach ($languages as $language)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->index === 0 ? 'active' : '' }}" id="home-tab-{{ $language->lang }}" data-toggle="tab"
                                href="#home-{{ $language->lang }}" role="tab" aria-controls="home"
                                aria-selected="{{ $loop->index === 0 ? 'true' : 'false' }}">{{ $language->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                    @foreach ($languages as $language)
                        <div class="tab-pane fade show {{ $loop->index === 0 ? 'active' : '' }}"
                            id="home-{{ $language->lang }}" role="tabpanel" aria-labelledby="home-tab-{{ $language->lang }}">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped card-body" id="table-{{ $language->lang }}">
                                        <thead>
                                            <tr>
                                                <th class="text">#</th>
                                                <th class="text">{{ __('admin.Name') }}</th>
                                                <th class="text">{{ __('admin.Language') }}</th>
                                                <th class="text">{{ __('admin.Status') }}</th>
                                                <th class="text">{{ __('admin.Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="card-body">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('admin.Value') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}
                {{-- <div class="modal-body">
                    <form action="{{ route('admin.update-lang-string') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">{{ __('admin.Value') }}</label>
                            <input type="text" name="value" class="form-control" value="">
                            <input type="hidden" name="lang_code" class="form-control" value="">
                            <input type="hidden" name="key" class="form-control" value="">
                            <input type="hidden" name="file_name" class="form-control" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('admin.Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('admin.Save changes') }}</button>
                        </div>
                    </form>
                </div> --}}
            {{-- </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize DataTables for each language tab
            var dataTables = [];
            @foreach ($languages as $language)
                dataTables['{{ $language->lang }}'] = $("#table-{{ $language->lang }}").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('admin.blog-category.index') }}",
                        data: function(d) {
                            d.language = '{{ $language->lang }}'; // Pass language parameter
                        }
                    },
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'language', name: 'language' },
                        { data: 'status', name: 'status' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });
            @endforeach

            // Handle tab changes to refresh DataTable based on the selected language
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr('href');
                var langCode = target.split('-')[1];

                // Trigger DataTable redraw to ensure proper rendering
                dataTables[langCode].columns.adjust().draw();
            });

            // Handle modal button click
          

            // Handle translate form submission
           
        });
    </script>
@endpush

