<x-app-layout>
    <div class="row">
        <div class="col">
            <p class="lead">
                <a type="button" class="btn dark:text-black btn-outline-info" href="{{route('room.create')}}">Asignar habitacion</a>
            </p>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Hotel</th>
            <th>Cantidad</th>
            <th>Tipo</th>
            <th>Asignación</th>
            <th>Fecha de creación</th>
            </thead>
            <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{$room->id}}</td>
                    @foreach($hotels as $hotel)
                        @if( $hotel->id == $room->hotel_id)
                            <td>{{$hotel->name}}</td>
                        @endif
                    @endforeach
                    <td>{{$room->quantity}}</td>
                    <td>{{ucfirst($room->type)}}</td>
                    <td>{{$room->accommodation}}</td>
                    <td>{{$room->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
