<form action="{{ route('addonPhysician.update') }}" method="post" class="row">
    @csrf

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input id="name" type="text" class="form-control s ou" name="name" value="{{ $addonPhysician->name }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: </label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ $addonPhysician->reference_code }}">
                        <input id="organisation_id" value={{ $addonPhysician->company_id }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ encrypt($addonPhysician->id) }}">

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
