@extends('layouts.app_3')
<link href="{{asset('/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="card mb-3">

            <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Add Product Details</div>
            <div class="card-body">
                <form id="productsDetails">
                    <div class="form-group mb-3 row">
                        <label>Name: </label> &nbsp;
                        <input type="text" id="name" name="name" class="form-control col-md-5">
                    </div>
                    <div class="form-group mb-3 row">
                        <label>Price: </label> &nbsp;
                        <input title="pr" type="text" id="price" name="price" class="form-control col-md-5">
                    </div>
                    <div class="form-group mb-3 ">
                        <label>Description: </label> &nbsp;
                        <textarea id="description" name="description" class="form-control col-md-7" rows="3" aria-label="With textarea"></textarea>
                    </div>
                    <div class="form-group row">
                        <label>Choose image: </label>&nbsp;
                        <input id="ima" name="ima" type="file">
                    </div>
                    <div class="form-group row">
                        <label>Category: </label>&nbsp;
                        <select class="custom-select col-md-5" name="category" id="category">
                            <option value="0">choose..</option>
                            @foreach($cat as $catego)
                                <option value="{{ $catego->idCategory }}">{{ $catego->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <button id="addProduct" name="addProduct" class="btn btn-outline-warning">
                    Add Product
                </button>
            </div>

        <div class="card-footer small text-muted" align="center">{{ \Carbon\Carbon::now() }}</div>
    </div>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        var BtnAddProduct = $('#addProduct');
        BtnAddProduct.on('click', function () {
            var route = "{{ route("addProduct") }}";
            $.ajax({
                url: route,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $('#productsDetails').serialize(),
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    swal({
                        title: "Add product correctly!",
                        text: "your product has been added",
                        icon: "success"
                    })/*.then(
                        function(isConfirm) {
                            if (isConfirm) {
                                $('#name').val(" "),
                                    $('#price').val(" "),
                                    $('#description').val(""),
                                    $('#ima').val(" "),
                                    $('#category').val(""),
                                location.reload();
                            }
                        })*/;

                    console.log(data + 'que pedooooooooooooo');
                },
                error: function (data) {
                    swal("¡Error!", "Something was wrong!!!", "error");
                    console.log(data + 'errrrooooooooooooooooooor');
                }
            });
        });
    });
</script>
@endsection