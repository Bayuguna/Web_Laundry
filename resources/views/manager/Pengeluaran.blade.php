@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb col-md-6">
            <li class="breadcrumb-item">
              <a >Pengeluaran</a>
            </li>
          </ol>

    <!-- Pendapatan -->
    <div class="card mb-3 col-md-6">
        <div class="container">
          <div class="row about-container">
  
            <div class="col-lg-12 col-lg-offset-3 ">
                <div class="dateRange" >
                    <div class="row" >
                        <div class="col">
                          <label> From :</label>
                            <input type="date" name="from_date" class="form-control" id="from_date" data-rule="required"/>
                          <div class="validation"></div>
                        </div>
                        
                        <div class="col">
                            <label> To :</label>
                              <input type="date" name="to_date" class="form-control" id="to_date"  data-rule="required" />
                            <div class="validation"></div>
                        </div>
                        </div>
                  </div>

              <div class="form-group float-right" style="margin-top:8px; margin-bottom: 5px">
                <button class="btn btn-success" type="button" name="dataSearch" id="dataSearch">Tampilkan</button>
              </div>
          </div>
  
        </div>
    </div>
    </div>

    <div class="card mb-3">

        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Pengeluaran</th>
                  </tr>
                </thead>
                <tbody id="isi">
                    @foreach($pengeluaran as $i => $row)
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$row->member->name}}</td>
                      <td>{{$row->tgl_order}}</td>
                      <td>{{$row->det_transaksi->sum('modal')}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
      $(document).ready(function() {
        $('#dataSearch').click(function(){
          var from_date = $('#from_date').val();
          var to_date = $('#to_date').val();
          if(from_date != '' && to_date != '')
          {
            $.ajax({
              url: "/listPengeluaran?from_date="+from_date+"&to_date="+to_date,
              method: "GET",
              data: {from_date:from_date, to_date:to_date},
              success:function(data){
                var tabel=""
                for (let index = 0; index < data.length; index++) {
                  const element = data[index];
                  const no=index+1;
                  tabel+=
                  "<tr>"+
                    "<td>"+no+"</td>"+
                    "<td>"+element.name+"</td>"+
                    "<td>"+element.tgl_order+"</td>"+
                    "<td>"+element.modal+"</td>"+
                "</tr>"
                }
                $("#isi").html(tabel)                

              }
            })
          }else{
            alert('please insert the date');
          }
        })
      });
    </script>
  @endsection