<x-app-layout>
    <form class="col" method="POST" action="{{route('hotel.store')}}">
        @csrf
        <div class="row g-3">
            <div class="col">
                <label class="form-label" for="name">Nombre del hotel</label>
                <input id="name" name="name" class="form-control" type="text" value="" required>
            </div>
            <div class="col">
                <label class="form-label" for="address">Dirección</label>
                <input id="address" name="address" class="form-control" type="text" value="" required>
            </div>
            <div class="col">
                <label class="form-label" for="city">Ciudad</label>
                <input id="city" name="city" class="form-control" type="text" value="" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label class="form-label" for="nit">NIT</label>
                <input id="nit" name="nit" class="form-control" type="number"  min="1" step="any" value="" required>
            </div>
            <div class="col">
                <label class="form-label" for="room">Habitaciones</label>
                <input id="room" name="room" class="form-control" type="number"  min="1" step="any" value="" required>
            </div>
        </div>
        <br>
        <button class="btn dark:text-black btn-outline-info" type="submit" name="action">Crear</button>
    </form>
</x-app-layout>
