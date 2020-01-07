<template>
  <v-toolbar class="bg-info">
    <v-toolbar-title class="toolbar-title text-white" style="font-size: 2.1em">Online Student Registeration</v-toolbar-title>
    <v-spacer></v-spacer>

    <v-btn color="white" class="mr-4" @click="homeFun()">Home</v-btn>

    <v-menu v-if="yearlist.length" offset-y>
        <template v-slot:activator="{ on }">
            <v-btn
                class="align-self-center mr-4"
                v-on="on"
            >
                Student List
                <v-icon right>mdi-menu-down</v-icon>
            </v-btn>
        </template>

        <v-list class="grey lighten-5">
            <v-list-item 
                v-for="(year, index) in yearlist"
                :key="index"
                @click="studentlistFun(year.id)"
                    >
                {{ year.name }}
            </v-list-item>
        </v-list>
    </v-menu>

    
    <v-btn color="white" v-if="login_status == false" @click="signinFun()">SignIn</v-btn>
    
    <v-btn color="white" class="ml-4" v-if="login_status == false" @click="signupFun()">SignUp</v-btn>

    <v-menu v-if="login_status == true" offset-y>
        <template v-slot:activator="{ on }">
            <v-btn
                class="align-self-center"
                v-on="on"
            >
                Registration
                <v-icon right>mdi-menu-down</v-icon>
            </v-btn>
        </template>

        <v-list class="grey lighten-5">
            <v-list-item 
                v-for="(registration,index) in yearlist"
                :key="index"
                @click="registrationFun(registration.id)"
                    >
                {{registration.name }}
            </v-list-item>
        </v-list>
    </v-menu>

    <v-menu v-if="login_status == true" offset-y>
        <template v-slot:activator="{ on }">
           <v-btn color="black" class="ml-3" v-on="on" fab small dark>
              <v-icon>mdi-account-circle</v-icon>
            </v-btn>
        </template>

        <v-list class="grey lighten-5">
            <v-list-item @click="profileFun(authid.id)">Profile</v-list-item>
            <v-list-item @click="enrolledFun(authid.id)">Your Enrolled</v-list-item>
            <v-list-item @click="logoutFun()">Logout</v-list-item>
        </v-list>
    </v-menu>

    <!-- <v-btn color="white" class="ml-4" v-if="login_status == true" @click="logoutFun()">Logout</v-btn> -->

  </v-toolbar>
</template>

<script>
import { log } from 'util';
  export default {

      props: ['login_status'],

    data: () => ({

      
      major: ['CST', 'CS', 'CT'],
      yearlist: [],

      authid : '',

    }),

    mounted()
    {
        this.authId();
    },
    

    methods:{

        homeFun(){
            window.location.href = '/';
        },

        signinFun(){

            window.location.href = '/login';
        },

        signupFun(){
           
            window.location.href = '/register';
        },

        fetchYear() {
            axios.get('/fetchyear').then(res => {
                this.yearlist = res.data;
                //console.log(res.data);  
            });
        },

        studentlistFun(id){

            window.location.href='/studentlist/'+id;
        },

        registrationFun(id){
           
            window.location.href='/registeration/'+ id;
        },

        profileFun(id){
            window.location.href='/profile/'+id;
        },

        enrolledFun(id){
            window.location.href = '/selectenrolled/'+id;
        },

        // enrolledFun(id){
        //     window.location.href = '/enrolledinfo/'+id;

        // },

        authId(){
            axios.get('/authid').then(res => {
                this.authid = res.data;
                // console.log(res.data);
            })
        },

        logoutFun(){
            if( ! confirm('Are you sure to logout?')) return;
            axios.get('/logout').then(res => {
                window.location.href='/';
            })
            
        },

       
    },

    created() {
        this.fetchYear();
    }
  }
</script>
