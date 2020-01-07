<template>
    <v-container fluid>
        <v-row align="center" style="margin-left: 250px; margin-top: 250px;">
            <v-col cols="2" sm="2" >
                <v-btn color="bg-info" dark large @click="firstEnroll(authuserid.id)">First Year</v-btn>
            </v-col>
            <v-col cols="2" sm="2">
                <v-btn color="bg-info" dark large @click="SecondEnroll(authuserid.id)">Second Year</v-btn>
            </v-col>
            <v-col cols="2" sm="2">
                <v-btn color="bg-info" dark large @click="ThirdEnroll(authuserid.id)">Third Year</v-btn>
            </v-col>
            <v-col cols="2" sm="2">
                <v-btn color="bg-info" dark large @click="FourthEnroll(authuserid.id)">Fourth Year</v-btn>
            </v-col>
            <v-col cols="2" sm="2">
                <v-btn color="bg-info" dark large @click="FifthEnroll(authuserid.id)">Fifth Year</v-btn>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {

    props:['res'],

    data(){
        return{
            authuserid: '',
        }
    }, 

    methods:{

        authUser(){
            axios.get('/authuserid').then(res => {
                this.authuserid = res.data;
                // console.log(res.data);
            })
        },

        firstEnroll(id){
            window.location.href = '/viewenrolled/'+id;
        },

        SecondEnroll(id){
            window.location.href = '/secondviewenrolled/'+id;
        },

        ThirdEnroll(id){
            window.location.href = '/thirdviewenrolled/'+id;
        },

        FourthEnroll(id){
            window.location.href = '/fourthviewenrolled/'+id;
        },

        FifthEnroll(id){
            window.location.href = '/fifthviewenrolled/'+id;
        }
    },

    mounted(){
        this.authUser();
    }
}
</script>