@extends('layouts.main')
@section('container')
    <div class="card mt-5">
        <div class="card-body">
            <h3 class="text-center"><a href="#">Belajar Laravel</a></h3>
            <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Agama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($siswa as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nomor_induk }}</td>
                            <td>{{ $data->agama->nama }}</td>
                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                {{-- <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('siswa.edit', $data->id) }}"
                                            class="btn btn-sm btn-outline-success">
                                            Edit
                                        </a> |
                                        <a href="{{ route('siswa.show', $data->id) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            Show
                                        </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete
                                        </button> --}}
                                </form>
                            </td>
                    @endforeach

                    {{-- @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach ($post->comments()->get() as $comment)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach --}}

                </tbody>
            </table>
        </div>
    </div>
@endsection
