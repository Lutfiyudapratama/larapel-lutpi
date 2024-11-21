@include('templates.header', ['title' => "HALO INI PAGES"])


<b>ini halaman tambah</b>

<div class="main-content login-panel login-panel-2">
    <h3 class="panel-title"></h3>
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <a href="{{ route('add') }}"><i class="fa-duotone fa-plus"></i></a>
            </div>
            <div class="bottom">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <h3 class="panel-title"><b>todolist</b></h3>
                <ul>
                          
                @foreach($data as $d)
                <li class="d-flex justify-content-between my-2">
                    <span>{{ $d->activity_name }}</span>
                <div>
                    <a href="/todolist-update/{{ $d->id }}" class="btn btn-warning">
                        <i class="fa-solid fa-edit"></i>
                        </a>
                        <form method="POST"
                         action="{{ route('delete',['id' => $d->id]) }}">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" value="{{ $d->id }}">
                        <button href="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    </form>    
                </div>
                </li>
                @endforeach
              

                <form method="POST" action="{{ Route ('add')}}">
                    @csrf



                    <div class="footer">
                        <p>Copyright© <script>
                            document.write(new Date().getFullYear())
                            </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
                    </div>
            </div>

            @include('templates.footer')