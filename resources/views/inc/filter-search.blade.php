<div class="modal fade" id="filter-search" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Filtruj</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <form action="/search/{{$q}}/filter" method="get">
        @csrf
        <label for="">Miasto</label>
        <select class="form-control" name="city">
            <option value="0">Wybierz miasto</option>
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
        <label for="">Nazwa ulicy</label>
        <input type="text" name="street_name" class="form-control">
        <label for="">Rodzaj warsztatu</label>
        <select class="form-control" name="workshop_type">
            <option value="0">Wybierz rodzaj warsztatu</option>
            @foreach($workshop_types as $workshop_type)
            <option value="{{$workshop_type->id}}">{{$workshop_type->name}}</option>
            @endforeach
        </select>
        <label for="">Średnia ocen</label>
        <div class="row">
            <div class="col-md-2"><br/>Od</div>
            <div class="col-md-3"><input type="number" min="1.00" max="5.00" step=".01" name="rating_from" class="form-control"></div>
            <div class="col-md-2"><br/>do</div>
            <div class="col-md-3"><input type="number" min="1.00" max="5.00" step=".01" name="rating_to" class="form-control"></div>
        </div>
        <label for="">Sortuj według</label>
        <select class="form-control" name="sort_by">
            <option value="1">Nazwa warsztatu (rosnąco)</option>
            <option value="2">Nazwa warsztatu (malejąco)</option>
            <option value="3">Nazwa miasta (rosnąco)</option>
            <option value="4">Nazwa miasta (malejąco)</option>
            <option value="5">Nazwa ulicy (rosnąco)</option>
            <option value="6">Nazwa ulicy (malejąco)</option>
            <option value="7">Rodzaj warsztatu</option>
            <option value="8">Średnia ocen (od najmniejszej)</option>
            <option value="9">Średnia ocen (od największej)</option>
        </select>
        <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Zastosuj filtry</button>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>