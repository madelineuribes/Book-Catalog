<?php updateBook(); ?>

<!-- Add New Book Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateModal">Update Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="home.php" method="POST">
                <div class="form-group">
                    <input type="hidden" name="updateid" id="updateid">

                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" id="isbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

