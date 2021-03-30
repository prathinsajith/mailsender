@extends('layouts.appVoyo')

@section('title', 'Mail Entry')

@section('content')

    <div class="card card-custom">
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="form-group form-group-last">
                    <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon2-check-mark text-success"></i></div>
                        <div class="alert-text">
                            <p>{{ $message }}</p>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">
                    Mail Entry
                </h3>
            </div>
            <!--begin::Form-->
            <form class="form" action="" method="post" id="submit_form" enctype="multipart/form-data">
                @csrf <div class="card-body">
                    {{-- <div class="multiple-val-input">
                    <ul>
                        <input type="text">
                        <span class="input_hidden"></span>
                    </ul>
                </div> --}}
                <label>Email address <span class="text-danger"></span></label>
                    <div class="form-group ">
                        <input type="text" id="example" name="recipient_email[]" placeholder="" class="form-control" required>
                    </div>
                    {{-- <div  >
                    <label>Email address <span class="text-danger"></span></label>
                    <input type="text" name="recipient_email"
                        class="form-control @error('recipient_email') is-invalid @enderror" placeholder="Enter email" />
                    @error('recipient_email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                    <div class="form-group">
                        <label>User Name<span class="text-danger"></span></label>
                        <input type="text" name="recipient_name"
                            class="form-control @error('recipient_name') is-invalid @enderror" placeholder="Sender Name" />
                        @error('recipient_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title <span class="text-danger"></span></label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Enter email" />
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="exampleTextarea"> Subject</label>
                        <textarea class="form-control @error('subject') is-invalid @enderror" name="subject"
                            id="exampleTextarea" rows="6"></textarea>
                        @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" id="save_btn" class="btn btn-primary mr-2">Send</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
    {{-- <script>
    $('.multiple-val-input').on('click', function(){
            $(this).find('input:text').focus();
        });
        $('.multiple-val-input ul input:text').on('input propertychange', function(){
            $(this).siblings('span.input_hidden').text($(this).val());
            var inputWidth = $(this).siblings('span.input_hidden').width();
            $(this).width(inputWidth);
        });
        $('.multiple-val-input ul input:text').on('keypress', function(event){
            if(event.which == 32 || event.which == 44){
                var toAppend = $(this).val();
                if(toAppend!=''){
                    $('<li><a href="#">×</a><div>'+toAppend+'</div></li>').insertBefore($(this));
                    $(this).val('');
                } else {
                    return false;
                }
                return false;
            };
        });
        $(document).on('click','.multiple-val-input ul li a', function(e){
            e.preventDefault();
            $(this).parents('li').remove();
        });
</script> --}}

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">

    </script>
    <script>
        $(document).ready(function($) {
            let data = []
            $("#example").email_multiple({
                data: data
            })
            $("#save_btn").click(function() {

                console.log($("#example").val());
                $.ajax({
                    url: 'sendmail',
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'recipient_email': $("#example").val(),
                        'recipient_name': $('input[name=recipient_name]').val(),
                        'title': $('input[name=title]').val(),
                        'subject': $('#exampleTextarea').val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {

                    }

                });
            });

        });

    </script>



    {{-- <script src="jquery.email.multiple.js"></script> --}}
    <script src="jquery.email.multiple.js"></script>



@endsection

@section('js_files')
@endsection

@section('js_custom')
@endsection

@section('css_files')
@endsection

@section('css_custom')
@endsection
