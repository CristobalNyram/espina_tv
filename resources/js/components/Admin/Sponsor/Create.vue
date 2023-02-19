<template>

    <div>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-sponsor">
            <span>Add sponsor</span>  <i class="bi bi-plus-circle-fill"></i>
        </button>



  <!-- Modal -->
            <div class="modal fade" id="add-sponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD SPONSOR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>


                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Time support:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Phone number:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create </button>
                    </div>
                </div>
                </div>
            </div>


    </div>




</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
