@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Master Data Encoder</h4>
    </div>
</div>
<!-- Data IRD -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md-6 my-2">
            <a href="/input">
                <span class="btn btn-success">Tambah Data +</span>
            </a>
        </div>

        <div class="col-md-4 ms-auto">
            <form action="/encoder">
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
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Serial Number</th>
                        <th>IP Control</th>
                        <th>Owner</th>
                        <th>Used</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">Dypsis</td>
                            <td align="center">28xee</td>
                            <td align="center">123szd12</td>
                            <td align="center">10.0.0.1</td>
                            <td align="center">Magna</td>
                            <td align="center">-</td>
                            <td>
                                <a href="#" class="btn btn-warning text-dark">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="d-flex justify-content-end">
        {{-- {{ $irds->links() }} --}}
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')