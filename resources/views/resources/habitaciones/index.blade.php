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
                    <td>name</td>
                    <td>{{$room->quantity}}</td>
                    <td>{{ucfirst($room->type)}}</td>
                    <td>{{$room->accommodation}}</td>
                    <td>{{$room->created_at}}</td>
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
