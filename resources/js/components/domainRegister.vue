<template>
    <div class="">
        <form enctype="multipart/form-data" @submit.prevent="submitDomain">
            <div class="form-group">
                <div class="row">

                    <div class="col-6">
                        <label for="">Select a category</label>
                        <select v-model="form.cat_id" name="cat_id" :class="{'is-invalid':form.errors.has('cat_id')}"
                            class="form-control" @change="cahngeSubcat">
                            <option value="" disabled selected>Select a category</option>
                            <option v-for="cat in this.cats" :value="cat.id">{{ cat.name }}</option>
                        </select>
                        <div class="invalid-feedback" v-show="form.errors.has('cat_id')"
                            v-text="form.errors.get('cat_id')"></div>
                    </div> <!-- col-6  -->

                    <div class="col-6">
                        <label for="">Select a subcategory if you wish</label>
                        <select v-model="form.subcat_id" name="subcat_id" class="form-control">
                            <option value="" disabled selected>Select a subcategory</option>
                            <option v-for="cat in subCatsFilter" :value="cat.id">{{ cat.name }}</option>
                        </select>

                    </div><!-- col-6  -->
                </div><!-- {{-- row --}} -->

            </div><!-- {{-- form-group --}} -->

            <div class="form-group">
                <div class="row">

                    <div class="col-6">
                        <label for="">Email</label>
                        <input v-model="form.email" :class="{'is-invalid':form.errors.has('email')}"
                            class="form-control" type="email" name="email" placeholder="Enter your email address"
                            @keydown="form.errors.clear('email')" required>
                        <div class="invalid-feedback" v-show="form.errors.has('email')"
                            v-text="form.errors.get('email')"></div>
                    </div><!-- {{-- col-6 --}} -->

                    <div class="col-6">
                        <label for="">Domain URL</label>
                        <input v-model="form.url" :class="{'is-invalid':form.errors.has('url')}" class="form-control"
                            type="url" name="url" placeholder="Enter Domain URL" required>
                        <div class="invalid-feedback" v-show="form.errors.has('url')" v-text="form.errors.get('url')">
                        </div>
                    </div><!-- {{-- col-6 --}} -->

                </div><!-- {{-- row --}} -->
            </div><!-- {{-- form-group --}} -->


            <div class="form-group">

                <input class="" type="file" id="img" name="img">

            </div><!-- {{-- form-group --}} -->


            <div class="form-group">

                <label for="">Title of your website</label>
                <input v-model="form.title" :class="{'is-invalid':form.errors.has('title')}" class="form-control"
                    type="text" name="title" placeholder="Enter title of your website"
                    @keydown="form.errors.clear('title')" required>
                <div class="invalid-feedback" v-show="form.errors.has('title')" v-text="form.errors.get('title')"></div>
            </div><!-- {{-- form-group --}} -->

            <div class="form-group">

                <label for="">Short description</label>
                <input v-model="form.shortDesc" class="form-control" type="text" name="shortDesc"
                    placeholder="Short description">

            </div><!-- {{-- form-group --}} -->


            <div class="form-group">


                <vue-editor required :class="{'is-invalid':form.errors.has('desc')}" v-model="form.desc" />
                <div class="invalid-feedback" v-show="form.errors.has('desc')" v-text="form.errors.get('desc')"></div>

            </div><!-- {{-- form-group --}} -->

            <button class="btn btn-success">Submit Your Domain</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['cats', 'subcats'],
        data() {
            return {
                form: new Form({
                    email: '',
                    title: '',
                    url: '',
                    shortDesc: '',
                    desc: '',
                    subcat_id: '',
                    cat_id: '',
                })
            }
        },
        computed: {
            subCatsFilter: function () {
                return this.subcats.filter((item) => item.category_id == this.form.cat_id);
            }
        },
        methods: {
            cahngeSubcat: function () {
                this.form.subcat_id = '';
            },
            submitDomain: function () {
                let data = new FormData();
                data.append('title', this.form.title);
                data.append('email', this.form.email);
                data.append('url', this.form.url);
                data.append('shortDesc', this.form.shortDesc);
                data.append('desc', this.form.desc);
                data.append('subcat_id', this.form.subcat_id);
                data.append('cat_id', this.form.cat_id);
                if (document.getElementById('img').files[0]) {
                    data.append('img', document.getElementById('img').files[0]);
                };
                console.log(data);
                /* axios.post('/domain', data).then((response) => {
                    this.form.reset();
                    new Noty({
                        theme: 'metroui',
                        type: 'success',
                        layout: 'topRight',
                        text: "The domain has been added successfully",
                        timeout: 2000,
                        killer: true
                    }).show();
                }).catch(error => [
                    new Noty({
                        theme: 'metroui',
                        type: 'error',
                        layout: 'topRight',
                        text: "Something went wrong",
                        timeout: 2000,
                        killer: true
                    }).show(),

                    this.form.errors.record(error.response.data)
                ]); */
            }

        }
    }

</script>
