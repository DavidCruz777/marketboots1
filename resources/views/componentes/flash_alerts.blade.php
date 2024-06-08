@if ( session('message') ) 
    @component( 'componentes.alert' )
        @slot( 'class', 'success' )
        @slot( 'name', 'Éxito' )
        @slot( 'message', session('message') )
    @endcomponent
@endif
@if (session('info'))
    @component( 'componentes.alert' )
        @slot( 'class', 'info' )
        @slot( 'name', 'Información' )
        @slot( 'message', session('info') )
    @endcomponent
@endif
@if (session('warning'))
    @component( 'componentes.alert' )
        @slot( 'class', 'warning' )
        @slot( 'name', 'Advertencia' )
        @slot( 'message', session('warning') )
    @endcomponent
@endif
@if (session('danger'))
    @component( 'componentes.alert' )
        @slot( 'class', 'danger' )
        @slot( 'name', 'Advertencia' )
        @slot( 'message', session('danger') )
    @endcomponent
@endif
@if ( $errors->any() )
    @foreach ( $errors->all() as $error )
        @component( 'componentes.alert' )
            @slot( 'class', 'danger' )
            @slot( 'name', 'Atención' )
            @slot( 'message', $error )
        @endcomponent
    @endforeach
@endif