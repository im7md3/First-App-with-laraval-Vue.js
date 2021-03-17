<template>
    <div class="mt-5">
        <div class="row">
            <div class="col-12 p-2">
                <div class="categorybox w-100 align-items-center" @click="selectedAll">
                    <h3 class="text-center btn btn-outline-primary d-block font-weight-bolder shadow">Show all links</h3>
                </div>
            </div><!-- col-12 -->

            <div class="col-4 p-2" v-for="cat in this.cats" @click="catIdValue(cat.id)">
                <div class="categorybox w-100 align-items-center py-1">
                    <h5 class="text-center btn btn-outline-primary d-block font-weight-bolder shadow">{{cat.name}}</h5>
                </div>

            </div>

            

            <div class="col-4 p-2 mt-5" v-for="cat in subcatsFilter" @click="subcatIdValue(cat.id)">
                    <div class="categorybox w-100 align-items-center py-1">
                    <h5 class="text-center btn btn-outline-success d-block font-weight-bolder shadow">{{cat.name}}</h5>
                    </div>

                </div>
            

        </div>
            <div class="row">
                <div class="col-4 p-2 mt-5" v-for="link in linksFilter">
                    <div class="categorybox w-100 align-items-center py-1">
                    <div class="text-center btn btn-outline-dark d-block font-weight-bolder shadow">
                        <h5>{{link.title}}</h5>
                    <p class="lead text-break">{{link.url}}</p>
                    </div>
                    </div>

                </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['cats','subcats','links'],   
    data(){
        return{
            catid:"",
            subcatid:""
        }
    },
    methods:{
        catIdValue:function(id){
            this.subcatid="";
            this.catid = id;
        },
        subcatIdValue:function(id){
            this.subcatid = id;
        },
        selectedAll:function(){
            this.subcatid="";
            this.catid = "";
        }
    },
    computed:{
        
        subcatsFilter:function(){
            return this.subcats.filter((item)=>item.category_id==this.catid);
        },
        linksFilter:function(){
            if(this.catid==="" && this.subcatid===""){
                return this.links;
            }else if(this.catid==="" && this.subcatid!="" || this.catid!=="" && this.subcatid!=""){
                return this.links.filter((item)=>item.subcategory_id==this.subcatid);
            }else if(this.catid!="" && this.subcatid===""){
                return this.links.filter((item)=>item.category_id==this.catid);
            }

        }
    }
}
</script>