@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Treni di oggi</h1>

    {{-- {{ dd( date( 'Y-m-d', strtotime($today_s_trains[0]->orario_di_partenza) ) ) }} --}}

    {{-- {{ dd($today_s_trains) }} --}}

    {{-- {{ dd(date('Y-m-d', strtotime(today()))) }} --}}

    <ul>
        @foreach ($today_s_trains as $train)
            <li>
                <ul>
                    <li>Id: {{ $train->id }}</li>
                    <li>Azienda: {{ $train->azienda }}</li>
                    <li>Stazione di partenza: {{ $train->stazione_di_partenza }}</li>
                    <li>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</li>
                    <li>Orario di partenza: {{ $train->orario_di_partenza }}</li>
                    <li>Orario di arrivo: {{ $train->orario_di_arrivo }}</li>
                    <li>Codice treno: {{ $train->codice_treno }}</li>
                    <li>Numero carrozze: {{ $train->numero_carrozze }}</li>
                    <li>In orario: {{ $train->in_orario ? 'IN ORARIO' : 'IN RITARDO' }}</li>
                    <li>Cancellato: {{ $train->cancellato ? 'CANCELLATO' : 'NON CANCELLATO' }}</li>
                </ul>
                <br>
            </li>
        @endforeach
    </ul>
@endsection
