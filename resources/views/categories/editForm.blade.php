@section("content")

    <form>
        @csrf
        <div class="form-group row">
            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Nombre</label>
            <div class="col-lg-10">
                <label>
                    <input name="name" type="text" class="form-control border-success" placeholder="Nombre">
                </label>
{{--                {!! $errors->first("name","<span class='form-text text-success'>:message</span>")!!}--}}

            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Descripcion</label>
            <div class="col-lg-10">
                <label>
                    <input name="description" type="text" class="form-control border-success" placeholder="Descripcion">
                </label>
{{--                {!! $errors->first("description","<span class='form-text text-success'>:message</span>")!!}--}}

            </div>
        </div>
        <button>Listo</button>
    </form>

@endsection