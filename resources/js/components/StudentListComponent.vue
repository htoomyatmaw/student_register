<template>
  <v-card class="mt-5">
    <v-card-title>
      Student List
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="students"
      :search="search"
    ></v-data-table>
  </v-card>
</template>

<script>
  export default {
    props: ['students'],
    data () {
      return {
        search: '',
        headers: [
          {
            text: '#Roll NO',
            align: 'left',
            sortable: false,
            value: 'rollno',
          },
          { text: 'Name', value: 'name' },
          { text: 'NRC', value: 'student_nrc' },
          { text: 'Father Name', value: 'father_name' },
          { text: 'NRC', value: 'father_nrc' },
          { text: 'Phone', value: 'phone' },
          { text: 'Email', value: 'student_email' },
          { text: 'Address', value: 'address' },
          
        ],
      }
    },

    methods:{
      
    },

    mounted() {
      // console.log('Student List : ' + JSON.stringify( this.students ));
    }
  }
</script>