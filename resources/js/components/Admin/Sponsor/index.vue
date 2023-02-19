<template>
    <div class="container " >


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ title_columns[0] }}</th>
                    <th scope="col">{{ title_columns[1] }}</th>
                    <th scope="col">{{ title_columns[2] }}</th>

                <!-- <th scope="col">Horario de atención</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th> -->
                </tr>

                <tbody>

                    <tr v-for="(item,index) in sponsors" :key="index">
                        <td>{{ item.id }}</td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                </tbody>

            </thead>
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
                }
            },
    }
</script>
