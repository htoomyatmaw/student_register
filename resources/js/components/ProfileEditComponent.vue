<template>
    <v-row justify="center" style="margin-top: 100px;">
        <v-card width="800">
            <v-container fluid>
                <v-toolbar class="bg-info" height="40">
                    <v-toolbar-title class="text-white">Profile</v-toolbar-title>
                </v-toolbar>
                <v-row class="mt-5">
                    <v-col cols="6" sm="6"><label class="font-weight-bold ml-5 mt-5">Name :</label></v-col>
                    <v-col cols="6" sm="6">
                        <v-text-field v-model="useredit.name"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col cols="6" sm="6"><label class="font-weight-bold ml-5 mt-5">Email :</label></v-col>
                    <v-col cols="6" sm="6">
                        <v-text-field v-model="useredit.email"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col cols="6" sm="6"><label class="font-weight-bold ml-5 mt-5">New Password :</label></v-col>
                    <v-col cols="6" sm="6">
                        <v-text-field 
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show1 ? 'text' : 'password'"
                            @click:append="show1 = !show1"
                            >
                        </v-text-field>
                    </v-col>
                </v-row>
                <v-row justify="center" class="mt-5">
                    <v-btn class="bg-danger text-white mr-5" @click="profileCancel(useredit.id)">Cancel</v-btn>
                    <v-btn class="bg-info text-white" @click="profileUpdate(useredit.id)">Update</v-btn>
                </v-row>
            </v-container>
        </v-card>
    </v-row>
</template>

<script>
export default {

    props:['useredit'],

    data(){
        return {
            show1: false,
        }
    },

    methods:{

        profileCancel(id){
            window.location.href='/profile/'+id;
        },

        profileUpdate(id){
           axios.post('/profileUpdate', this.useredit).then( res =>{
               if(res.data == 'success'){
                   window.location.href = '/profile/'+id;
               }
           })
        },

    },

    created(){


    }
}
</script>