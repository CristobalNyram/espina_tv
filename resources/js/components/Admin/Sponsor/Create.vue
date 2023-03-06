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
                         <div v-for="(errorArray, idx) in notifmsg" :key="idx">
                            <div v-for="(allErrors, idx) in errorArray" :key="idx">
                                <span class="text-danger">{{ allErrors}} </span>
                            </div>
                        </div>

                            <input type="hidden" class="form-control" id="_token" name="_token" :value="csrf">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name"  maxlength="155"  v-model="form.name">
                        </div>


                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Business hours:</label>
                            <input type="text" class="form-control" id="recipient-name" name="time_support"  maxlength="50"  v-model="form.time_support">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Phone number:</label>
                            <input  type="number" class="form-control" id="recipient-name" name="phone_number"  maxlength="20" v-model="form.phone_number">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="recipient-name" name="address"  maxlength="155" v-model="form.address">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="recipient-name" name="email"  maxlength="155"  v-model="form.email">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text" name="description"  maxlength="255"  v-model="form.description"></textarea>
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
            props: {
                get_sponsor: { type: Function },
            },
            data() {
                return {

                    notifmsg :'',


                    form:{
                    "name":"",
                    "description":"",
                    "time_support":"",
                    "address":"",
                    "email":"",
                    "_token":""
                    },

                    BASE_URL: window.location.origin,
                    url_post:'',
                    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    form_html: document.getElementById('form_create_sponsor')

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

                reset_form_success_process(){

                },


                save_sponsor(){

                   axios.post(this.BASE_URL + `/admin/sponsors/store`,
                    {
                         'name': this.form.name,
                         'description': this.form.description,
                         'time_support': this.form.time_support,
                         'phone_number': this.form.phone_number,
                         'address': this.form.address,
                         'email':this.form.email,
                        '_token':  this.form._token
                    },

                    ).then(response => {

                                     if(response.data.status=='2'){
                                        toastr.success(response.data.message);
                                        this.reset_form_success_process();

                                    }else{
                                        toastr.warning(response.data.message);

                                    }
                    })
                    .catch(e=>{

                        if(e.response.status==422 ){


                            this.notifmsg = e.response.data.errors;



                        }

                    });

                }




            },
    }
</script>
