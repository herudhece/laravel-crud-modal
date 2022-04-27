<td>
    <a class="btn btn-success btn-xs mb-1" title="Detail" data-toggle='modal' data-target='#ajaxModel' id="showDetail"
    data-attr="{{ route('data.show', $model->id) }}">
        <i class="fas fa-eye"></i>
    </a>

    <a class="btn btn-primary btn-xs mb-1" title="Update" data-toggle='modal' data-target='#ajaxModel' id="update"  
    data-attr="{{ route('data.edit', $model->id) }}" >
        <i class="fas fa-edit"></i>
    </a>

    <form action="{{ route('data.destroy', $model->id) }}" method="post" class="d-inline"
        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
        @csrf
        @method('delete')
        <button class="btn btn-danger btn-xs mb-1">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</td>



<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="body">
                       
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>



<script>
    // display a modal (small modal)
    $(document).on('click', '#showDetail', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#ajaxModel').modal("show");
                    $('#body').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
</script>