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
    <form  class="row g-3">
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Ubicacion</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
     
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="inputPassword4">
      </div>
  
      <div class="col-md-6">    
      </div>
      
      <div class="col-12"></div>
      <div class="d-grid gap-2 col-1 mx-auto">
        <button class="btn btn-primary" type="submit">Registrar</button>
      </div>
    </form>
    <div class="card">
        <div class="card-body">
          <table id="ubicacion" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre Ubicacion</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>            
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>        
                </tr>
            </tbody>
            <tfoot>
                <tr>
                  <th>Nombre Ubicacion</th>
                  <th>Descripcion</th>
                </tr>
            </tfoot>
        </table>
  
        </div>
    </div>
    @endsection
  
  
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
       $('#ubicacion').DataTable({
         responsive: true
       });
    </script>
    @endsection
  </body>