@extends('layout.admin')

@section('container')

    <section class="home">
        <div class="text1" style="margin-top: 120px;margin-left: 100px;">
            TOP 10'S
        </div>
        <div>
            <a class="text1" href="/admin/music/create">Add Music</a>
        </div>
        <table id="contact-detail" class="table" cellspacing="0" width="1200px">
            <thead>
                <tr>
                    <th width="5px" >#</th>
                    <th width="3px">ARTIST</th>
                    <th width="3px">TITLE</th>
                    <th width="3px">YEAR</th>
                    <th width="3px">ACTION</th>

                </tr>
            </thead>

            <tbody>
                {{ $i = 1 }}
                @foreach($list as $d)

                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $d->artist }}</td>
                    <td>{{ $d ->title }}</td>
                    <td>{{ $d ->year }}</td>
                    {{-- <td>{{ $d ->premiumStatus }}</td> --}}
                    <td>
                        <a href="/admin/user/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                        <form
                            method="post"
                            action="/admin/user/{{ $d->id }}"
                            style="display:inline"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    {{ $i += 1 }}
                </tr>

                @endforeach
        	</tbody>
        </table>
    </section>

@endsection
