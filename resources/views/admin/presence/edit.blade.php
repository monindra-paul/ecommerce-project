@extends('admin.layout.app')



@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Franchisee</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('presences.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form action="" name="franchiseeForm" id="franchiseeForm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">                                            
                                            <label for="name">Franchisee name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Franchisee Name" value="{{$presences->name}}">
                                            <p class="error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="location">Franchisee Location</label>
                                            <input type="text" name="location" id="location" class="form-control"
                                                placeholder="Franchisee Location" value="{{$presences->location}}" >
                                            <p class="error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                    </div>
                                    <div class="col-md-12">
                                        <div class=" mb-3">
                                            <div class="">
                                                {{-- <h2 class="h4 mb-3">Pricing</h2> --}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="state">State</label>
                                                            <input type="text" name="state" id="state"
                                                                class="form-control" placeholder="Franchisee State" value="{{$presences->state}}">
                                                            <p class="error"></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Franchisee status</h2>
                            <div class="mb-3">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('presences.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
</div>
</form>
<!-- /.card -->
</section>
<!-- /.content -->
</div>

@endsection



@section('customJs')
<script>


    $("#franchiseeForm").submit(function (event) {

        event.preventDefault();
        var formArray = $(this).serializeArray();

        $("button[type=submit]").prop('disabled', true);

        $.ajax({
            url: '{{ route("presences.update", $presences->id) }}',
            type: 'put',
            data: formArray,
            dataType: 'json',
            success: function (response) {
                $("button[type=submit]").prop('disabled', false);


                if (response['status'] == true) {

                    $(".error").removeClass('invalid-feedback').html('');
                    $("input[type='text'], select, input[type='number']").removeClass('is-invalid');

                    window.location.href = "{{ route('presences.index') }}";

                }
                 else {
                    var errors = response['errors'];

                    if (errors['name']) {
                        $("#name").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['name']);
                    } else {
                        $("#name").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html("");
                    }


                    $(".error").removeClass('invalid-feedback').html('');
                    $("input[type='text'], select, input[type='number']").removeClass('is-invalid');

                    $.each(errors, function (key, value) {

                        $(`#${key}`).addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(value);

                    });

                }

            },
            error: function () {
                console.log("Something Went Wrong");
            }
        });

    });


</script>
@endsection