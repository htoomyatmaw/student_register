import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import colors from 'vuetify/lib/util/colors'

Vue.use(Vuetify)

export default new Vuetify({
theme: {
   themes: {
   light: {
       primary: '#00695C',
       secondary: '#ffffff',
       accent: colors.shades.black,
       error: colors.red.accent3,
    },
   },
},

// theme:{
// primary: '#00695C',
// }
})