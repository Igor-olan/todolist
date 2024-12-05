@include('templates.header', ['title' => 'List Students'])

<div class="container mt-4">
    <div class="panel p-4">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h6 class="panel-title my-4">Add Students</h6>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" method="{{ route('list-siswa.update', $data->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-person"></i></span>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{ $data->name }}">
                            </div>
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                                <select value="{{ $data->classes }}" name="classes" class="form-control">
                                    <option value="">CHOOSE CLASS</option>
                                    <option value="X" @if ($data->classes == 'X') selected @endif>X</option>
                                    <option value="XI" @if ($data->classes == 'XI') selected @endif>XI</option>
                                    <option value="XII" @if ($data->classes == 'XII') selected @endif>XII
                                    </option>
                                </select>
                            </div>
                            @error('classes')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                                <select value="{{ $data->major }}" name="major" class="form-control">
                                    <option value="">CHOOSE MAJOR</option>
                                    <option value="PPLG" @if ($data->major == 'PPLG') selected @endif>PPLG
                                    </option>
                                    <option value="TJKT" @if ($data->major == 'TJKT') selected @endif>TJKT
                                    </option>
                                    <option value="MPLB" @if ($data->major == 'MPLB') selected @endif>MPLB
                                    </option>
                                    <option value="TBSM" @if ($data->major == 'TBSM') selected @endif>TBSM
                                    </option>
                                    <option value="HOTEL" @if ($data->major == 'HOTEL') selected @endif>HOTEL
                                    </option>
                                    <option value="TMP" @if ($data->major == 'TMP') selected @endif>TMP
                                    </option>
                                    <option value="DKV" @if ($data->major == 'DKV') selected @endif>DKV
                                    </option>
                                    <option value="TKRO" @if ($data->major == 'TKRO') selected @endif>TKRO
                                    </option>
                                </select>
                            </div>
                            @error('major')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                                <input type="date" class="form-control" placeholder="Name" name="birth_date"
                                    value="{{ $data->birth_date }}">
                            </div>
                            @error('birth_date')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-image"></i></span>
                                <input type="file" class="form-control" name="photo_profile">
                            </div>
                            @error('photo_profile')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <button class="btn btn-primary w-100 login-btn" type="submit">Submit Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
