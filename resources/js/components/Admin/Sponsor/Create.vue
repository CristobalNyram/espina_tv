<template>

    <div>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-sponsor">
            <span>Add sponsor</span>  <i class="bi bi-plus-circle-fill"></i>
        </button>

        <input type="hidden" value="route('admin.sponsor.store')" name="url_sponsor_create" id="url_sponsor_create">


  <!-- Modal -->
            <div class="modal fade" id="add-sponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD SPONSOR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form  method="post"  id="form_create_sponsor" >

                            <input type="hidden" class="form-control" id="recipient-name" name="_token"  v-model="form._token">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name"  v-model="form.name">
                        </div>


                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Business hours:</label>
                            <input type="text" class="form-control" id="recipient-name" name="time_support" v-model="form.time_support">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Phone number:</label>
                            <input type="number" class="form-control" id="recipient-name" name="phone_number" v-model="form.phone_number">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="recipient-name" name="address" v-model="form.address">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="recipient-name" name="email"  v-model="form.email">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text" name="description" v-model="form.description"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" v-on:click="save_sponsor()" class="btn btn-primary">Create </button>
                    </div>
                </div>
                </div>
            </div>


    </div>




</template>

<script>
    export default {
            data() {
                return {
                    form:{
                    "name":"",
                    "description":"",
                    "time_support":"",
                    "address":"",
                    "email":"",
                    "_token":""


                },
                BASE_URL: window.location.origin,
                message:'',
                submitted:false,
                successfull:false,
                url_post:'',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }

            },

            created() {
                this.form._token=this.csrf
            },
            mounted() {


            },
            computed: {

            },
            methods: {

                save_sponsor(){



                    axios.post(this.BASE_URL + `/admin/sponsors/store`,this.form).then(response => {

                                    console.log(response);

                    });

                }




            },
    }
</script>
