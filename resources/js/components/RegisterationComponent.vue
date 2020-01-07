<template>
<v-app class="mt-4">
  <v-card
    class="mx-auto"
    max-width="900"
  >
    
    <v-toolbar
     class="bg-info"
    >
      <v-toolbar-title class="text-white">Student Registeration Form</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-toolbar>
    <v-form ref="form" v-model="valid" lazy-validation>
    <v-container fluid>
     
      <v-row dense>
          <v-col>
                <v-row>
                      <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Profile"
                        v-model="student.profile"
                        :rules="[v => !!v || 'Profile is required']"
                        required
                        ></v-text-field>
                        <!-- <v-file-input label="File input" @change="onFileChange"></v-file-input> -->
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Roll No"
                        v-model="student.rollno"
                        :rules="[v => !!v || 'Rollno is required']"
                        required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Student Name"
                        v-model="student.name"
                        :rules="[v => !!v || 'Student Name is required']"
                        required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="NRC"
                        v-model="student.student_nrc"
                        :rules="[v => !!v || 'Student NRC is required']"
                        required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Father Name"
                        v-model="student.father_name"
                        :rules="[v => !!v || 'Father Name is required']"
                        required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="NRC"
                        v-model="student.father_nrc"
                        :rules="[v => !!v || 'Father NRC is required']"
                        required
                        ></v-text-field>
                    </v-col>
                     <!-- <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="DOB"
                        v-model="student.dob"
                        :rules="[v => !!v || 'Student DOB is required']"
                        required
                        ></v-text-field>
                    </v-col> -->
                    <v-col cols="12" sm="6">
                        <v-menu
                            ref="menu"
                            v-model="menu"
                            :close-on-content-click="false"
                            :return-value.sync="date"
                            transition="scale-transition"
                            offset-y
                            min-width="290px"
                        >
                            <template v-slot:activator="{ on }">
                            <v-text-field
                                v-model="student.dob"
                                label="Choose Your Date of Birth"
                                prepend-icon="event"
                                readonly
                                v-on="on"
                                :rules="[v => !!v || 'Student DOB is required']"
                                required
                            ></v-text-field>
                            </template>
                            <v-date-picker v-model="student.dob" no-title scrollable>
                            <v-spacer></v-spacer>
                            <v-btn text color="primary" @click="menu = false">Cancel</v-btn>
                            <v-btn text color="primary" @click="$refs.menu.save(date)">OK</v-btn>
                            </v-date-picker>
                        </v-menu>
                    </v-col>

                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Address"
                        v-model="student.address"
                        :rules="[v => !!v || 'Address is required']"
                        required
                        ></v-text-field>
                    </v-col>
                     <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Phone"
                        v-model="student.phone"
                        :rules="[v => !!v || 'Phone is required']"
                        required
                        ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                        label="Email"
                        v-model="student.student_email"
                        :rules="emailRules"
                        required
                        ></v-text-field>
                    </v-col>
                </v-row>

                <v-divider></v-divider>
                    <tr>
                        <td class="col-md-5">{{ year.name }}</td>
                        <td class="col-md-7">{{ year.fee }}Ks</td>
                    </tr>
                 <v-divider></v-divider>
                    <h6 class="font-weight-bold">Activities Fee</h6>
                    <tr v-for="(activity, index) in activities" :key="index">
                        <td class="col-md-5">{{ activity.name }}</td>
                        <td class="col-md-7">{{ activity.fee }}Ks</td>
                    </tr>
                <v-divider></v-divider>

                   <v-container fluid v-show="firstYear">
                        <p>Select Major</p>
                        <v-row>
                        <v-radio-group :rules="[v => !!v || 'Major is required']" v-model="majorChecked" row v-for="(major, index) in majors" :key="index">
                            <v-radio :label="major.name" color="primary" :value="major.id" @change="selectMajor(major.id)"></v-radio>
                        </v-radio-group>
                        </v-row>
                   </v-container>
                   <!-- <v-container fluid v-show="!firstYear">
                        <p>Select Major</p>
                        <v-radio-group v-model="row" row>
                        <v-radio label="CS" color="primary" value="radio-1"></v-radio>
                        <v-radio label="CT" color="primary" value="radio-2"></v-radio>
                        </v-radio-group>
                   </v-container> -->

                <v-divider></v-divider>

                <p>Select Your Books</p>
                <v-container fluid>
                    <v-row>
                        <ul v-for="(book, index) in books" :key="index">
                            <v-checkbox
                                :label="book.name + ' ( '+ book.price + ' )'"
                                color="primary"
                                v-model="bookChecked"
                                :value="index"
                                :rules="[v => !!v || 'Book is required']"

                                >
                            </v-checkbox>
                        </ul>
                    </v-row>
                </v-container>
               
                <v-divider></v-divider>
                <v-row>
                    <v-col cols="12" md="4"></v-col>
                    <v-col cols="12" md="4">
                        <v-btn color="bg-info" :disabled="!valid"  @click="validate" class="mr-5 text-white">Submit</v-btn>
                        <v-btn color="bg-danger" @click="reset" class="text-white">Reset</v-btn>
                       
                    </v-col>
                    <v-col cols="12" md="4"></v-col>
                </v-row>
          </v-col>
      </v-row>
   
    </v-container>
    </v-form>
  </v-card>
</v-app>
</template>


<script>
  export default {
      props: ['year','majors','activities'],
    data () {
        return {
            student: {
                profile: '',
                rollno: '',
                name: '',
            
                student_nrc: '',
                father_name: '',
                father_nrc: '',
                dob: '',
                phone: '',
                student_email: '',
            
                address: '',
            },
            bookChecked: [],
            majorChecked: '',
            firstYear: true,
            books:[],
            valid: true,

            //Valications
            emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
            ],

            authid: [],

            date: new Date().toISOString().substr(0, 10),
            menu: false,
            modal: false,
            menu2: false,
        }
      
   

    },

    mounted(){
        this.authId();
    },

    methods: {
        selectMajor(majorId) {
            // debugger;   
            var data = {
                yearId: this.year.id,
                majorId: majorId,
            };
            axios.post('/fetchbooklist', data ).then(res => {
                this.books= res.data;
                // console.log(res.data);   
            });
        },

         authId(){
            axios.get('/authid').then(res => {
                this.authid = res.data;
                // console.log(this.authid);
            })
        },

        addStudent() {
    
            //debugger;
            var yearFee = parseInt(this.year.fee);

            var activityFee = 0;
            var bookFee = 0;
            var registerFee = 0;
            var selectbookId = [];
            var activityIds = [];
            var major = this.majorChecked;

            for(var i=0; i<this.activities.length; i++) {
                activityFee += parseInt(this.activities[i].fee);
                activityIds.push(this.activities[i].id);
            }

            for(var j=0; j<this.bookChecked.length; j++) {
                bookFee += parseInt(this.books[this.bookChecked[j]].price);
                selectbookId.push(this.books[this.bookChecked[j]].id);
            }

            registerFee = yearFee + activityFee + bookFee;

            //console.log(bookFee,activityIds);

            //console.log(this.student.rollno);


            var data = {
                student: this.student,
                registerFee: registerFee,
                userId: this.authid.id,
                yearId: this.year.id,
                selectedBookId: selectbookId,
                activityId: activityIds,
                major_id: major,
            };

            axios.post('/storeStudent', data).then ( resp => {
               if( resp.data == 'success') {

                   window.location.href = '/';
                   alert('Your registeration successfully!');
                   
               }
               else{
                   window.location.href = '/registeration/'+ this.year.id;
                   alert('Your selected year have already exited!');
               }
           })

        },
       
        validate () {   
        if (this.$refs.form.validate()) {
          this.snackbar = true
          this.addStudent()
        }
      },
      reset () {
        this.$refs.form.reset()
      }
     
      
    }
        
    }
</script>


   