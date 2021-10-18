@extends('plantilla')

@section('seccion')
{{-- <h1>
    INICIO
</h1> --}}


<div class="form-group" style="text-align:center">
    <label>INGRESE NOMBRE DEL PRODUCTO A BUSCAR:</label>
    <input class="form-control" placeholder="Buscar">
</div>


<div class="panel panel-default">
                       
    <div class="panel-heading center"  style="text-align:center">
    LISTA DE PRODUCTOS SELECCIONADOS
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>Markasdfregregrgwergergwergr</td>
                        <td>5.59</td>
                        <td>
                            <input type="number"  name="points" step="1" value="1" size=40 style="width:50px">
                        </td>
                        <td>11.6</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>Markwregwergwergwergwergwergewrgregwer</td>
                        <td>5.59</td>
                        <td>
                            <input type="number"  name="points" step="1" value="1" size=40 style="width:50px">
                        </td>
                        <td>11.6</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
           
                <h4 style="text-align:center">
                    Total: 88.6
                    <br>
                    <br>
                    <a  style="text-align:center" href="#" class="btn btn-primary">ATRAS</a>
                    <a style="text-align:center" href="#" class="btn btn-success">COBRAR</a>
                </h4>  
                
        </div>
    </div>
    
</div>




@endsection