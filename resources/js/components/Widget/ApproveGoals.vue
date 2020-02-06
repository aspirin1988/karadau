<template>
    <div>
        <button class="button round button-blue-stroke" @click="Approve()">
            сделано!
        </button>
        <div ref="delete_teammate" class="offcanvas">
            <div class="overlay"></div>
            <div class="center-center">
                <div class="block modal-body" style="width: 400px; height: 536px;">
                    <div class="form">
                        <p><img style="width: 310px; height: 310px; margin-bottom: 20px;" :src="image" alt=""></p>
                        <div class="row flex-center">
                            <button class="button round button-green-stroke" @click="Confirm()">Цель досстигнута!
                            </button>
                        </div>
                        <div class="row flex-center" style="margin-top:10px;">
                            <a href="#" style="width: 207px;" class="button round button-gray-stroke" @click="Cancel()">отменить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['id', 'image'],
        data() {
            return {
                modal: null,
            }
        },
        mounted() {
            this.modal = this.$refs['delete_teammate'];
        },
        methods: {
            Approve: function () {
                this.modal.classList.add('active');
            },
            Cancel: function () {
                this.modal.classList.remove('active');
            },
            Confirm: function () {
                this.$http.get('/home/personal_goals/approve/' + this.id).then(response => {
                    this.modal.classList.remove('active');
                    if (response.data.result) {
                        location.reload();
                    }
                });
            }
        },
        watch: {}

    }
</script>
