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
                    <th width="3px">NAMA</th>
                    <th width="3px">EMAIL</th>
                    <th width="3px">PREMIUM STATUS</th>
                    <th width="3px">ACTION</th>

                </tr>
            </thead>

            <tbody>
                {{ $i = 1 }}
                @foreach($list as $d)

                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d ->email }}</td>
                    @if($d ->premiumStatus == 0)
                        <td>Non-Premium</td>
                    @else
                    <td>Premium</td>
                    {{-- <td>{{ $d ->premiumStatus }}</td> --}}
                    @endif
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
