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

                            <button type="button" class="btn btn-primary">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <button type="button" class="btn btn-warning">
                                <i class="bi bi-camera2"></i>
                            </button>
                            <button type="button" class="btn btn-danger"  v-on:click="delete_sponsor(sponsor.id)">
                            <i class="bi bi-trash"></i>
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
                }
            },
    }
</script>
