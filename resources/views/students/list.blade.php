@include('templates.header', ['title' => "HALO INI PAGES"])


<!-- <b>ini halaman tambah</b> -->
    <div class="container margin top-4">
        <div class="panel p-4"></div>
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <!-- <div class="logo">
            </div> -->
                <!-- <a href="views/home.php"><i class="fa-duotone fa-house-chimney"></i></a> -->
            </div>
            <div class="bottom">
                <h3 class="panel-title my-4"><b>Add Student</b></h3>
                @error('name')
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @enderror
                
                <form method="POST" action="{{ route('list-siswa.store')}}" enctype="multipart/form-data"> 
                    @csrf
                <div class="row">
                    <div class="col-lg-6 col-12">
                <div class="input-group mb-25">
                        <span class="input-group-text">
                            <i class="fa-regular fa-person"></i></span>
                        <input type="text" 
                        class="form-control" 
                        placeholder="name" 
                        name="name">
                    </div>
                    @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
               

                <div class="col-lg-6 col-12">
                <div class="input-group mb-25">
                        <span class="input-group-text">
                            <i class="fa-regular fa-home"></i></span>
                            <select name="classes" class="form-control">
                                <option value="">chose class</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
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
                        <span class="input-group-text">
                            <i class="fa-regular fa-building"></i></span>
                            <select name="jurusan" class="form-control">
                                <option value="">chose major</option>
                                <option value="PPLG">PPLG</option>
                                <option value="TJKT">TJKT</option>
                                <option value="TKRO">TKRO</option>
                                <option value="MPLB">MPLB</option>
                                <option value="PERHOTELAN">PERHOTELAN</option>
                                <option value="TMP">TMP</option>
                                <option value="DKV">DKV</option>
                                <option value="TBSM">TBSM</option>
                            </select>
                    </div>
                    @error('jurusan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
              
                
                <div class="col-lg-6 col-12">
                <div class="input-group mb-25">
                        <span class="input-group-text">
                            <i class="fa-regular fa-calendar"></i></span>
                        <input type="date" 
                        class="form-control" 
                        placeholder="name" 
                        name="birth_date"
                       >
                    </div>
                    @error('birth_date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
               
                
                <div class="col-lg-6 col-12">
                <div class="input-group mb-25">
                        <span class="input-group-text">
                            <i class="fa-regular fa-image"></i></span>
                        <input type="file" 
                        class="form-control" 
                        name="photo_profile"/>
                        </div>
                        @error('photo_profile')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
              
                </div>
               
                <div class="col-6"></div>
                <div class="col-6"></div>
                <div class="col-6"></div>

                    <button class="btn btn-primary w-100 login-btn" type="submit">Submit student</button>
                    <div class="mt-2">
                    </form>

                    
                <div classname="table table-responsive mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>name</th>
                                <th>class</th>
                                <th>major</th>
                                <th>Profile picture</th>
                                <th>actiion</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->classes }}</td>
                            <td>{{ $d->major }}</td>
                            <td>
                                
                                <img width="100" height="100" class="img-tumbnail" src="{{$d->photo_profile }}" alt="profile picture"/>
                            
                            </td>
                            
                            <td>
                                <div class="d-flex justify-center"></div>
                                <a 
                                class="btn btn-warning"
                                href="{{ route('list-siswa.show', $d->id) }}">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <form>
                            <div class="d-flex justify-center"></div>
                            <form method="POST"
                         action="{{ route('delete',['id' => $d->id]) }}">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" value="{{ $d->id }}">
                        <button href="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                            </form>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>

       
