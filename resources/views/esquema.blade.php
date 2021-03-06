<?xml version="1.0" encoding="UTF-8"?>

<paisos xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:noNamespaceSchemaLocation="{{asset('esquema/paisos.xsd')}}">

    @foreach($paisos as $clau => $valor)
    <pais id="{{$clau}}">
        @foreach($valor as $clau2 => $valor2)
        @if(!is_array($valor2))
        <{{$clau2}}>{{trim($valor2)}}</{{$clau2}}>
        @endif
        @endforeach
    </pais>
    @endforeach
</paisos>
