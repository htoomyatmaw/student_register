<template>
    <v-row justify="center" style="margin-top: 100px;">
        <v-card width="800">
            <v-container fluid  v-for="(userinfo,index) in userdata" :key="index">
                <v-toolbar class="bg-info" height="40">
                    <v-toolbar-title class="text-white">Profile</v-toolbar-title>
                </v-toolbar>
                <v-row class="mt-5">
                    <v-col cols="6" sm="6"><label class="font-weight-bold ml-5">Name</label></v-col>
                    <v-col cols="6" sm="6"><label>: {{userinfo.name}}</label></v-col>
                </v-row>
                <v-row>
                    <v-col cols="6" sm="6"><label class="font-weight-bold ml-5">Email</label></v-col>
                    <v-col cols="6" sm="6"><label>: {{userinfo.email}}</label></v-col>
                </v-row>
                <v-row justify="center" class="mt-5">
                    <v-btn class="bg-info text-white" @click="profileEdit(userinfo.id)">Edit</v-btn>
                </v-row>
            </v-container>
        </v-card>
    </v-row>
</template>

<script>
export default {

    props:['userdata'],

    data(){
        return {

        }
    },

    methods:{

        profileEdit(id){
            window.location.href = '/profileedit/'+id;
        }

    },

    created(){


    }
}
</script>