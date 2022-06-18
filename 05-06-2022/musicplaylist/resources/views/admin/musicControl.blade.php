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
                    <th width="3px">TITLE</th>
                    <th width="3px">TIME</th>
                    <th width="3px">ALBUM</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tulus - Hati-Hati di Jalan</td>
                    <td>4:02</td>
                    <td>Manusia</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>Pamungkas - To The Bone</td>
                    <td>5:54</td>
                    <td>Flaying</td>
                </tr>
        	</tbody>
        </table>
    </section>

@endsection
