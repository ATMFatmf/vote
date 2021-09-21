<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Configure the Election</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="election_add.php">
                <div class="form-group">
                    <label for="election_id" class="col-sm-3 control-label">Election id</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="election_id" name="election_id" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Maximum Voters</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="max_voter" name="max_voter" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

