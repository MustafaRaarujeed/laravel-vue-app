<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Upload Data</strong>
                    </div>
                    <div class="panel-body">
                        <form action="#" enctype="multipart/form-data" @submit.prevent="upload">
                            <div class="form-group">
                                <input type="file" v-on:change="onFileChange">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Upload Data
                                </button>
                            </div>
                        </form>
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
                files: null
            }
        },
        methods: {
            onFileChange(e) {
                this.files = e.target.files;
                console.log(this.files);
            },
            upload() {
                axios.post('/api/data', {files: this.files}).then((response) => {
                    console.log(response);
                    this.data = null;
                });
            }
        }
    }
</script>