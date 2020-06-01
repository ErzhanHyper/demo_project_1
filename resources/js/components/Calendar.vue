<template>
   <div>
      <FullCalendar
      :locale= 'kk1'
      defaultView="dayGridMonth"
      :plugins="calendarPlugins" />
      <div id="time">{{ time }}</div>
   </div>
</template>

<script>

import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import kkLocale from './kk.js';
import moment from 'moment';

export default {
   components: {
      FullCalendar
   },
   data() {
      return {
         time: moment(new Date()).locale('kk').format("llll"),
         kk1: kkLocale,
         calendarPlugins: [ dayGridPlugin ],
      }
   }
}


</script>

<style lang='scss'>

@import '~@fullcalendar/core/main.css';
@import '~@fullcalendar/daygrid/main.css';

</style>
