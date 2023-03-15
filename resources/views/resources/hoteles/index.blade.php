<x-app-layout>
    <div class="row">
        <div class="col">
            <p class="lead">
                <a type="button" class="btn dark:text-black btn-outline-info" href="{{route('hotel.create')}}">Agregar nuevo hotel</a>
            </p>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>NIT</th>
            <th>Habitaciones</th>
            <th>Fecha de creación</th>
            </thead>
            <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{$hotel->id}}</td>
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->address}}</td>
                    <td>{{$hotel->city}}</td>
                    <td>{{$hotel->nit}}</td>
                    <td>{{$hotel->room}}</td>
                    <td>{{$hotel->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
