{{-- @if($page_data->portfolio_status == 'Show') --}}
<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">

                @if($page_data->portfolio_subtitle != '')
                <h2>{{ $page_data->portfolio_subtitle }}</h2>
                @endif

                @if($page_data->portfolio_title != '')
                <h3>{{ $page_data->portfolio_title }}</h3>
                @endif

            </div>
            <div class="col-md-12">
                <div class="filter">
                    <ul>
                        <li data-filter="*">All</li>
                        @foreach($portfolio_categories as $item)
                        <li data-filter=".abc{{ $item->id }}">{{ $item->category_name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="filter-items">
                    @foreach($portfolios as $item)
                    <div class="filter-item abc{{ $item->portfolio_category_id }}">
                        <div class="inner">
                            <div class="photo"><a href="{{ route('portfolio_detail',$item->slug) }}"><img src="{{ asset('uploads/'.$item->photo) }}" alt=""></a></div>
                            <div class="text">
                                <h2>{{ $item->name }}</h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}
