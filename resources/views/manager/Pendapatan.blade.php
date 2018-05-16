@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumbs-->
      <ol class="breadcrumb col-md-6">
        <li class="breadcrumb-item">
          <a >Pendapatan</a>
        </li>
      </ol>

    <!-- Pendapatan -->
    <div class="card mb-3 col-md-6">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-12 col-lg-offset-3 ">

              <div class="dateRange">
                <div class="row">
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

              <div>
                
              </div>
              <div class="form-group float-right" style="margin-top:8px; margin-bottom:5px">
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
                <th>Pendapatan</th>
              </tr>
            </thead>
            <tbody id="isi">
              @foreach($pendapatan as $i => $row)
              <tr>
                <td>{{$i+1}}</td>
                <td>{{$row->member->name}}</td>
                <td>{{$row->tgl_order}}</td>
                <td>{{(($row->det_transaksi->sum('total_bayar'))-($row->det_transaksi->sum('modal')))}}</td>
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
        // $(function(){
        //   $('#from_date').datepicker();
        //   $('#to_date').datepicker();
        // });
        $('#dataSearch').click(function(){
          var from_date = $('#from_date').val();
          var to_date = $('#to_date').val();
          if(from_date != '' && to_date != '')
          {
            // alert('asu kok gk mw')
            // var url="/listPendapatan?from_date="+from_date+"&to_date="+to_date
            // console.log(url)
            $.ajax({
              url: "/listPendapatan?from_date="+from_date+"&to_date="+to_date,
              method: "GET",
              data: {from_date:from_date, to_date:to_date},
              success:function(data){
                var tabel=""
                for (let index = 0; index < data.length; index++) {
                  const element = data[index];
                  const no=index+1;
                  const selisih=element.total-element.modal
                  tabel+=
                  "<tr>"+
                    "<td>"+no+"</td>"+
                    "<td>"+element.name+"</td>"+
                    "<td>"+element.tgl_order+"</td>"+
                    "<td>"+selisih+"</td>"+
                "</tr>"
                }
                $("#isi").html(tabel)                
                
                
                // $('.dataTable').html(data);
                // console.log(data);

              }
              // error:function(error){
              //   console.log(error)
              // }
            })
          }else{
            alert('please insert the date');
          }
        })
      });
        
        // $('.dateRange').datePicker({
        //   todayBtn: 'linked',
        //   formate: "yyyy-mm-dd",
        //   autoclose: true
        // });

        // function fetch_data(is_date_search, from_Date='', to_date=''){
        //   var dataTable = $('#dataTable').dataTable({
        //     "processing" : true,
        //     "serveSide" : true,
        //     "order" : [],
        //     "ajax" : {
        //       url : "/listPendapatan"
        //       data: {
        //         is_date:dataSearch, from:from, to:to
        //       }
        //     }
        //   });

        //   $.('#dataSearch').click(function){
        //     var from = $('#from').val();
        //     var to = $('#to').val();
        //     if(from != '' && to != '')
        //     {
        //       $('#dataTable').dataTable().destroy();
        //       fetch_data('yes', from. to)
        //     }else
        //     {
        //       alert("please put some date");
        //     }
        //   });
        // }
      // });
    </script>


    {{-- <script type="text/javascript">
      $('#from').datePicker({
        changeDay: true,
        changeMonth: true,
        changeYear: true, 
        dateFormat: 'yy/mm/dd',
        onSelect: function(dateText){

          var From = $('#from').val();
          var To = $('#to').val();
          var Pendapatan = $('#pendapatan').val;
          listPendapatan(From, To, Pendapatan);
        }
      });

      $('#to').datePicker({
        changeDay: true,
        changeMonth: true,
        changeYear: true, 
        dateFormat: 'yy/mm/dd',
        onSelect: function(dateText){

          var From = $('#from').val();
          var To = $('#to').val();
          var Pendapatan = $('#pendapatan').val;
          listPendapatan(From, To, Pendapatan);
        }
      });

      function listPendapatan(criteria1, criteria2, criteria3){
        $.ajax({
          type: 'get',
          url: "{{url('listPendapatan')}}",
          data: '(From:criteria1,To:criteria2,Pendapatan:criteria3)',
          success:function(data){
            $('.list_pendapatan').empty().html(data); 
          }
        })
      }
    </script> --}}
@endsection