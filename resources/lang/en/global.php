<?phpreturn [		'user-management' => [		'title' => 'Administraciòn',		'created_at' => 'Time',		'fields' => [		],	],		'abilities' => [		'title' => 'Acciones',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'abilities' => 'Abilities',		],	],		'users' => [		'title' => 'Usuarios',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'roles' => 'Roles',			'remember-token' => 'Remember token',			'empresa' => 'Empresa',			'sucursal' => 'Sucursal',		],	],	'sedesafilia' => [		'title' => 'Sedes Afiliadas',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'direccion' => 'Direcciòn',			'telefono' => 'Telefono',			'fechaafilia' => 'Fecha de Afiliaciòn',		],	],	'archivos' => [		'title' => 'Archivos',		'created_at' => 'Time',		'fields' => [		],	],		'personal' => [		'title' => 'Personal',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombres',			'apellidos' => 'Apellidos',			'dni' => 'DNI',			'telefono' => 'Telefono',			'email' => 'Email',			'direccion' => 'Direcciòn',		],	],		'profesionales' => [		'title' => 'Prof. de Apoyo',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombres',			'apellidos' => 'Apellidos',			'cmp' => 'CMP',			'telefono' => 'Telefono',			'codigo' => 'Còdigo',			'especialidad' => 'Especialidad',			'id_centromedico' => 'Centro Mèdico',		],	],		'centros' => [		'title' => 'Centros Mèdicos',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'direccion' => 'Direccion',			'referencia' => 'Referencia',			'codigo' => 'Còdigo',					],	],	'profesionales' => [		'title' => 'Prof. de Apoyo',		'created_at' => 'Time',		'fields' => [			'nombres' => 'Nombres',			'apellidos' => 'Apellidos',			'especialidad' => 'Especialidad',			'centro' => 'Centro Mèdico',			'cmp' => 'CMP',			'nacimiento' => 'Fecha Nacimiento',					],	],		'laboratorio' => [		'title' => 'Laboratorios',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombres',			'direccion' => 'Direccion',			'referencia' => 'Referencia',					],	],		'analisis' => [		'title' => 'Analisis de Laboratorios',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombre',			'laboratorio' => 'Laboratorio',			'preciopublico' => 'Precio Publico',			'costlab' => 'Costo de Laboratorio',			'porcentaje' => 'Porcentaje',		],	],	'servicios' => [		'title' => 'Servicios',		'created_at' => 'Time',		'fields' => [			'detalle' => 'Detalle ',			'precio' => 'Precio',			'porcentaje' => 'Porcentaje',				],	],	'paquetes' => [		'title' => 'Paquetes de Servicios',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombre ',			'servicios' => 'Servicios',			'costo' => 'Costo',				],	],	'pacientes' => [		'title' => 'Pacientes',		'created_at' => 'Time',		'fields' => [			'nombres' => 'Nombres',			'apellidos' => 'Apellidos',			'dni' => 'DNI',			'direccion' => 'Direccion',			'provincia' => 'Provincia',			'distrito' => 'Distrito',			'telefono' => 'Telefono',			'edocivil' => 'Edo Civil',			'gradoinstruccion' => 'Grado de Instrucciòn',			'fechanac' => 'Fecha de Nacimiento',			'ocupacion' => 'Ocupaciòn',			'historia' => 'Historia Clinica',					],	],	'movimientos' => [		'title' => 'Existencias',		'created_at' => 'Time',		'fields' => [		],	],	'productos' => [		'title' => 'Productos',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'cantidad' => 'Cantidad',			'medida' => 'Medida',			'fecha' => 'Fecha',			],	],	'existencias' => [		'title' => 'Actualizar Existencias',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'cantidad' => 'Cantidad',			'medida' => 'Medida',			'fecha' => 'Fecha de Ingreso'			],	],	'ingresos' => [		'title' => 'Ingreso de Productos',		'created_at' => 'Time',		'fields' => [			'producto' => 'Nombre de Producto',			'cantidad' => 'Cantidad',			'fecha' => 'Fecha de Ingreso'		],	],		'existenciass' => [		'title' => 'Movimientos',		'created_at' => 'Time',		'fields' => [		],	],	'atencion' => [		'title' => 'Ingreso de Atenciones',		'created_at' => 'Time',		'fields' => [			'id' => 'Id de Atencion',			'nombres_apellidos' => 'Nombre/Apellidos del Paciente',			'nombres' => 'Nombre de Paciente',			'apellido' => 'Apellido de Paciente',			'paciente' => 'Paciente',			'servicio' => 'Servicio',			'costo' => 'Costo',			'costoa' => 'Monto Adelantado',			'porcentaje' => 'Porcentaje',			'fechaatencion' => 'Fecha de Atenciòn',			'acuenta' => 'A Cuenta',			'servicio' => 'Servicio',			'laboratorio' => 'Laboratorios',			'origenpaciente' => 'Origen',			'paquete' => 'Paquete',			'monto' => 'Monto',			'descripcion' => 'Descripcion',			'origen' => 'Origen',			'tipoingreso' => 'Tipo de Ingreso',			'causa' => 'Causa',				],	],	'gastos' => [		'title' => 'Relaciòn de Gastos',		'created_at' => 'Time',		'fields' => [			'name' => 'Nombre',			'concepto' => 'Concepto',			'monto' => 'Monto',				],	],		'labporpagar' => [		'title' => 'Laboratorios Por Pagar',		'created_at' => 'Time',		'fields' => [			'name' => 'Analisis de Laboratorio',			'paciente' => 'Paciente',			'concepto' => 'Concepto',			'id_atencion' => 'Id de Atenciòn',			'monto' => 'Costo de Laboratorio',				],	],	'otrosingresos' => [		'title' => 'Otros Ingresos',		'created_at' => 'Time',		'fields' => [			'descripcion' => 'Descripcion de Ingreso',			'monto' => 'Monto de Ingreso',			'origen' => 'Origen',			'causa' => 'Causa de Ingreso',			'detallecausa' => 'Detalles Causa',			'created_at' => 'Fecha de Ingreso',				],	],		'resultados' => [		'title' => 'Redac. Result.Servicios',		'created_at' => 'Time',		'fields' => [			'fecha' => 'Fecha de Atenciòn',			'origen' => 'Origen',			'detalle' => 'Detalle Servicio',			'apellido' => 'Apellido de Paciente',			'nombre' => 'Nombre de Paciente',				],	],	'resultadoslab' => [		'title' => 'Redac. Result.Laboratorios',		'created_at' => 'Time',		'fields' => [			'fecha' => 'Fecha de Atenciòn',			'origen' => 'Origen',			'detalle' => 'Detalle Laboratorio',			'apellido' => 'Apellido de Paciente',			'nombre' => 'Nombre de Paciente',				],	],	'resultadosguardados' => [		'title' => 'Consult. Result.Servicios',		'created_at' => 'Time',		'fields' => [			'fecha' => 'Fecha de Atenciòn',			'origen' => 'Origen',			'detalle' => 'Detalle Servicio',			'apellido' => 'Apellido de Paciente',			'nombre' => 'Nombre de Paciente',				],	],		'resultadosguardadoslab' => [		'title' => 'Consult. Result.Laboratorios',		'created_at' => 'Time',		'fields' => [			'fecha' => 'Fecha de Atenciòn',			'origen' => 'Origen',			'detalle' => 'Detalle Laboratorio',			'apellido' => 'Apellido de Paciente',			'nombre' => 'Nombre de Paciente',				],	],	'cuentasporcobrar' => [		'title' => 'Cuentas por Cobrar',		'created_at' => 'Time',		'fields' => [			'id_atencion' => 'ID Atenciòn',			'paciente' => 'Paciente',			'costo' => 'Monto Total',			'costoa' => 'Porcentaje',			'created_at' => 'Fecha de Atenciòn',			'pendiente' => 'Monto por Cobrar',		],	],	'comisionesporpagar' => [		'title' => 'Comisiones Por Pagar',		'created_at' => 'Time',		'fields' => [			'paciente' => 'Paciente',			'profesional' => 'Profesional',			'montototal' => 'Monto Total Atenciòn',			'comision' => 'Porcentaje',			'servicio' => 'Servicio',			'laboratorio' => 'Laboratorio',			'origen' => 'Tipo',			'fecha' => 'Fecha de Atenciòn'		],	],	'comisionespagadas' => [		'title' => 'Comisiones Pagadas',		'created_at' => 'Time',		'fields' => [			'paciente' => 'Paciente',			'profesional' => 'Profesional',			'montototal' => 'Monto Total',			'comision' => 'Porcentaje',			'servicio' => 'Servicio/Laboratorio',			'fecha' => 'Fecha de Atenciòn',			'origen' => 'Origen'		],	],	'existencias' => [		'title' => 'Actualizar Existencias',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'cantidad' => 'Cantidad',			'medida' => 'Medida',			'fecha' => 'Fecha de Ingreso'			],	],	'ingresos' => [		'title' => 'Ingreso de Productos',		'created_at' => 'Time',		'fields' => [			'producto' => 'Nombre de Producto',			'cantidad' => 'Cantidad',			'fecha' => 'Fecha de Ingreso'		],	],		'reportes' => [		'title' => 'Reportes',		'created_at' => 'Time',		'fields' => [		],		'tipos_perortes' => [		'general' => 'Reporte General',		],	],		'atenciondiaria' => [		'title' => 'Reporte de Atenciòn Diaria',		'created_at' => 'Time',		'fields' => [			'producto' => 'Nombre de Producto',			'cantidad' => 'Cantidad',			'fecha' => 'Fecha de Ingreso'		],	],	'resultadosmodulo' => [		'title' => 'Resultados',		'created_at' => 'Time',		'fields' => [		],	],	'productos' => [		'title' => 'Productos',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'cantidad' => 'Cantidad',			'medida' => 'Medida',			'fecha' => 'Fecha',			],	],	'existencias' => [		'title' => 'Actualizar Existencias',		'created_at' => 'Time',		'fields' => [			'nombre' => 'Nombre',			'cantidad' => 'Cantidad',			'medida' => 'Medida',			'fecha' => 'Fecha de Ingreso'			],	],	'ingresos' => [		'title' => 'Ingreso de Productos',		'created_at' => 'Time',		'fields' => [			'producto' => 'Nombre de Producto',			'cantidad' => 'Cantidad',			'fecha' => 'Fecha de Ingreso'		],	],	'app_create' => 'Crear',	'app_create_resultado' => 'Crear Resultado',	'app_save' => 'Guardar',	'app_edit' => 'Editar',	'app_pay' => 'Pagar',	'app_cob' => 'Cobrar',	'app_imprimirr' => 'Imprimir Recibo',	'app_view' => 'Ver',	'app_update' => 'Actualizar',	'app_imprimirh' => 'Imprimir Historia',	'app_list' => 'Lista',	'app_no_entries_in_table' => 'No hay registros',	'custom_controller_index' => 'Custom controller index.',	'app_logout' => 'Cerrar Sesiòn',	'app_add_new' => 'Agregar Nuevo',	'app_are_you_sure' => 'Estás seguro?',	'app_are_you_sure_pay' => 'Estàs seguro de Pagar?',	'app_back_to_list' => 'Volver a la lista',	'app_dashboard' => 'Menu Principal',	'app_delete' => 'Eliminar',	'app_search' => 'Aceptar',	'global_title' =>'SYSMEDIC ADMIN',];