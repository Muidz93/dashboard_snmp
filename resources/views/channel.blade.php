@include('header')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
        <h4 class="display-6 mt-3 mb-3">Data All Channel</h4>
    </div>
</div>

<!-- Data Channel -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
        <a href="/channel">
            <span class="badge bg-success">Tambah Data +</span>
        </a>

    </div>

    <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4 table-responsive">
            <table class="table table-stripe ">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>No Channel</th>
                        <th>Nama Channel</th>
                        <th>Kualitas</th>
                        <th>Downlink</th>
                        <th>Source</th>
                        <th>Frequensi</th>
                        <th>Polaris</th>
                        <th>Symbol Rate</th>
                        <th>Metro</th>
                        <th>Multicast</th>
                        <th>Port</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php $no=1; ?>
                @foreach ($channels as $cn)
                        <tr>
                            <td align="center">{{ $no++}}</td>
                            <td align="center">{{ $cn->nmr }}</td>
                            <td align="center">{{ $cn->nama_chn }}</td>
                            <td align="center">{{ $cn->kualitas }}</td>
                            <td align="center">{{ $cn->downlink }}</td>
                            <td align="center">{{ $cn->source }}</td>
                            <td align="center">{{ $cn->freq }}</td>
                            <td align="center">{{ $cn->pol }}</td>
                            <td align="center">{{ $cn->sr }}</td>
                            <td align="center">{{ $cn->metro }}</td>
                            <td align="center">{{ $cn->multicast }}</td>
                            <td align="center">{{ $cn->port }}</td>
                            <td>
                                <a href="/channel/edit/{{$cn->id}}"><span class="badge bg-warning text-dark">Edit</span></a>
                                <a href="/channel/hapus/{{$cn->id}}" onclick="return confirm('yakin ingin hapus? ')"><span class="badge bg-danger">Delete</span></a>
                            </td>
                            
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@include('footer')