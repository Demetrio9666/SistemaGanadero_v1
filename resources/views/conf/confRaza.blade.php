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
    <a type="button" class="btn btn-success" style="margin: 10px" id="button-addon1" href="{{url('/confRaza/create')}}">Nuevo</a>
    <div class="card">
        <div class="card-body">
          <table id="razat" class="table table-striped table-bordered" style="width:100%">
            <thead>             
                <tr>
                    <th>Nombre de la Raza</th>
                    <th>Porcentaje</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>  
                @foreach ($raza_v as $i)          
                <tr>
                    <td>{{$i->description}}</td>
                    <td>{{$i->percentage}}</td>
                    <td></td>  
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre de la Raza</th>
                    <th>Porcentaje</th>
                    <th>Accion</th>
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
       $('#razat').DataTable({
         responsive: true,
         "language": {
            "lengthMenu": "Mostrar "+
            `<select class="custom-select custom-selec-sm form-control form-control-sm">
                    <option value = '10' >10</option> 
                    <option  value = '25' >25</option>
                    <option  value = '50' >50</option>
                    <option  value = '100' >100</option>
                    <option  value =  '-1'>All</option>
            </select>`
            +" Registro por Pagina",
            "zeroRecords": "Resultados No encontrados -Disculpe",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de  _MAX_ Registros Totales)",
            'search': "Buscar:",
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
       });
       
   


    </script>
    @endsection
  </body>