<template>
<v-row justify="center" class="mt-3">
    <v-card width="800">
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
                    <label>: 5CS-5</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Profile</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: image.jpg</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Name</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: Htoo Myat Maw</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">NRC</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: 5/MYN(N)-894949</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Father Name</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: U Win Maw</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">NRC</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: 5/MYN(N)-094380</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Email</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: hmm@gmail.com</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Phone</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: 094983847829</label>
                </v-col>
            </v-row>
            <v-row class="mt-5" cols="6" sm="6">
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold ml-5">Date of Birth</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: 1998-6-20</label>
                </v-col>

                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">Address</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: Monywa</label>
                </v-col>
            </v-row>

            <v-divider></v-divider>

            <v-row>
                <v-col cols="6" sm="6" md="6">
                    <h6 class="font-weight-bold ml-5">Your Enrolled Fees Per Year</h6>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label class="font-weight-bold">First Year</label>
                </v-col>
                <v-col cols="3" sm="3" md="3">
                    <label>: 10000 Ks</label>
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
                    <ul>
                        <li class="font-weight-bold ml-5">Myanmar ( 3000 Ks)</li>
                    </ul>
                </v-col>
            </v-row>
            
        </v-container>
    </v-card>
</v-row>
</template>

<script>
export default {
    data(){

    },

    methods:{

    }
}
</script>