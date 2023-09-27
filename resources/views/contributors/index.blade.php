@extends('layouts.projectsLayout')


@section('title', 'Indice Progetti')


@section('main_content')
            
    <div>
        <ul>
            @foreach ($contributors as $contributor)
                <li class = "flex flex-col gap-y-2 border border-slate-500 p-4">
                    <div>
                        ID: {{ $contributor->id }}
                    </div>
                    <div>
                        NOME: {{ $contributor->name }}
                    </div>
                    <div>
                        EMAIL: {{ $contributor->email }}
                    </div>
                    <div>
                        CREATO: {{ $contributor->created_at }}
                    </div>
                    <div>
                        AGGIORNATO: {{ $contributor->updated_at }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
            
@endsection