<template>
<v-row justify="center" class="mt-3">
    <v-card width="900">
        <v-container fluid>
            <v-row>
                <v-toolbar class="bg-info mt-0">
                    <v-toolbar-title class="text-white">Your Enrolled Information</v-toolbar-title>
                </v-toolbar>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Roll No</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.rollno}}</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Profile</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.profile}}</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Name</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.name}}</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">NRC</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.student_nrc}}</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Father Name</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.father_name}}</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">NRC</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.father_nrc}}</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Email</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.student_email}}</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Phone</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.phone}}</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Date of Birth</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.dob}}</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Address</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: {{enrolled.address}}</label>
                </v-col>
            </v-row>

            <v-divider></v-divider>

            <v-row>
                <v-col cols="6" sm="6" md="6">
                    <h6 class="font-weight-bold ml-5">Your Enrolled Fees Per Year</h6>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">{{relationdata.year_name}}</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>{{ relationdata.year_fee }} Ks</label>
                </v-col>
            </v-row>

            <v-divider></v-divider>

            <v-row>
                <v-col cols="12" sm="12">
                    <h6 class="font-weight-bold ml-5">Your Chooseted Books List</h6>
                </v-col>
            </v-row>

            <v-row>
                <v-col>
                    <ul v-for="(booklist, index) in relationdata.bookdetail" :key="index">
                        <li class="font-weight-bold ml-5">{{booklist.name}} ( {{booklist.price}} Ks)</li>
                    </ul>
                </v-col>
            </v-row>
            
        </v-container>
    </v-card>
</v-row>
</template>

<script>
export default {

    props: ['enrolled','relationdata'],

    data(){
        return{

        }
    },

    methods:{

    }
}
</script>