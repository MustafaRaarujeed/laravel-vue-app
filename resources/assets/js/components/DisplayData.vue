<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Filter By:</strong>
                        <!-- <span><button @click="ascSort()">{{ buttonValue }}</button></span> -->
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Hotel and Rooms
                    </div>

                    <div class="panel-body" v-for="hotel in hotels">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th colspan="3">{{ hotel.hotel_name }}</th>
                                </tr>
                                <tr>
                                    <th>Room Type</th>
                                    <th>Status</th>
                                    <th>Available Occupancy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="room in hotel.rooms">
                                    <td>{{ room.room_name }}</td>
                                    <td>{{ room.room_status }}</td>
                                    <td>{{ room.room_occupancy }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                hotels: [],
                value: 'asc',
                buttonValue: 'Asc',
                sortValue: true
            }
        },
        mounted() {
            axios.get('/api/data').then((response) => {
                this.hotels = response.data;
            });
        },/*
        computed: {
            defaultFilter() {
                axios.get('/api/data/' + this.value).then((response) => {
                    this.hotels = response.data;
                });
                return this.hotels;
            }
        },*/
        methods: {
            ascSort() {
                this.value = 'desc';
                this.sortValue = false;
                this.sortValue = !this.sortValue;
                this.buttonValue = 'DESC';
            },
            descSort() {
                this.value = 'asc';
                this.buttonValue = 'ASC';
                this.sortValue = true;
            }
        }
    }
</script>
