<?php deleteBook(); ?>

<!-- Delete Book Modal -->
<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Remove Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="home.php" method="POST">
            <input type="hidden" name="deleteid" id="deleteid">
            <p>Are you sure you want to remove <span id="rowName"> </span> from your catalog?</p>
            <div class="modal-footer">
                <input class="btn btn-primary" type="submit" name="delete" value="Yes">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>