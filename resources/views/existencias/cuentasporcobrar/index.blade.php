@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
<div class="modal fade" id="createPacienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title disabled" id="modalTitle">Cobrar</h4>
                
               <!-- <small class="badge badge-danger">* Campos obligatorios</small>-->
            </div>
            <div id="id_container_modal_render" class="modal-body">

            </div>
            <div class="modal-footer">
               
               <!-- <button type="button" id="save-btn" class="btn green">Guardar</button>-->
               <button type="button" class="btn red btn-outline" data-dismiss="modal">Cerrar</button>
              
            </div>
        </div>
    </div>
</div>
    <h3 class="page-title">@lang('global.cuentasporcobrar.title')</h3>
     {!! Form::open(['method' => 'get', 'route' => ['admin.cuentasporcobrar.index']]) !!}

           <div class="row">
                <div class="col-md-4">
                    {!! Form::label('fecha', 'Seleccione una Fecha', ['class' => 'control-label']) !!}
                    {!! Form::date('fecha', old('fechanac'), ['id'=>'fecha','class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fecha'))
                        <p class="help-block">
                            {{ $errors->first('fecha') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-4">
                {!! Form::submit(trans('global.app_search'), array('class' => 'btn btn-info')) !!}
                {!! Form::close() !!}

                </div>
            </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($cuentasporcobrar) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>@lang('global.cuentasporcobrar.fields.id_atencion')</th>
                        <th>@lang('global.cuentasporcobrar.fields.paciente')</th>
                        <th>@lang('global.cuentasporcobrar.fields.costo')</th>
                        <th>@lang('global.cuentasporcobrar.fields.costoa')</th>
                        <th>@lang('global.cuentasporcobrar.fields.pendiente')</th>
                        <th>Fecha</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($cuentasporcobrar) > 0)
                        @foreach ($cuentasporcobrar as $cc)
                            <tr data-entry-id="{{ $cc->id }}">
                                <td></td>

                                <td>{{ $cc->id_atencion }}</td>
                                <td>{{ $cc->nombres }},{{ $cc->apellidos }}</td>
                                <td>{{ $cc->costo }}</td>
                                <td>{{ $cc->costoa }}</td>
                                <td>{{ $cc->pendiente }}</td>
                                <td>{{ $cc->fecha }}</td>
                                <td>

                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure_pay")."');",
                                        'route' => ['admin.cuentasporcobrar.destroy', $cc->id])) !!}
                                    {!! Form::submit(trans('global.app_cob'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>


                                   <div class="col-md-2">
                                      <div class="form-group">
                                        <a id="btn_add" onclick="addCiente()" style="margin-top:25px;" class="btn btn-danger">
                                          <i class="glyphicon glyphicon-plus"></i>
                                      </a>
                                  </div>
                              </div>


                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.cuentasporcobrar.mass_destroy') }}';
    </script>

<script>                                  
 function addCiente(){        
       javascript:ajaxLoad("{{ route('pacientes.createmodal') }}","id_container_modal_render");
         $('#createPacienteModal').modal('show');
       }
</script>

@endsection
