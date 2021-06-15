<head>
    <link href="{{asset('css/app.css')}}">
</head>
<body>
    @extends('adminlte::page')
    @section('title')
    @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    @endsection
    @section('content_header')
            <button type="button" class="btn btn-success" style="margin: 10px" id="button-addon1" data-toggle="modal" data-target="#modalparto">Nuevo</button>
            <div class="card">
              <div class="card-body">
                <table id="animal" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>Codigo Parto</th>
                          <th>Fecha de Parto</th>
                          <th>Codigo Animal</th>
                          <th>Cant.Machos</th>
                          <th>Cant.Hembra</th>
                          <th>Cant.Fallecido</th>  
                          <th>Estado</th> 
                          <th>Tipo Parto</th>              
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($parto as $i)
                      <tr>
                          <th>{{$i->code_partum}}</th>
                          <td>{{$i->datePartum}}</td>
                          <td>{{$i->idanimalCode}}</td>
                          <td>{{$i->male}}</td>
                          <td>{{$i->female}}</td>
                          <td>{{$i->dead}}</td>
                          <td>{{$i->statu_mother}}</td>
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>Codigo Parto</th>
                          <th>Fecha de Parto</th>
                          <th>Codigo Animal</th>
                          <th>Cant.Machos</th>
                          <th>Cant.Hembra</th>
                          <th>Cant.Fallecido</th>  
                          <th>Estado</th> 
                          <th>Tipo Parto</th>  
                      </tr>
                  </tfoot>
              </table>
              </div>
          </div>
     @include("modal.modalFichaP")
    @endsection
    @section('js')
              <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
              <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
              <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
              <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
              <script>
                $('#animal').DataTable({
                  responsive: true
                });
            </script>
            <script>
              $('#modalparto').on('shown.bs.modal', function () {
                  $('#myInput').trigger('focus')
                });
            </script>
    @endsection
</body>