<div>
    <ul>
        @foreach ($trains as $train)
        <li>
            {{$train->id}} - {{$train->azienda}} - {{$train->stazione_partenza}} - {{$train->stazione_arrivo}} - {{$train->orario_partenza}} - {{$train->orario_arrivo}}
        </li>
        @endforeach

    </ul>

</div>