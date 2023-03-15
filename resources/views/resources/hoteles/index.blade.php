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
                    {{--<td>
                        <div class="row">
                            <div class="col-md-1">
                                <a class=""
                                   href="{{ route('products.edit', $product) }}">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </div>
                            <div class="col-md-1">
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background-color: white">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
