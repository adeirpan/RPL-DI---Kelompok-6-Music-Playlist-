@extends('layout.main')

@section('container')

    <section class="home">
        <div class="text1" style="margin-top: 120px;margin-left: 100px;">
            TOP 10'S
        </div>
        <table id="contact-detail" class="table" cellspacing="0" width="1200px">
            <thead>
                <tr>
                    <th width="5px" >#</th>
                    <th width="3px">TITLE</th>
                    <th width="3px">TIME</th>
                    <th width="3px">ALBUM</th>
                    <th width="5px">Play</th>
                </tr>
            </thead>

            <tbody>
                {{ $i = 1 }}
                @foreach($list as $list)
                    <tr>
                    <td>{{ $i }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->time }}</td>
                        <td>{{ $list->album }}</td>
                        <td>
                            <form
                                method="GET"
                                action="popular/{{ $list->id }}"
                                style="display:inline"
                                onsubmit="">
                                <button class="play">Play Music</button>
                            </form>
                        </td>
                    </tr>
                    {{ $i = $i + 1 }}
                @endforeach

        	</tbody>

        </table>
    </section>

@endsection
