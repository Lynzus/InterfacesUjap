<template>
    <div class="">
        {{users.name}}
    </div>
</template>
<script>
import axios from 'axios'
import { error } from 'console'
import { response } from 'express'

export default {
    data (){
        return{
        users:{ }
        }
    },
    // mounted(){
    //     axios.get('/api/users').then((res)=>{
    //         this.users = res.data,
    //         console.log([res.data]) 
    //     }) 
    // },
    methods: {
        getUsers(){
            axios
            .get(window.location.origin +index)
            .then((response)=>{
                this.users = response.data;
                console.log(response.data)
            })
            // .catch((errors)=>{
            //     console.log(errors);
            // }) 
        } 
    }
}
</script>