<template>
	<date-picker name ="data-envio" v-model="date" :config="config"></date-picker>
</template>

<script>
  // Import required dependencies 
  import 'bootstrap/dist/css/bootstrap.css';
  
  // Import this component
  import datePicker from 'vue-bootstrap-datetimepicker';
  
  // Import date picker css
  import 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css';
   
  export default {    
    data () {
      return {
        date: new Date(),
        config: {
          format: 'DD/MM/YYYY H:mm',
          useCurrent: false,
        }       
      }
    },
    components: {
      datePicker
    }
  }
</script>