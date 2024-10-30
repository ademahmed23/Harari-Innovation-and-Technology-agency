<div class="tab-pane fade show active" id="chapa-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.chapa-setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Chapa Status</label>
                    <select name="chapa_status" id="" class="select2 form-control">
                        <option @selected(@$paymentGateway['chapa_status'] == 1) value="1">Active</option>
                        <option @selected(@$paymentGateway['chapa_status'] == 0) value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Chapa Account Mode</label>
                    <select name="chapa_account_mode" id="" class="select2 form-control">
                        <option @selected(@$paymentGateway['chapa_account_mode'] === 'test') value="sandbox">Test</option>
                        <option @selected(@$paymentGateway['chapa_account_mode'] === 'live') value="live">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Chapa Country Name</label>
                    <select name="chapa_country" id="" class="select2 form-control">
                        <option value="">Select</option>
                        @foreach (config('country_list') as $key => $country)
                            <option @selected(@$paymentGateway['Chapa_country'] === $key) value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Chapa Currency Name</label>
                    <select name="chapa_currency" id="" class="select2 form-control">
                        <option value="">Select</option>
                        @foreach (config('currencys.currency_list') as $currency)
                        <option @selected(@$paymentGateway['chapa_currency'] === $currency) value="{{ $currency }}">{{ $currency }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Currency Rate ( Per {{ config('settings.site_default_currency') }} )</label>
                    <input name="chapa_rate" type="text" class="form-control" value="{{ @$paymentGateway['chapa_rate'] }}">
                </div>

                <div class="form-group">
                    <label for="">Chapa Client Id</label>
                    <input name="chapa_api_key" type="text" class="form-control" value="{{ @$paymentGateway['chapa_api_key'] }}">
                </div>

                <div class="form-group">
                    <label for="">chapa Secret Key</label>
                    <input name="Chapa_secret_key" type="text" class="form-control" value="{{ @$paymentGateway['chapa_secret_key'] }}">
                </div>

                {{-- <div class="form-group">
                    <label for="">Chapa App Id</label>
                    <input name="Chapa_app_id" type="text" class="form-control" value="{{ @$paymentGateway['chapa_app_id'] }}">
                </div> --}}

                <div class="form-group">
                    <label>Chapa Logo</label>
                    <div id="image-preview" class="image-preview chapa-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="chapa_logo" id="image-upload" />
                      </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.chapa-preview').css({
                'background-image': 'url({{ @$paymentGateway["chapa_logo"] }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
