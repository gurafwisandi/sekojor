@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('galery.update', Crypt::encryptString($data->id)) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Image" />
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                            <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce"
                                data-target=".bs-example-modal-lg">Image</a>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="status" value="aktif"
                                    {{ $data->aktif == 1 ? 'checked' : '' }} id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Aktif</label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                            <a href="{{ route('galery.index') }}" type="reset"
                                class="btn btn-secondary waves-effect m-l-5">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ URL::asset('files/galery/' . $data->image) }}" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
