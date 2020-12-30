@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Lokasi') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('lokasi:store') }}" enctype="multipart/form-data">
                   @csrf
                     <div class="form-group">
                     <label>Kod Lokasi</label>
                     <input type="text" name="Kod" class="form-control">
                     </div>

                     <div class="form-group">
                     <label>Nama Lokasi</label>
                     <textarea name="NamaLokasi" class="form-control"></textarea>
                     </div>

                     <div class="form-group">
                     <label>Kod Cawangan</label>
                     <input type="text" name="CawKod" class="form-control">
                     </div>

                    

                     <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>

                     </div>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
