<template>
    <div class="container " >


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ title_columns[0] }}</th>
                    <th scope="col">{{ title_columns[1] }}</th>
                    <th scope="col">{{ title_columns[2] }}</th>
                </tr>
            </thead>

                <tbody>

                 <tr v-for="(sponsor,index) in sponsors" :key="index">
                        <td>{{ sponsor.id }}</td>
                        <td>{{ sponsor.name }}</td>
                        <td>{{ sponsor.description }}</td>

                        <td>

                            <button title="Edit" type="button" class="btn btn-primary">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <button title="Add photo to Gallery" type="button" class="btn btn-warning">
                                <i class="bi bi-camera2"></i>
                            </button>
                            <button title="Delete" type="button" class="btn btn-danger"  v-on:click="delete_sponsor(sponsor.id)">
                            <i class="bi bi-trash"></i>
                            </button>
                            <button title="Desactive" type="button" class="btn  btn-warning"  v-if="sponsor.status==2"  v-on:click="desactive_sponsor(sponsor.id)">
                            <i class="bi bi-camera-video-off"></i>
                            </button>

                            <button title="Active" type="button" class="btn   btn-success"   v-if="sponsor.status==-1"  v-on:click="active_sponsor(sponsor.id)">
                            <i class="bi bi-camera-video"></i>


                            </button>


                        </td>

                    </tr>



                </tbody>

            <tbody>

            </tbody>
        </table>
    </div>
</template>

<script>
import { title } from 'process';

    export default {
            data() {
                return {
                    title_columns:[
                        'Name',
                        'Descriptions',
                        'Options'
                    ],
                    sponsors: [],
                    BASE_URL: window.location.origin

                }
            },

            created() {
                this.getSponsors();
            },
            mounted() {
                // this.ini();
            },
            computed: {

            },
            methods: {
                // ini()
                getSponsors() {
                    axios.get(this.BASE_URL + "/admin/sponsors/list").then(response => {
                        this.sponsors = response.data;

                    });


                },
                delete_sponsor(id){

                    swal("Do you want to delete this sponsor?", {
                            buttons: {
                                cancel: "Cancel",
                                catch: {
                                text: "Yes, delete!",
                                value: "delete",
                                },
                            },
                            })
                            .then((value) => {
                            switch (value) {



                                case "delete":

                                axios.get(this.BASE_URL + `/admin/sponsors/delete/${id}`, {
                                    _token: "{{ csrf_token() }}",
                                }).then(response => {
                                    this.getSponsors();

                                    if(response.data.status=='2'){
                                        toastr.success(response.data.message);

                                    }else{
                                        toastr.warning(response.data.message);

                                    }

                                });

                                break;

                                default:
                                swal("Action canceled");
                            }
                            });
                },
                desactive_sponsor(id){

                    swal("Do you want to desactive this sponsor?", {
                            buttons: {
                                cancel: "Cancel",
                                catch: {
                                text: "Yes, deactive!",
                                value: "delete",
                                },
                            },
                            })
                            .then((value) => {
                            switch (value) {



                                case "delete":

                                axios.get(this.BASE_URL + `/admin/sponsors/desactive/${id}`, {
                                    _token: "{{ csrf_token() }}",
                                }).then(response => {
                                    this.getSponsors();

                                    if(response.data.status=='2'){
                                        toastr.success(response.data.message);

                                    }else{
                                        toastr.warning(response.data.message);

                                    }

                                });

                                break;

                                default:
                                swal("Action canceled");
                            }
                            });
                },
                  active_sponsor(id){

                    swal("Do you want to active this sponsor?", {
                            buttons: {
                                cancel: "Cancel",
                                catch: {
                                text: "Yes, active!",
                                value: "delete",
                                },
                            },
                            })
                            .then((value) => {
                            switch (value) {



                                case "delete":

                                axios.get(this.BASE_URL + `/admin/sponsors/active/${id}`, {
                                    _token: "{{ csrf_token() }}",
                                }).then(response => {
                                    this.getSponsors();

                                    if(response.data.status=='2'){
                                        toastr.success(response.data.message);

                                    }else{
                                        toastr.warning(response.data.message);

                                    }

                                });

                                break;

                                default:
                                swal("Action canceled");
                            }
                            });
                }
            },
    }
</script>
