@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6">Gdrive Data</h4>
    </div>
</div>
<!-- Data IRD -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md-6 my-2">
            <a href="/data/add">
                <span class="btn btn-success">Tambah Data +</span>
            </a>
        </div>

        <div class="col-md-4 ms-auto">
            <form action="/data">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                    value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4 table-responsive">
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="col-1">No</th>
                        <th>Nama</th>
                        <th>Owner</th>
                        <th>Link</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gdrive as $no => $drive)
                    <tr>
                        <td align="center">{{ $no + $gdrive->firstItem() }}</td>
                        <td align="center">{{$drive->nama_file}}</td>
                        <td align="center">{{$drive->owner}}</td>
                        <td align="center"><a href="{{$drive->link}}" target="_blank">{{substr($drive->link,35)}}</a></td>
                        <td>
                            <a href="/data/edit/{{$drive->id}}" class="btn btn-warning">Edit</a>
                            <a href="/data/delete/{{$drive->id}}" onclick="return confirm('Yakin ingin hapus ? ')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $gdrive->links() }}
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')