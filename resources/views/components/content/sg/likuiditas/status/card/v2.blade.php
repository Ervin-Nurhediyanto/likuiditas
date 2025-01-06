@php
$tables = [
  (object) ['title' => 'Nama Konsumen',],
  (object) ['title' => 'NIK',],
  (object) ['title' => 'No Hp',],
  (object) ['title' => 'Nama Proyek',],
  (object) ['title' => 'Blok',],
  (object) ['title' => 'Harga',],
  (object) ['title' => 'Booking',],
  (object) ['title' => 'Metode Pembayaran',],
];

$items = [
  (object) [
    'consumer_name' => 'yoyo',
    'id_number' => '123',
    'phone' => '082000',
    'project_name' => 'contoh',
    'block' => 'D16R',
    'price' => '500000000',
    'booking' => '5000000',
    'payment_method' => 'KPR',
  ],
  (object) [
    'consumer_name' => 'toto',
    'id_number' => '312',
    'phone' => '082001',
    'project_name' => 'contoh',
    'block' => 'D17R',
    'price' => '500000000',
    'booking' => '5000000',
    'payment_method' => 'Cash',
  ],
];

@endphp

<div class="card">
  {{-- <div class="card-header">
    <h3 class="card-title">Data Table with default features</h3>
  </div> --}}
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        @foreach ($tables as $table)
        <th>{{  $table->title }}</th>
        @endforeach
      </tr>
      </thead>
      <tbody>
      @foreach ($items as $item)
      <tr>
        <td>{{ $item->consumer_name }}</td>
        <td>{{ $item->id_number }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->project_name }}</td>
        <td>{{ $item->block }}</td>
        <td>Rp{{ number_format($item->price, 0, ',', '.') }}</td>
        <td>Rp{{ number_format($item->booking, 0, ',', '.') }}</td>
        <td>{{ $item->payment_method }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>