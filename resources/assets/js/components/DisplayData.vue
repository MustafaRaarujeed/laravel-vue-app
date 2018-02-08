<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                        <strong>{{ hotel.hotel_name }}</strong>
                        <p v-for="room in hotel.rooms">
                            {{ room.room_name }}
                        </p>
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
