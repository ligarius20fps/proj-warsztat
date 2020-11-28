<button class="btn btn-danger" data-toggle="modal" data-target="#popup-reject"><i class="fa fa-times"></i> Usuń warsztat</button>
<div class="modal fade" id="popup-reject" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Usuń warsztat</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/workshop/{{ $workshop->id }}/remove" method="get">
                    @csrf
                    <label for="">Podaj powód</label>
                    <textarea name="reason" class="form-control"></textarea>
                <div class="modal-footer">
                <button class="btn btn-danger" type="submit"><i class="fa fa-times"></i> Usuń</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>