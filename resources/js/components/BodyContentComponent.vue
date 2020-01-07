<template>
  <v-row class="col-lg-12">
      <v-col class="col-lg-6">
          <v-card class="mx-auto">
              <v-card-title>Registeration Fee</v-card-title>
              <v-simple-table >
                  <template v-slot:default>
                      <thead>
                          <tr>
                          <th class="text-left">Year</th>
                          <th class="text-left">Fee</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="(yearfees, index) in yearfee" :key="index">
                          <td>{{ yearfees.name }}</td>
                          <td>{{ yearfees.fee }} Ks</td>
                          </tr>
                      </tbody>
                  </template>
              </v-simple-table>
          </v-card>
      </v-col>

      <v-col class="col-lg-6">
          <v-card class="mx-auto">
              <v-card-title>Activities Fee</v-card-title>
              <v-simple-table >
                  <template v-slot:default>
                      <thead>
                          <tr>
                          <th class="text-left">Activity</th>
                          <th class="text-left">Fee</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="(activity, index) in activityfee" :key="index">
                          <td>{{ activity.name }}</td>
                          <td>{{ activity.fee }} Ks</td>
                          </tr>
                      </tbody>
                  </template>
              </v-simple-table>
          </v-card>
      </v-col>

  </v-row>

</template>

<script>
  export default {

    data: ()=> ({
      yearfee: [],
      activityfee: []
    }),

    methods:{

      registrationFee(){
        axios.get('/registrationfee').then(res=> {
          this.yearfee = res.data;
          // console.log(res.data);
        })
      },

      activityFee(){
        axios.get('/activityfee').then(res=> {
          this.activityfee = res.data;
          // console.log(res.data);
        })
      }
    },

    created() {
      this.registrationFee();
      this.activityFee();
      
    }
  }
</script>