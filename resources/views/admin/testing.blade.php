TEST

<table>
    <tr>
        <th>Id </th>
        <th>Status </th>
        <th>Total </th>
        <th>Tanggal </th>
    </tr>

    @foreach($trans as $row)
    <tr>
        <th>{{$row->id}}</th>
        <th>{{$row->status_bayar}}</th>
        <th>{{$row->total_bayar}}</th>
        <th>{{$row->tgl_order}}</th>
    </tr>
    @endforeach

</table>