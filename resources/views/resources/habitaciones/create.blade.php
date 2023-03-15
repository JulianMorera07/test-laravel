<x-app-layout>
    <form method="POST" action="{{route('room.store')}}">
        @csrf
        <div class="row">
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="hotel_id" id="hotel">
                    <option selected disabled>- Seleccione hotel -</option>
                    @foreach($hoteles as $hotel)
                        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input class="form-control" type="number" placeholder="Ingrese la cantidad de hábitaciones para asignar" value="" name="quantity">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="type" id="type">
                    <option selected disabled>- Seleccione tipo de habitación-</option>
                    <option value="estandar">Estandar</option>
                    <option value="junior">Junior</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="accommodation" id="accommodation">
                    <option selected disabled>- Seleccione tipo de acomodación -</option>
                </select>
            </div>
        </div>
        <button class="btn dark:text-black btn-outline-info" type="submit" name="action">Asignar</button>
    </form>
</x-app-layout>
