@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-auto col-md-12 mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" id="latinToCyrillic">
                    <span class="spinner-grow spinner-grow-sm me-2 d-none" id="spinnerL"></span>
                    {{__('Лотиндан Криллга')}}
                </button>
            </div>

        </div>

        <div class="col-lg-auto col-md-12 mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-danger">
                    <span class="spinner-grow spinner-grow-sm d-none me-2"></span>
                    {{__('Криллдан Лотинга')}}</button>
            </div>
        </div>

    </div>

    <div class="row justify-content-between">
        <div class="col-md-6 mb-3 position-relative">
            <textarea name="" class="form-control" id="text" cols="30" rows="15"
                      placeholder="{{__('Матнни киритинг ...')}}"></textarea>
            <div class="position-absolute bottom-button">
                <button class="btn btn-soft-secondary btn-sm"><i class="fas fa-copy"></i></button>
            </div>
        </div>
        <div class="col-md-6 mb-3 position-relative">
            <textarea name="" class="form-control" id="result" cols="30" rows="15"></textarea>
            <div class="position-absolute bottom-button">
                <button class="btn btn-soft-secondary btn-sm" id="copyResult"><i class="fas fa-copy"></i></button>
            </div>
        </div>
    </div>


        <div class="row mt-3 mb-3">
            <div class="col-lg-6 col-md-12">
                <div class="card border border-300 h-100 w-100 overflow-hidden">
                    <div class="bg-holder d-block bg-card" style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;"></div>

                    <div class="card-body px-5 position-relative">
                        <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
                        <h3 class="mb-5">Early bird gets the warm leads!</h3>

                        <button class="btn btn-success"><i class="far fa-file-excel"></i> {{__('Excel')}}</button>
                        <button class="btn btn-warning"><i class="far fa-file-word"></i> {{__('Word')}}</button>

                    </div>
                    <div class="card-footer border-0 py-0 px-5 z-index-1">
                     </div>
                </div>
            </div>
        </div>
@endsection

@push('scripts')
    <script>

        $("#file").file({
            theme: 'fas',
            language: 'ru',
        });

        $(document).ready(function () {

            $("#copyResult").click(function () {
                alert("button");
            });

            $("#latinToCyrillic").click(function () {

                $('#spinnerL').removeClass('d-none');

                const data = {
                    'text': $('#text').val(),
                    'lang': 'cyrillic'
                };

                $.ajax({
                    url: "{{route('replace')}}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    success: function (result) {
                        setTimeout(() => {
                            $('#result').val(result.result);
                            $('#spinnerL').addClass('d-none');
                        }, 1000);


                    }
                });

            });

        });


    </script>
@endpush
