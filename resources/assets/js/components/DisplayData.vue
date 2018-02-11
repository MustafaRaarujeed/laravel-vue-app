<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Filter By:</strong>
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
                hotels: []
            }
        },
        mounted() {
            axios.get('/api/data').then((response) => {
                this.hotels = response.data;
            });
        }
    }
</script>
