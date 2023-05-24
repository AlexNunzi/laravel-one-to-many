@extends('layouts.admin')

@section('content')
    <div class="text-center">
        <ul class="list-unstyled">
            <li>
                <h3>Titolo del progetto:</h3>
                <p>
                    {{ $project->title }}
                </p>
            </li>
            <li>
                <h4>Data di inizio progetto:</h4>
                <p>
                    {{ $project->start_date }}
                </p>
            </li>
            <li>
                <h4>Data di fine progetto:</h4>
                <p>
                    {{ $project->end_date }}
                </p>
            </li>
            <li>
                <h4>Descrizione:</h4>
                <p>
                    {{ $project->description }}
                </p>
            </li>
        </ul>
    </div>
@endsection
