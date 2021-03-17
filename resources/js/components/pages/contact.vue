<template>
    <div class="">
        <h3 ref="myref">Contact {{name}}</h3>
    </div>
</template>

<script>
export default {
    data:function(){
        return{
            name:"pegasus"
        }
    },
    beforeCreate(){
        console.log(this.name);
    },
    created(){
        const q=(confirm('Are you sure?'));
        if(q==false){
            return;
        }
    },

}
</script>